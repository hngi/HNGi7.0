<?php
//alway call global $database inside you method
class AdminClass
{

	

	/*
	 Function to handle admin sign in
	 * */

	function login($email, $password){
	    global $database;
	    $enc_password = sha1($password); //generate encrypted password
        $query = "SELECT * FROM admins WHERE email = '$email' AND password = '$enc_password'";
	    $stmt = $database->query("$query");
	    $rows = $stmt->num_rows;
	    return $rows;
    }

    function getAdminDetails($email){
        global $database;
        $stmt = $database->query("SELECT admin_id, firstname, lastname, email, role FROM admins WHERE email = '$email'");
        $result = $stmt->fetch_assoc();
        return $result;
	}

	function adminExist($email){
		global $database;
		$query = "SELECT null FROM admins WHERE email = '$email'";
		$stmt = $database->query("$query");
		$rows = $stmt->num_rows;
		return $rows;
	}

	
	function createAdmin( $firstname, $lastname, $email, $role, $password){
		global $database;
		$time = date("Y-m-d H:i:s");
		$stmt = $database->query("INSERT INTO admins (firstname, lastname, email, role, password,timestamp) VALUES ('$firstname','$lastname','$email','$role','$password','$time')");
		return $stmt;
	}
	
	function getRoles(){
		 global $database;
		 $stmt = $database->query("SELECT role_id,role_name FROM roles");
		 $results = $stmt->fetch_all(MYSQLI_ASSOC);
		 return $results;
	}
	


}

?>