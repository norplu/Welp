<?php
    function get_restaurants() {
        global $db;
        $query = "SELECT restaurant_id, name, description, location, hours
                  FROM Restaurant;";
        $restaurants = $db->query($query);
        $restaurants = $restaurants->fetch();
        
        return $restaurants;
    }
    
    function get_restaurant($restaurant_id) {
        global $db; 
        $query = "SELECT name, description, location, menu, hours
                  FROM Restaurant
                  WHERE restaurant_id = '$restaurant_id';";
        $restaurant = $db->query($query);
        $restaurant = $restaurant->fetch();
        
        return $restaurant;
    }
    
    
?>