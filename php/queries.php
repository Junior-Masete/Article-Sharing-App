<?php
    /*
    check for existing
        -password
        -email
        -apikey

    */
   
    
    function checkKeyExists($dbObj,$key){
        $query = "SELECT * FROM users WHERE api_key='$key'";
        $result = mysqli_query($dbObj, $query);
        if(mysqli_num_rows($result) == 1){
            return true;
        }
        else{
            return false;
        }
    }

    function checkPwExists($dbObj, $password){
        $query = "SELECT * FROM users WHERE password='$password'";
        $result = mysqli_query($dbObj, $query);
        if(mysqli_num_rows($result) == 1){
            return true;
        }
        else{
            return false;
        }
    }

    function checkEmailExist($dbObj, $email){
        $query = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($dbObj, $query);
        if(mysqli_num_rows($result) == 1){
            return true;
        }
        else{
            return false;
        }
    }
?>