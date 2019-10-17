<!-- Connection for database -->
<?php
class Database
    {
      	var $host="remotemysql.com";
      	var $user="XnTQPp4tAK";
      	var $pass="wqmtOm6brY";
      	var $db="XnTQPp4tAK";

      	public function connect()
      {
        	$dbh = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
        	return $dbh;
        }
           function saveRecords()
      	{
          	$dbhh = $this->connect();
            $result = mysqli_query($dbhh, "SELECT * FROM interns");
          return $result;
    	}


  }
?>
