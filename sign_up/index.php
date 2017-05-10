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
if($action == 'sign_up') {
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (empty($f_name) || empty($l_name) || empty($email) || empty($password)) {
        $error = "Please fill in all fields.";
        include('../errors/error.php');
    } else {
        add_user($f_name, $l_name, $email, $password);
        
        header('Location: ../index.php');
    }
}

?>