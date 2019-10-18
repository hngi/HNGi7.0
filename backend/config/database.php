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

        //DB Parameters
        private $host = 'remotemysql.com';
        private $db_name = 'XnTQPp4tAK';
        private $username = 'XnTQPp4tAK';
        private $password = 'wqmtOm6brY';
        private $conn;

        //DB Connect
        public function connect(){
            $this->conn = null;

            try{
                $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name,$this->username,$this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }catch (PDOException $exception){
                echo 'Connection Error: '. $exception->getMessage();
            }

            return $this->conn;
        }
    }
?>

