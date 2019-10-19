<?php
class Mentors{
    //DB Stuff
    private $conn;
    private $table = 'mentors';

    //Interns Properties
    public $mentor_id;
    public $area_of_expertise;
    public $name;
    public $email;
    public $phone_no;
    public $link_to_linkedin;
    public $link_to_cv;
    public $why_interested;
    public $current_state;
    public $employment_status;
    public $timestamp;

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