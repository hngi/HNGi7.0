<?php
require_once 'dbh.php';

class InternsForm{
    public $name1;
    public $email1;
    public $phoneNo1;
    public $linkPort1;
    public $linkCV1;
    public $exp1;
    public $interest1;
    public $location1;
    public $empStatus1;
    public $about1;
    public $date1;

    public function setData($tbName,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k)
    {
      $this->name1 = $a;
      $this->email1 = $b;
      $this->phoneNo1 = $c;
      $this->linkPort1 = $d;
      $this->linkCV1 = $e;
      $this->exp1 = $f;
      $this->interest1 = $g;
      $this->location1 = $h;
      $this->empStatus1 = $i;
      $this->about1 = $j;
      $this->date1 = $k;

// Instanciating the class from db connection
      $obj = new Database();
      $dbhh = $obj->connect();
      // Inserting submitted details to db
       mysqli_query($dbhh, "insert into $tbName (name, email, phone_no, link_to_portfolio, link_to_cv,
       years_of_experience, interest, current_location, employment_status, about, timestamp)
       values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')");

       header("Location: join-intern.php?Submitted");
   }
}

// Checking if the submit button is clicked
    if($_POST['submit'])
    {
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $phoneNo = $_POST['phoneNo'];
        $linkPort = $_POST['linkPort'];
        $linkCV = $_POST['linkCV'];
        $exp = $_POST['exp'];
        $interest = $_POST['interest'];
        $location = $_POST['location'];
        $empStatus = $_POST['empStatus'];
        $about = $_POST['about'];
        $date = $_POST['date'];

        //creating object now
        $data= new InternsForm();
        $data->setData("interns",$name,$email,$phoneNo,$linkPort,
        $linkCV,$exp,$interest,$location,$empStatus,$about,$date);


    }
?>
