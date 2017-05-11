<?php 
require_once('./model/database.php');
require_once('./model/restaurant.php');
require_once('./model/user.php');
require_once('./model/review.php');

$restaurants = get_restaurants();

if(isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

if($action == '') {
    include('view.php');
} else if ($action == 'rest_view') {
    if(isset($_GET['rest_id'])) {
        $rest_id = intval($_GET['rest_id']);
    } else {
        $rest_id = 1;
    }
    
    $rest = get_restaurant($rest_id);
    
    $name = $rest['name'];
    $desc = $rest['description'];
    $loc = $rest['location'];
    $hours = $rest['hours'];
    
    include('./restaurants/restaurant_view.php');
    
} else if ($action == 'add_review') {
    if(isset($_POST['rest_id'])) {
        $rest_id = intval($_POST['rest_id']);
    } else {
        $rest_id = 1;
    }
    
    $user_id = intval($_POST['user_id']);
    $rest_id = intval($_POST['rest_id']);
    $rev_title = $_POST['rev_title'];
    $rev_review = $_POST['rev_review'];
    $rev_rating = intval($_POST['rev_rating']);
    
    add_review($user_id, $rest_id, $rev_title, $rev_review, $rev_rating);
    
    $rest = get_restaurant($rest_id);
    
    $name = $rest['name'];
    $desc = $rest['description'];
    $loc = $rest['location'];
    $hours = $rest['hours'];
    
    include('./restaurants/restaurant_view.php');
    
} else if ($action == 'add_restaurant') {
    $name = $_POST['rest_name'];
    $desc = $_POST['rest_desc'];
    $loc = $_POST['rest_loc'];
    
    new_restaurant($name, $desc, $loc);
    
    include('./restaurants/restaurant_view.php');
}
?>