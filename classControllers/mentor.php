<?php
class Mentors
{
	public $area_of_expertise;
	public $photo_url;
	public $name;
	public $email;
	public $phone_no;
	public $link_to_portfolio;
	public $link_to_linkedin;
	public $link_to_cv;
	public $why_interested;
	public $current_state;
	public $employment_status;
	public $timestamp;


	public function Apply_mentor(){
		global $database;
		$res = $database->query("INSERT INTO mentors()
			VALUES(NULL, '$this->area_of_expertise', '$this->photo_url', '$this->name', '$this->email', '$this->phone_no', '$this->link_to_portfolio', '$this->link_to_linkedin', '$this->link_to_cv', '$this->why_interested', '$this->current_state', '$this->employment_status', '$this->timestamp')");
		return $res;

	}
	public function showAll_mentors(){
		global $database;
		$result = $database->query("SELECT * FROM mentors");
		$array = array();  
        while($row = mysqli_fetch_array($result))  
           {  
                $array[] = $row;  
           }  
           return $array;
           
	}
	
	
}
$mentor = new Mentors;
	// $mentor = new Mentors;
	// $mentor->area_of_expertise= $database->escape_string("web");
	// $mentor->photo_url= "pic";
	// $mentor->name = "mark";
	// $mentor->email = "joshua@gmail.com";
	// $mentor->phone_no = "08135875974";
	// $mentor->link_to_portfolio = "www.fnia.com";
	// $mentor->link_to_linkedin = "fnia.com";
	// $mentor->link_to_cv = "ida";
	// $mentor->why_interested = "man";
	// $mentor->current_state = "man";
	// $mentor->employment_status = "man";
	// $mentor->timestamp = strftime("%Y-%m-%d %H:%M:%S", time());
	// //$mentor->Apply_mentor();
	// $mentor_data = $mentor->showAll_mentors();
	// foreach($mentor_data as $value){
	// 	echo $value['name']. "</br>";
	// }
