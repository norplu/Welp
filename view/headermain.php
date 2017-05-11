<?php session_start(); ?>
<?php
	$user_id = $_SESSION['user_id'];
	$f_name = $_SESSION['f_name'];
	$f_name = $_SESSION['l_name']
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welp!</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="../style/fontawesome.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script src="../script/script.js"></script>
</head>
<body>
	<div id="page">
		<?php if (isset($_SESSION['user_id'])) : ?>
		<nav>
			<a href="./" class="brand-logo center">Welp</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<div class="row">
				<div class="col s10 offset-s1">
					<div class="nav-wrapper">
						<ul class="right hide-on-med-and-down">
							<li><a href="#add_restaurant">Add a Restaurant</a></li>
							<li><a href="../logout">Logout</a></li>
						</ul>
						<ul class="left hide-on-med-and-down">
							<li><a href="ftp://ftp.welp.io">FTP</a></li>
						</ul>
					</div>
				</div>
			</div>
			<ul class="side-nav" id="mobile-demo">
				<li><a href="#add_restaurant">Add a Restaurant</a></li>
				<li><a href="../logout">Logout</a></li>
				<li><a href="ftp://ftp.welp.io">FTP</a></li>
			</ul>
		</nav>
		<?php else : ?>
		<nav>
			<div class="nav-wrapper">
				<a href="./" class="brand-logo center">Welp</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<div class="row">
				<div class="col s10 offset-s1">
					<div class="nav-wrapper">
						<ul class="right hide-on-med-and-down">
							<li><a class="modal-content" href="#add_restaurant">Add a Restaurant</a></li>
							<li><a class="modal-content" href="#sign_up">Sign Up</a></li>
							<li><a cless="modal-content" href="#login">Login</a></li>
						</ul>
						<ul class="left hide-on-med-and-down">
							<li><a class="modal-content" href="ftp://ftp.welp.io">FTP</a></li>
						</ul>
					</div>
				</div>
			</div>
				<ul class="side-nav" id="mobile-demo">
					<li><a class="modal-content" href="#add_restaurant">Add a Restaurant</a></li>
					<li><a class="modal-content" href="#sign_up">Sign Up</a></li>
					<li><a cless="modal-content" href="#login">Login</a></li>
					<li><a class="modal-content" href="ftp://ftp.welp.io">FTP</a></li>
				</ul>
			</div>
		</nav>
		<?php endif; ?>
		<div id="sign_up" class="modal">
			<div class="modal-content center-align">
				<div class="row">
					<h3>Sign Up</h3>
				</div>
				<div class="row">
					<form id="sign_up" class="col s12" action="./sign_up/index.php" method="post">
						<input type="hidden" name="action" value="sign_up" />
						<div class="row">
							<div class="input-field col s5 offset-s1">
								<input id="f_name" type="text" name="f_name" class="validate" />
								<label for="f_name">First Name</label>
							</div>
							<div class="input-field col s5">
								<input id="l_name" type="text" name="l_name" class="validate" />
								<label for="l_name">Last Name</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s10 offset-s1">
								<input id="email" type="email" name="email" class="validate" />
								<label for="email">Email</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s10 offset-s1">
								<input id="password" type="password" name="password" class="validate" />
								<label for="password">Password</label>
							</div>
						</div>
						<input type="submit" value="Sign Up" class="btn red right" />
					</form>
				</div>
			</div>
		</div>
		<div id="login" class="modal">
			<div class="modal-content center-align">
				<div class="row">
					<h3>Login</h3>
				</div>
				<div class="row">
					<form id="login" class="col s12" action="./login/index.php" method="post">
						<input type="hidden" name="action" value="login" />
						<div class="row">
							<div class="input-field col s5 offset-s1">
								<input id="email" type="text" name="email" class="validate" />
								<label for="email">Email</label>
							</div>
							<div class="input-field col s5">
								<input id="password" type="password" name="password" class="validate" />
								<label for="password">Password</label>
							</div>
						</div>
						<input type="submit" value="login" class="btn red right" />
					</form>
				</div>
			</div>
		</div>
		<div id="add_restaurant" class="modal">
			<div class="modal-content center-align">
				<div class="row">
					<h3>New Restaurant</h3>
				</div>
				<div class="row">
					<form id="add_restaurant" class="col s12" action="../index.php" method="post">
						<input type="hidden" name="action" value="add_restaurant" />
						<div class="row">
							<div class="input-field col s5 offset-s1">
								<input id="rest_name" type="text" name="rest_name" class="validate" />
								<label for="rest_name">Name</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s10 offset-s1">
								<textarea id="rest_desc" name="rest_desc" class="materialize-textarea"></textarea>
								<label for="rest_desc">Description</label>
							</div>
						</div>
						<div class="row">
						    <div class="input-field col s10 offset-s1">
						        <input id="rest_loc" type="text" name="rest_loc" class="validate" />
						        <label for="rest_loc">Location</label>
						    </div>
						</div>
						<input type="submit" value="Submit" class="btn red right" />
					</form>
				</div>
			</div>
		</div>
		<div id="header">
			<h1></h1>
		</div>