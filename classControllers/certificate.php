<?php

class Certificate
{

    protected static $database_table = 'certificate_request';


    public $name;
    public $email;
    public $slack_username;
    public $year;
    public $id;
    public $status = "pending";

    public function requestCertificate(){
      global $database;
      $error = [];
      $name = $database->escape_string($this->name);
      $email = $database->escape_string($this->email);
      $slack_username = $database->escape_string($this->slack_username);
      $year = $database->escape_string($this->year);
      $status = $database->escape_string($this->status);
     
        $query = $database->query("INSERT INTO " . self::$database_table . "(name,email,slack_username,year,status) VALUES('$name','$email','$slack_username','$year','$status') ");
        return $query;
    }

    public function getAllPendingRequest(){
        global $database;
        $data = '';
        $no = '';
        $query = $database->query("SELECT * FROM " . self::$database_table . " WHERE status = 'pending' ");
      $count = $database->affected_rows();
      if ($count > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
          $no++;
          $name = $row['name'];
          $email = $row['email'];
          $slack_username = $row['slack_username'];
          $year = $row['year'];
          $certificate_id = $row['id'];
          $status = $row['status'];
          $file = $row['file'];
          $data .= "

        <tr>
              <td>$no</td>
              <td>$name</td>
              <td>$email</td>
              <td>$slack_username</td>
              <td>$year</td>
              <td>$file</td>
               <td>
              <a href='pending_request.php?pendingId=$certificate_id' class='btn btn-warning btn-sm'>$status</a>
              </td>
            
              
              
          </tr>
        
        ";
        }
      } else {
        $data = '0';
      }
      return $data;
    }

  public function getAllProcessindRequest()
  {
    global $database;
    $data = '';
    $no = '';
    $query = $database->query("SELECT * FROM " . self::$database_table . " WHERE status = 'processing' ");
    $count = $database->affected_rows();
    if ($count > 0) {
      while ($row = mysqli_fetch_assoc($query)) {
        $no++;
        $name = $row['name'];
        $email = $row['email'];
        $slack_username = $row['slack_username'];
        $year = $row['year'];
        $certificate_id = $row['id'];
        $status = $row['status'];
        $file = $row['file'];
        $data .= "

        <tr>
              <td>$no</td>
              <td>$name</td>
              <td>$email</td>
              <td>$slack_username</td>
              <td>$year</td>
              <td>$file</td>
              <td>
              <a href='processing_request.php?processingId=$certificate_id' class='btn btn-success btn-sm'>$status</a>
              </td>
            
              
              
          </tr>
        
        ";
      }
    } else {
      $data = '0';
    }
    return $data;
  }

  public function getAllFinishedRequest()
  {
    global $database;
    $data = '';
    $no = '';
    $query = $database->query("SELECT * FROM " . self::$database_table . " WHERE status = 'processed' ");
    $count = $database->affected_rows();
    if ($count > 0) {
      while ($row = mysqli_fetch_assoc($query)) {
        $no++;
        $name = $row['name'];
        $email = $row['email'];
        $slack_username = $row['slack_username'];
        $year = $row['year'];
        $certificate_id = $row['id'];
        $status = $row['status'];
        $file = $row['file'];
        $data .= "

        <tr>
              <td>$no</td>
              <td>$name</td>
              <td>$email</td>
              <td>$slack_username</td>
              <td>$year</td>
              <td>$file</td>
               <td>
               <a href='finished_request.php?finishId=$certificate_id' class='btn btn-primary btn-sm' disabled>$status</a>
              <a href='finished_request.php?finishId=$certificate_id' class='btn btn-danger btn-sm'>reverse</a>
              </td>
              
              
              
          </tr>
        
        ";
      }
    } else {
      $data = '0';
    }
    return $data;
  }
  

  public function finished(){
    global $database;
    if(isset($_GET['finishId'])){
      $id = $database->escape_string($_GET['finishId']);

      $query = $database->query("UPDATE " . self::$database_table . " SET status = 'pending' WHERE id = '$id' ");
      //header('location: pending_request.php');
      return $query;
    }
    
  }

  public function pending(){
    global $database;
    if (isset($_GET['pendingId'])) {
      $id = $database->escape_string($_GET['pendingId']);

      $query = $database->query("UPDATE " . self::$database_table . " SET status = 'processing' WHERE id = '$id' ");
      return $query;
      
      
    }
  }

  public function processing()
  {
    global $database;
    if (isset($_GET['processingId'])) {
      $id = $database->escape_string($_GET['processingId']);

      $query = $database->query("UPDATE " . self::$database_table . " SET status = 'processed' WHERE id = '$id' ");
      $query2 = $database->query("SELECT * FROM  ". self::$database_table . " WHERE id = '$id' ");
      $res = $database->query($query);
      $row = mysqli_fetch_array($query2);
      $fullname = $row['name'];
      $email = $row['email'];
      $count = $database->affected_rows();
      if($count > 0) {
          $body = "Hello! Your Certificate is ready.";
          certificatereadyMail($email, $fullname, $body);
        header('Location: pending_request.php');
      } else {
        
        return false;
      }

    }


  }

 

}
