<?php
    require('config.php');
    require('queries.php');
    $dbcc = SingletonConn::instance();
    $dbc = $dbcc->dbobj();

    $name="";
    $surname="";
    $email="";
    $password="";

    function generateAPI(){
        return bin2hex(random_bytes(10)); //generates 20 characters

    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(!checkEmailExist($dbc, $_POST['email'])){
            $myApiKey = generateAPI();
            $name = mysqli_real_escape_string($dbc, $_POST["firstname"]);
            $surname = mysqli_real_escape_string($dbc, $_POST["lastname"]);
            $email = mysqli_real_escape_string($dbc, $_POST["email"]);
            $password = mysqli_real_escape_string($dbc, $_POST["password"]); //needs hashing

            $sql = "INSERT INTO users(name, surname, email, password, api_key) VALUES('$name', '$surname', '$email', '$password', '$myApiKey')";

            if(mysqli_query($dbc, $sql)){
                header('Location: ../profilepage.html');
            }
            else{
                echo 'query error: '. mysqli_error($dbc);
            }
        }
        else{
            echo "The user Already Exist";
        }

        

    }



?>