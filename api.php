<?php 
    
    require('php/queries.php');
    require("php/config.php");

    header("Content-Type: application/json");

    $postData = json_decode(file_get_contents('php://input'), true);

    function makeerror($errorMessage){
        $error = array("status" => "error", "timestamp" => time(), "data" => $errorMessage);
        echo json_encode($error);
        die();
    }

    //connecting to the databse
    $dbc = SingletonConn::instance()->dbobj();

    //Checking requirements
    if(!isset($postData['api_key'])){
        //
        makeerror("No api key");
    }
    else{
        if(!checkKeyExists($dbc,$postData['api_key'] )){
            makeerror("api key does exist");
        }
        
    }

    if(!isset($postData['type'])){
        //
        makeerror("No type");
    }



    $type = $postData['type'];
    if($type == "GetAllArticles"){ //Geting all articles

        $query = "SELECT ";
        if($postData['return'] == "*"){
            $query .= "* FROM articles";
            
            if(isset($postData['userId'])){
                $theuserId = $postData['userId'];
                $query .= " WHERE user_id='$theuserId'";
            }
        }
        else{
            $query .= implode(",", $postData['return']) . " FROM articles";
            if(isset($postData['userId'])){
                $theuserId = $postData['userId'];
                $query .= " WHERE user_id='$theuserId'";
            }
        }

        if(isset($postData['search'])){
            $query .= " WHERE title='$'";
        }


        if(isset($postData['limit'])){
            $query .= " LIMIT ". $postData['limit'];
        }
        else{
            $query .= " LIMIT ". 10;
        }

        
        $result = mysqli_query($dbc, $query);
        $output=$result->fetch_all(MYSQLI_ASSOC);
        $returnjson=array("status"=>"success","timestamp"=>time(),"data"=>$output);
        echo json_encode($returnjson);

    }
    else if($type == "GetAllFriends"){ //Getting all friends of a specified user
        $query = "SELECT ";
        if($postData['return'] == "*"){
            $theuserId = $postData['userId'];
            $query .= "U.*";
            //$query .= "* FROM users INNER JOIN friendships ON  1 = friendships.user_id1 OR 1 = friendships.user_id2";
            
            
        }
        else{
            $query .= implode(",", $postData['return']); //U.id /U.name
            if(isset($postData['userId'])){
                $theuserId = $postData['userId'];
                //$query .= " WHERE user_id='$theuserId' ";
            }
        }

        $query .= " FROM friendships AS F INNER JOIN users as U ON (F.user_id1 = U.id OR F.user_id2 = U.id) WHERE (F.user_id1 = '$theuserId' OR F.user_id2 = '$theuserId') AND U.id <> '$theuserId'";
            //echo $query;
            $result = mysqli_query($dbc, $query);
            $output=$result->fetch_all(MYSQLI_ASSOC);
            $returnjson=array("status"=>"success","timestamp"=>time(),"data"=>$output);
            echo json_encode($returnjson);
    }
    else if($type == "GetAllUsers"){ //Getting all users
        $query = "SELECT ";
        if($postData['return'] == "*"){
            $query .= "name, surname, location, image_path FROM users";
        }
        else{
            $query .= implode(",", $postData['return']) . " FROM users";
        }

        if(isset($postData['limit'])){
            $query .= " LIMIT ". $postData['limit'];
        }
        else{
            $query .= " LIMIT ". 10;
        }

        $result = mysqli_query($dbc, $query);
        $output=$result->fetch_all(MYSQLI_ASSOC);
        $returnjson=array("status"=>"success","timestamp"=>time(),"data"=>$output);
        echo json_encode($returnjson);
    }
    else if($type == "GetRandArticlesByFriends"){
        $theuserId = $postData['userId'];
        $query = "SELECT a.*
        FROM articles AS a
        JOIN friendships AS f ON (a.user_id = f.user_id1 OR a.user_id = f.user_id2)
        WHERE (f.user_id1 = '$theuserId' OR f.user_id2 = '$theuserId') AND a.user_id <> '$theuserId'
        ";

        $result = mysqli_query($dbc, $query);
        $output=$result->fetch_all(MYSQLI_ASSOC);
        $returnjson=array("status"=>"success","timestamp"=>time(),"data"=>$output);
        echo json_encode($returnjson);
    }
    else{
        makeerror("Type is Invalid");
    }



    /*
    "search": {
        "title": "why your cat", 
        "description": "when cat",
        "author": "Junior"},
    "fuzzy": true,
    */

    
    /*
        my components
            api key!
            userId??????
            type!
                -SignUp
                -login
                -AllArticles
                -AllFriends
                -GetAllUsers
            limit //if limit not specified use our defined default
            search - ["list of columns"]
            fuzzy - true or false
            sort
            return
                -"*"
                -["", ""];
    */

    
?>

