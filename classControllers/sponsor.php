<?php

class sponsors
{

  protected static $database_table = 'sponsors';


  public $sponsor_name;
  public $about_you;
  public $business_address;
  public $sponsor_id;
  public $sponsor_logo;
  public $update_at;
  public $target_file;
  public $sponsor_email;


  public function getAllSponsor()
  {
    global $database;
    $data = '';
    $no = '';
    $query = $database->query("SELECT * FROM sponsors");
    $count = $database->affected_rows();
    if ($count > 0) {
      while ($row = mysqli_fetch_assoc($query)) {
        $no++;
        $sponsor_name = $row['sponsor_name'];
        $sponsor_logo = $row['sponsor_logo'];
        $about_you = $row['about_you'];
        $business_address = $row['business_address'];
        $sponsor_id = $row['sponsor_id'];
        $sponsor_email = $row['sponsor_email'];
        $data .= "

       <tr>
            <td>$no</td>
            <td>$sponsor_name</td>
            <td>$sponsor_email</td>
            <td>$business_address</td>
            
            <td>$about_you</td>
             <td><img src='$sponsor_logo' style='width:10%; height:40px;'></td>
              <td>
             <a href='edit_sponsor.php?editSponsorId=$sponsor_id' class='btn btn-primary btn-sm'>Edit</a>
            <a href='delete_sponsor.php?deleteSponsorId=$sponsor_id' class='btn btn-danger btn-sm'>Delete</a>
            </td>
            
        </tr>
       
       ";
      }
    } else {
      $data = '0';
    }
    return $data;
  }

  public function getSponsorsById($sponsor_id)
  {
    global $database;

    $selectQuery = $database->query("SELECT * FROM " . self::$database_table . " WHERE sponsor_id = '$sponsor_id' ");
    $data = mysqli_fetch_assoc($selectQuery);
    return $data;
  }

  public function updateSponsor()
  {
    global $database;
    $sponsor_id = $database->escape_string($_GET['editSponsorId']);
    $name = $database->escape_string($this->sponsor_name);
    $sponsor_email = $database->escape_string($this->sponsor_email);
    $about_you = $database->escape_string($this->about_you);
    $address = $database->escape_string($this->business_address);
    $data = $database->query("UPDATE " . self::$database_table . " SET sponsor_name = '$name',about_you = '$about_you',business_address = '$address', sponsor_email = '$sponsor_email' WHERE sponsor_id = '$sponsor_id' ");
    return $data;
  }

  public function updateSponsorImg($target_file)
  {
    global $database;
    $sponsor_id = $database->escape_string($_GET['editSponsorId']);
    $target_file = $database->escape_string($target_file);

    $data = $database->query("UPDATE " . self::$database_table . " SET sponsor_logo = '$target_file' WHERE sponsor_id = '$sponsor_id' ");
    return $data;
  }

  public function addSponsors($target_file)
  {
    global $database;
    $name = $database->escape_string($this->sponsor_name);
    $target_file = $database->escape_string($target_file);
    $about_you = $database->escape_string($this->about_you);
    $address = $database->escape_string($this->business_address);
    $sponsor_email = $database->escape_string($this->sponsor_email);
    $update_at = $database->escape_string($this->update_at);
    $query = $database->query("INSERT INTO " . self::$database_table . "(sponsor_name,sponsor_logo,business_address,about_you,sponsor_email) VALUES('$name','$target_file','$address','$about_you','$sponsor_email')");
    return $query;
  }


  public function deleteSponsors($sponsor_id)
  {
    global $database;
    $data = $database->query("DELETE  FROM " . self::$database_table . " WHERE sponsor_id = '$sponsor_id' ");
    return $data;
  }

  // Written by JohnEbri, 5/11/2019 9:16:20AM
  public function countSponsor() {
    global $database;
    $query = "SELECT * FROM sponsors";
    $count = $database->affected_rows();
    return $count;
  }


}
