<?php
//alway call global $database inside you method
class AdminClass
{

	/**************METHOD TO HANDLE SENDING OF CONTACT FORM****************/
	public function contactFormMailer($name, $email, $subject, $message)
	{
		global $database;
		$result = $database->query("INSERT INTO contact_messages(`name`,`email`,`subject`,`message`,`timestamp`) VALUES('$name', '$email', '$subject', '$message', NOW())");
		return $result;
	}

	/**************METHOD TO HANDLE FOR REQUESTING FOR PASSWORD CHANGE****************/
	public function forGetpassword($email, $code)
	{
		global $database;
		$query =  "INSERT INTO resetpassword (code, email) VALUES('$code', '$email')";
		$sendEmail  = $database->query($query);
		return $sendEmail;

	}

	/**************METHOD TO HANDLE PASSWORD RESET****************/
	public function createNewPassword($password, $code){


      global $database;
      $getEmailQuery = $database->query( "SELECT * FROM resetpassword WHERE code='$code' LIMIT 1 ");
      $emails = mysqli_fetch_assoc($getEmailQuery);
      $email = $database->escape_string($emails['email']);
      if ($email) {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $query = $database->query( "UPDATE admins SET password='$password' WHERE email='$email' ");

        if ($query) {
          $query = "DELETE FROM resetpassword WHERE code='$code' ";
          $deletePass = $database->query($query);
          return $deletePass;
        }

      }


  }

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


	function createAdmin($firstname, $lastname, $email, $role, $password){
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
