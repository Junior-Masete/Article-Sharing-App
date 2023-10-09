<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require('config.php');
        $dbc = SingletonConn::instance()->dbobj();


        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "SELECT * FROM users WHERE email='$username' AND password='$password'";
        $result = mysqli_query($dbc, $query);
        $results = $result -> fetch_all(MYSQLI_ASSOC);

        if(mysqli_num_rows($result) == 1){
            session_start();

            
            $_SESSION["username"] = $results[0]["email"];
            $_SESSION["name"] = $results[0]["name"];
            $_SESSION["surname"] = $results[0]["surname"];
            $_SESSION["userId"] = $results[0]["id"];
            $_SESSION["work"] = $results[0]["work"];
            $_SESSION["birthday"] = $results[0]["birthday"];
            $_SESSION["location"] = $results[0]["location"];
            $_SESSION["relationship"] = $results[0]["relationship"];
            $_SESSION["dp"] = $results[0]["image_path"];
            //can create an associative array here
    
            header('location: ../homepage.php');
            

        }
        else{
            echo "User does not exist";
        }
    }
?>