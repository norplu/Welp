<?php

    // get in here bitch
    function add_user($f_name, $l_name, $email, $password) {
        global $db;
        //if(check_email($email)) {
            $hash = pass_prot($password);
            $query = "INSERT INTO User(f_name, l_name, email, password)
                      VALUES('$f_name', '$l_name', '$email', '$hash');";
            $db->exec($query);
        //} else {
            // make error message later yo
        //}
    }
    
    // CRYPT THAT SHIT
    function pass_prot($password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        return $hash;
    }
    
    function check_email($email) {
        global $db;
        $query = "SELECT email
                  FROM User
                  WHERE email = '$email';";
        $check = $db->query($query);
        
        if($check) {
            // if email is NOT available
            return false;
        } elseif(!($check)) {
            // if email is available
            return true;
        }
    }
   
    // get that shit 
    function get_user_data($user_id) {
        global $db;
        $query = "SELECT f_name, l_name, email
                  FROM User
                  WHERE user_id = $user_id;";
        $data = $db->query($query);
        $data = $data->fetch();
        
        return $data;
    }
    
    function get_user_id($email) {
        global $db;
        $query = "SELECT user_id 
                  FROM User
                  WHERE email = '$email';";
        $user_id = $db->query($query);
        $user_id = $user_id->fetch();
        return $user_id['user_id'];
    }
    
    function get_pass($user_id) {
        global $db;
        //$user_id = intval($user_id);
        $query = "SELECT password
                  FROM User
                  WHERE user_id = $user_id;";
        $hash = $db->query($query);
        $hash = $hash->fetch();
        return $hash['password'];
    }
    
    function pass_check($email, $password) {
        $user_id = get_user_id($email);
        $hash = get_pass($user_id);
        
        if(password_verify($password, $hash)) {
            return true;
        } else {
            return false;
        }
    }
    
    function login($email, $password) {
        if(pass_check($email, $password)) {
            $user_id = get_user_id($email);
            $user_data = get_user_data($user_id);
            
            session_start();
          
            $_SESSION['user_id'] = $user_id;
            $_SESSION['f_name'] = $user_data['f_name'];
            $_SESSION['l_name'] = $user_data['l_name'];
        } else {
            //add error message in here later, if it doesnt fail before this we 
            // should reconsider how i made this
            
        }
    }
    
    function logout($user_id) {
        unset($_SESSION['user_id']);
        unset($_SESSION['f_name']);
        unset($_SESSION['l_name']);
        session_destroy();
    }
    
    // If someone wants to check out their reviews yo
    function get_reviews_user($user_id) {
        global $db;
        $query = "SELECT title, comment, rating
                  FROM Review  
                  WHERE user_id = $user_id;";
        $reviews = $db->query($query);
        $reviews = $reviews->fetch();
        
        return $reviews;
    }
?>