<?php 
require('../model/database.php');
require('../model/review.php');

include('view.php');

add_review($_POST['user_id'], $_POST['rest_id'], $_POST['rev_title'], 
           $_POST['rev_review'], $_POST['rev_rating']);
           


?>