<?php
require('../model/database.php');
require('../model/user.php');
session_start();
if(isset($_SESSION['user_id'])){
    logout($_SESSION['user_id']);
}
header('Location: ../index.php');
?>