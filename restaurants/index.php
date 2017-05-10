<?php 
require('../model/database.php');
require('../model/restaurant.php');
require('../model/user.php');

$restaurants = get_restaurants();

//include('view.php');

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
    
    include('restaurant_view.php');
}

?>