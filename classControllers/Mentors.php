<?php


class Mentor
{


  public function allMentors()
  {

    global $database;
    $display = '';
    $query = 'SELECT * FROM mentors WHERE status = 2 ORDER BY mentor_id DESC';
    $res = $database->query($query);
    $count = $database->affected_rows();
    if ($count > 0) {
      // mentors exist
      $sn = 1;
      while ($row = mysqli_fetch_assoc($res)) {
        $display .= '
                    <tr>
                        <td>' . $sn . '</td>
                        <td>' . $row["area_of_expertise"] . '</td>
                        <td><img src="' . $row["photo_url"] . '" style="width: 50px; height: 50px;"></td>
                        <td>' . $row["name"] . '</td>
                        <td>' . $row["email"] . '</td>
                        <td>' . $row["phone_no"] . '</td>
                        <td>' . $row["link_to_cv"] . '</td>
                        <td>' . $row["why_interested"] . '</td>
                        <td>' . $row["current_state"] . '</td>
                        <td>' . $row["employment_status"] . '</td>
                        <td>' . $row["timestamp"] . '</td>
                        <td>' .'<a href="registered_mentors.php?rejectMentorId=' . $row["mentor_id"] . '" class="btn btn-danger btn-sm" style="margin-right: 5px;">Deactivate</a>' . '</td>
                        

                    </tr>';
        $sn++;
      }
    } else {
      // there are no mentors
      $display = "0";
    }

    return $display;
  }

  public function declinedMentors(){
    global $database;
    $display = '';
    $query = 'SELECT * FROM mentors WHERE status = 1 ORDER BY mentor_id DESC';
    $res = $database->query($query);
    $count = $database->affected_rows();
    if ($count > 0) {
      // declined mentors exist
      $sn = 1;
      while ($row = mysqli_fetch_assoc($res)) {
        $display .= '
                    <tr>
                        <td>' . $sn . '</td>
                        <td>' . $row["area_of_expertise"] . '</td>
                        <td><img src="' . $row["photo_url"] . '" style="width: 50px; height: 50px;"></td>
                        <td>' . $row["name"] . '</td>
                        <td>' . $row["email"] . '</td>
                        <td>' . $row["phone_no"] . '</td>
                        <td>' . $row["link_to_cv"] . '</td>
                        <td>' . $row["why_interested"] . '</td>
                        <td>' . $row["current_state"] . '</td>
                        <td>' . $row["employment_status"] . '</td>
                        <td>' . $row["timestamp"] . '</td>
                        <td>' . '<a href="registered_mentors.php?acceptMentorId=' . $row["mentor_id"] . '" class="btn btn-primary btn-sm" style="margin-right: 5px;">Activate</a>' .'<a href="delete_mentor.php?deleteMentorId=' . $row["mentor_id"] . '" class="btn btn-danger btn-sm">Delete</a>' . '</td>
                        

                    </tr>';
        $sn++;
      }
    } else {
      // there are no declined mentors
      $display = "0";
    }

    return $display;
  }

  public function pendingMentors(){
    global $database;
    $display = '';
    $query = 'SELECT * FROM mentors WHERE status = 0 ORDER BY mentor_id DESC';
    $res = $database->query($query);
    $count = $database->affected_rows();
    if ($count > 0) {
      // declined mentors exist
      $sn = 1;
      while ($row = mysqli_fetch_assoc($res)) {
        $display .= '
                    <tr>
                        <td>' . $sn . '</td>
                        <td>' . $row["area_of_expertise"] . '</td>
                        <td><img src="' . $row["photo_url"] . '" style="width: 50px; height: 50px;"></td>
                        <td>' . $row["name"] . '</td>
                        <td>' . $row["email"] . '</td>
                        <td>' . $row["phone_no"] . '</td>
                        <td>' . $row["link_to_cv"] . '</td>
                        <td>' . $row["why_interested"] . '</td>
                        <td>' . $row["current_state"] . '</td>
                        <td>' . $row["employment_status"] . '</td>
                        <td>' . $row["timestamp"] . '</td>
                        <td>' . '<a href="registered_mentors.php?acceptMentorId=' . $row["mentor_id"] . '" class="btn btn-primary btn-sm" style="margin-right: 5px;">Accept</a>' .'<a href="registered_mentors.php?rejectMentorId=' . $row["mentor_id"] . '" class="btn btn-warning btn-sm" style="margin-right: 5px;">Reject</a>' .'</td>
                        
                        

                    </tr>';
        $sn++;
      }
    } else {
      // there are no declined mentors
      $display = "0";
    }

    return $display;
  }

  public function getMentor($id) {
    global $database;
    $query = "SELECT * FROM mentors WHERE mentor_id = ".$id."";
    $res = $database->query($query);
    $count = $database->affected_rows();
    if($count > 0) {
      // admin exists
      $row = mysqli_fetch_assoc($res);

      $data["name"] = $row["name"];
      $data["email"] = $row["email"];
      $data["phone"] = $row["phone_no"];

      return $data;
    } else {
      // no admin found
      return 0;
    }
  }

  public function deleteMentor($id) {
    global $database;
    $query = "DELETE FROM mentors WHERE mentor_id = ".$id."";
    $res = $database->query($query);
    $count = $database->affected_rows();
    if($count > 0) {
      // deleted
      return true;
    } else {
      // failed
      return false;
    }
  }

  public function AcceptMentor($mentor_id) {
    global $database;
    $query = "UPDATE mentors SET status = 2 WHERE mentor_id = '$mentor_id'";
    $query2 = $database->query("SELECT * FROM mentors WHERE mentor_id = '$mentor_id' ");
    $res = $database->query($query);
    $count = $database->affected_rows();
    $row = mysqli_fetch_array($query2);
    $fullname = $row['name'];
    $email = $row['email'];
    if($count > 0) {
      $body = "Your registration as a mentor on the HNG 7.0 internship has been accepted. Thank you";
      acceptMentorMail($body,$fullname,$email);
      // updated
      return true;
      header('Location: registered_mentors.php');
    } else {
      // failed
      return false;
    }
  }

  public function RejectMentor($mentor_id) {
    global $database;
    $query = "UPDATE mentors SET status = 1 WHERE mentor_id = '$mentor_id'";
    $query2 = $database->query("SELECT * FROM mentors WHERE mentor_id = '$mentor_id' ");
    $res = $database->query($query);
    $count = $database->affected_rows();
     $row = mysqli_fetch_array($query2);
        $fullname = $row['name'];
        $email = $row['email'];
    if($count > 0) {
      $body = "Your registration as a mentor on the HNG 7.0 internship has been disapproved . Thank you";
      rejectMentorMail($email, $fullname, $body);
      // updated
      return true;
      header('Location: registered_mentors.php');
    } else {
      // failed
      return false;
    }
  }

  // get pending interns : written by John Ebri. Date : 1/11/2019 6:02PM
  public function getPendingMentors() {
      global $database;
      $query = "SELECT * FROM mentors WHERE status = 0";
      $res = $database->query($query);
      $count = $database->affected_rows();
      return $count;
  }



}

