<?php

    class DB {

        public function __construct(){
            require "constants.php";
        }
        
        public function get_connection(){
            $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if(mysqli_connect_errno()){
                echo "Database connection failed with following errors:" . mysqli_connect_error();
                die();
            }else{
                return $db;
            }
        }
    }
?>

