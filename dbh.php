<!-- Connection for database -->
<?php require __DIR__ . '/../vendor/autoload.php';
class Database
    {
		public $host;
		public $user;
		public $pass;
		public $db; 

		public function __construct(){

			$env = Dotenv\Dotenv::createImmutable(__DIR__);
			$env->load();

			 $this->host=getenv('HOST');
			 $this->user=getenv('USERNAME');
			 $this->pass=getenv('PASSWORD');
			 $this->db=getenv('DBNAME'); 

		}

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
