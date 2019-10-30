<?php
class Interns{
    //DB Stuff
    private $conn;
    private $table = 'interns';

    //Interns Properties
    public $intern_id;
    public $name;
    public $email;
    public $phone_no;
    public $link_to_portfolio;
    public $link_to_cv;
    public $years_of_experience;
    public $interest;
    public $current_location;
    public $employment_status;
    public $about;

    //Constructor with DB
    public function __construct($db){
        $this->conn = $db;
    }

    //Get Posts
    public function read(){
        //Create Query
        $query = "SELECT * FROM ".$this->table;

        //Prepare Statement
        $stmt = $this->conn->prepare($query);

        //Execute query
        $stmt->execute();

        return $stmt;

    }
}