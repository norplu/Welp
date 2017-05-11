<?php
	$dsn = 'mysql:host=localhost;dbname=Welp';
	$username = 'root';
	$password = 'password';
	
	try {
		$db = new PDO($dsn,$username,$password);
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo "awwww";
		include('errors/database_error.php');
		exit();
		
	}
?>
