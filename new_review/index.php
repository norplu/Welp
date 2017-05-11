<?php 
//require('../model/database.php');
//require('../model/review.php');

if(isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

$rest_id = $_GET['rest_id'];
    
add_review($_POST['user_id'], $_POST['rest_id'], $_POST['rev_title'], 
    $_POST['rev_review'], $_POST['rev_rating']);
    
    echo $rest_id;
           
//header("Location: ../index.php?action=rest_view&rest_id=$rest_id");

?>