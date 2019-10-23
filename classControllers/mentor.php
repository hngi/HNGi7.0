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
	public function ById($id = 0)
	{
		global $database;
		$result = $database->query("SELECT * FROM mentors WHERE mentor_id = {$id} LIMIT 1");
		$record = mysqli_fetch_array($result);
		return $record;
	}
	public function ByName($name)
	{
		global $database;
		$result = $database->query("SELECT * FROM mentors WHERE `name` LIKE '%$name%'");
		$count = $database->affected_rows();
		if ($count > 0) {
			// mentors exist
			$sn = 1;
			$display ="";
			while ($row = mysqli_fetch_assoc($result)) {
				$display .= '
                    <tr>
                        <td>' . $sn . '</td>
                        
                        <td>' . $row["area_of_expertise"] . '</td>
                        <td><img src="' . $row["photo_url"] . '" style="width: 50px; height: 50px;"></td>
                        <td>' . $row["name"] . '</td>
                        <td>' . $row["email"] . '</td>
                        <td>' . $row["phone_no"] . '</td>
                        
                        <td>' . $row["link_to_cv"] . '</td>
                        <td>' . $row["why_interested"] . '</td>
                        <td>' . $row["current_state"] . '</td>
                        <td>' . $row["employment_status"] . '</td>
                        <td>' . $row["timestamp"] . '</td>
                        <td>' . '<a onClick=\"javacript: return confirm("Please confirm deletion");\" href="registered_mentors.php?delete_id=' . $row["mentor_id"] . '" class="btn btn-danger btn-xs">Delete</a>' . '<a class="btn btn-primary" onClick="displayEach(' . $row["mentor_id"] . ');">View</a>' . '</td>
                        
                    </tr>';
				$sn++;
			}
		} else {
			// there are no mentors
			$display = 0;
		}

		return $display;
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
