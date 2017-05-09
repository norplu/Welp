<?php 

require('model/database.php');
require('model/restaurant.php');

include('view.php');

if(!(isset($_POST['action']))) {
    $restaurants = get_restaurants();
    include('controller/restaurants/index.php');
}

?>