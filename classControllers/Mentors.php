<?php


class Mentor
{


  public function allMentors()
  {

    global $database;
    $display = '';
    $query = 'SELECT * FROM mentors ORDER BY mentor_id DESC';
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
                        <td>' . '<a href="delete_mentor.php?deleteMentorId=' . $row["mentor_id"] . '" class="btn btn-danger btn-sm">Delete</a>' . '</td>
                        

                    </tr>';
        $sn++;
      }
    } else {
      // there are no mentors
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


}

