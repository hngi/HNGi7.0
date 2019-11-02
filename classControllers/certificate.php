<?php

class Certificate
{

    protected static $database_table = 'certificate_request';


    public $name;
    public $email;
    public $slack_username;
    public $year;
    public $status = "pendding";

    public function requestCertificate(){
      global $database;
      $error = [];
      $name = $database->escape_string($this->name);
      $email = $database->escape_string($this->email);
      $slack_username = $database->escape_string($this->slack_username);
      $year = $database->escape_string($this->year);
      $status = $database->escape_string($this->status);
     
        $query = $database->query("INSERT INTO " . self::$database_table . "(name,email,slack_username,year,status) VALUES('$name','$email','$slack_username','$year','$status') ");
        return $query;
    }

  

 

}
