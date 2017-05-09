<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welp!</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="../style/fontawesome.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script src="./script/script.js"></script>
</head>
<body>
	<div id="page">
		<?php if (isset($_SESSION['user_id'])) : ?>
		<nav>
			<div class="nav-wrapper">
				<a href="../index.php" class="brand-logo center">Welp</a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="../logout">Logout</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="../logout">Logout</a></li>
				</ul>
			</div>
		</nav>
		<?php else : ?>
		<nav>
			<div class="nav-wrapper">
				<a href="#" class="brand-logo center">Welp</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="../sign_up">Sign Up</a></li>
					<li><a href="../login">Login</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="../sign_up">Sign Up</a></li>
					<li><a href="../login">Login</a></li>
				</ul>
			</div>
		</nav>
		<?php endif; ?>
		<div id="header">
			<h1></h1>
		</div>