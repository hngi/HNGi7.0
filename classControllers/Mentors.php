<?php


class Mentor
{

  public function DeleteMentor($mentor_id){

    
    global $database;

    $sql = "DELETE FROM mentors WHERE mentor_id='$mentor_id'";
    if($query = $database->query($sql)){

      $message = "Mentor Deleted successfully.";

      header('Location: registered_mentors.php');
    }

   // return $message;

  }


  public function allMentors()
  {
    
    global $database;
    $display = '';
    $query = 'SELECT * FROM mentors';
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
                        <td>' . '<a onClick=\"javacript: return confirm("Please confirm deletion");\" href="registered_mentors.php?delete_id=' . $row["mentor_id"] . '" class="btn btn-danger btn-xs">Delete</a>' . '</td>
                        
                    </tr>';
        $sn++;
      }
    } else {
      // there are no mentors
      $display = "0";
    }

    return $display;
  }
}

if (isset($_GET["signup"])) {
  $interns = new Interns();
  $interns->internSignup();
}