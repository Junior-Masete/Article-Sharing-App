<?php

    class SingletonConn{ //making a connection in a singleton design pattern
        private $servername = "localhost";
        private $user = "root";
        private $dbname = "articledb";
        private $password = "";
        private $dbc;

        private function __construct() {
            $this->dbc = new mysqli($this->servername, $this->user, $this->password, $this->dbname);
            
            if($this->dbc->connect_error){
                die("Connection failed: ". $this->dbc->connect_error);
            }
            //echo "The connection is created";
        }
        public static function instance(){
            static $instance = null;
            if($instance === null){ //check if an instance already exists
                $instance = new SingletonConn();
            }

            return $instance; //otherwise return the existing instance
        }

        public function __destruct(){
            if(isset($this->dbc)){
                $this->dbc->close();
            }
        }

        public function dbobj(){
            return $this->dbc;
        }
        
    }


    //echo $conn;

    /*class Database {
        private $servername = "localhost";
        private $user = "root";
        private $password = "";
        private $dbc = "articledb";


        function connect(){
            $dbc = new mysqli($this->servername, $this->user, $this->password, $this->dbc);
            

            if($dbc->connect_error){
                die("Connection failed: ". $dbc->connect_error);
            }

            //echo "DB Connection Established";
            return $dbc;
        }
    }*/

?>