<?php

require_once "constants.php";
require __DIR__ . '/../vendor/autoload.php';
session_start();

class DB
{

    public $db;
    public $host;
    public $user;
    public $pass;
    public $dbname;
    
    function __construct()
    {

        $this->get_connection();

        $env = Dotenv\Dotenv::createImmutable(__DIR__);
        $env->load();

        $this->host=getenv('HOST');
        $this->user=getenv('USERNAME');
        $this->pass=getenv('PASSWORD');
        $this->dbname=getenv('DBNAME'); 
    }


    public function get_connection()
    {
        $this->db = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ($this->db->connect_errno) {
            die("Database connection failed" . $this->db->connect_error);
        }
    }

    public function query($sql)
    {

        $result = $this->db->query($sql);

        $this->confirm_query($result);

        return $result;
    }

    private function confirm_query($result)
    {

        if (!$result) {
            die("Query failed" . $this->db->error);
        }
    }
    public function affected_rows()
    {
        return mysqli_affected_rows($this->db);
    }

    public function escape_string($string)
    {

        $escape_string = $this->db->real_escape_string($string);
        return $escape_string;
    }

    public function redirect($location){
        $this->db->header("location: $location");

    }


}

$database = new DB();
