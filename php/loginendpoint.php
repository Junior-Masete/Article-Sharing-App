<?php 

    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['userId'])){
    
        $response = array("loggedIn" => true, "username" => $_SESSION['username'], "userid" => $_SESSION['userId']);
    }
    else{
        $response = array("loggedIn" => false);
    }

    header("Content-Type: application/json");
    echo json_encode($response);

?>