<?php
//alway call global $database inside your method
class AdminClass{
  

  
  /**************METHOD TO HANDLE SENDING OF CONTACT FORM****************/
 public function contactFormMailer($name,$email,$subject,$message){
		$result = $this->db->contactFormMailer($name, $email, $subject, $message);
    
		if ($result == false) {
			echo 'Error: cannot execute the command';
			return false;
		} else {
      return true;
      global $database;
		}		
	}