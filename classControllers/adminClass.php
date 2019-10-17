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
}
