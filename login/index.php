<?php 
require('../model/database.php');
require('../model/user.php');

if(isset($_POST['action'])) {
    $action = filter_inpute(INPUT_POST, 'action');
} else {
    $action = '';
}

if($action == '') {
    include('view.php');
}
if($action == 'login') {
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    
    if (empty($email) || empty($password)) {
        $error = "Please fill in all fields.";
        include('../errors/error.php');
    } else {
        login($email, $password);
        
        header('Location: ../index.php');
    }
}

?>