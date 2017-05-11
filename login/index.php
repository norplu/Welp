<?php 
require('../model/database.php');
require('../model/user.php');

if(isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = '';
}

if($action == '') {
    include('view.php');
}
if($action == 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (empty($email) || empty($password)) {
        $error = "Please fill in all fields.";
        include('../errors/error.php');
    } else {
        login($email, $password);
        
        header('Location: ../index.php');
    }
}

?>