<?php 

if(isset($_POST['action'])) {
    $action = filter_input(INPUT_POST, 'action');
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

$rest_id = $_GET['rest_id'];
    
add_review(filter_input(INPUT_POST, 'user_id'), filter_input(INPUT_POST, 'rest_id'), filter_input(INPUT_POST, 'rev_title'), 
    filter_input(INPUT_POST, 'rev_review'), filter_input(INPUT_POST, 'rev_rating'));
    
    echo $rest_id;

?>