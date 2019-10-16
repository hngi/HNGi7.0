
<?php
class Database
    {
      	var $host="localhost";
      	var $user="root";
      	var $pass="";
      	var $db="abi";

      	public function connect()
      {
        	$dbh = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
        	return $dbh;
    	}

    }
?>
