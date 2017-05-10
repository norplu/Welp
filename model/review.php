<?php
    // Gotta get em by the restaurant id
    function get_reviews_rest($restaurant_id) {
        global $db;
        $query = "SELECT title, comment, rating
                  FROM Review  
                  WHERE restaurant_id = '$restaurant_id';";
        $reviews = $db->query($query);
        
        return $reviews;
    }
    
    // Maybe you want to write a review, well here you go
    function add_review($user_id, $restaurant_id, $title, $comment, $rating) {
        global $db;
        $query = "INSERT INTO Review(user_id, restaurant_id, title, comment, rating) 
                  VALUES('$user_id', '$restaurant_id', '$title', '$comment', '$rating');";
        $db->exec($query);
    }
    
    // TODO MAYBE ADD EDITING COMMENTS
    // actually lets do that
    // maybe later
    /*
    function update_review(($user_id, $restaurant_id, $title, $comment, $rating) {
        global $db;
        
    }
    */
?>