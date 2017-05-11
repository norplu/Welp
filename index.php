<?php 
require_once('./model/database.php');
require_once('./model/restaurant.php');
require_once('./model/user.php');
require_once('./model/review.php');

$restaurants = get_restaurants();

if(isset($_POST['action'])) {
    $action = filter_input(INPUT_POST, 'action');
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
        $rest_id = filter_input(intval(INPUT_POST, 'rest_id'));
    } else {
        $rest_id = 1;
    }
    
    $user_id = filter_input(intval(INPUT_POST, 'user_id'));
    $rest_id = filter_input(intval(INPUT_POST, 'rest_id'));
    $rev_title = filter_input(INPUT_POST, 'rev_title');
    $rev_review = filter_input(INPUT_POST, 'rev_review');
    $rev_rating = filter_input(intval(INPUT_POST, 'rev_rating'));
    
    add_review($user_id, $rest_id, $rev_title, $rev_review, $rev_rating);
    
    $rest = get_restaurant($rest_id);
    
    $name = $rest['name'];
    $desc = $rest['description'];
    $loc = $rest['location'];
    $hours = $rest['hours'];
    
    include('./restaurants/restaurant_view.php');
    
} else if ($action == 'add_restaurant') {
    $name = filter_input(INPUT_POST, 'rest_name');
    $desc = filter_input(INPUT_POST, 'rest_desc');
    $loc = filter_input(INPUT_POST, 'rest_loc');
    
    new_restaurant($name, $desc, $loc);
    
    include('./restaurants/restaurant_view.php');
}
?>