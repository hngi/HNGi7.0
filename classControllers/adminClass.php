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
}
