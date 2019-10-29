<?php

class InternExperience
{

    public function saveExperience($names,$stack,$image,$experience){
        global $database;
        $sql = "INSERT INTO intern_experience(`names`,stack,`image`,experience,status) VALUES('$names','$stack','$image','$experience','1')";
        $query = $database->query($sql);
    }


    function fetch_experiences(){
        global $database;
        //Method to fetch interns records
        $sql = "SELECT names,stack,image,experience FROM intern_experience WHERE status = '1' ORDER BY id DESC";
        $query = $database->query($sql);
        $result = $query->fetch_all(MYSQLI_ASSOC);

        return $result;
    }

    function editExperiences($id,$experience){
        global $database;
        //Method to fetch interns records
        $sql = "UPDATE intern_experience set experience = '$experience' WHERE id = '$id'";
        $query = $database->query($sql);
  }
  function ApproveExperiences($id){
        global $database;
        //Method to fetch interns records
        $sql = "UPDATE intern_experience set status = '1' WHERE id = '$id'";
        $query = $database->query($sql);
  }
  function delete_experiences($id){
        global $database;
        $sql = "DELETE FROM intern_experience  WHERE id = '$id' ORDER BY id DESC";
        $query = $database->query($sql);
    }

    public function getInternexperience($id) {
        global $database;
        $query = "SELECT * FROM intern_experience WHERE id = '$id'  ORDER BY id DESC";
        $res = $database->query($query);
        $count = $database->affected_rows();
        if($count > 0) {
          
          $row = mysqli_fetch_assoc($res);
    
          $data["names"] = $row["names"];
          $data["track"] = $row["track"];
          $data["experience"] = $row["experience"];
    
          return $data;
        } else {
        
          return 0;
        }
      }


      public function allExperience()
  {
    global $con;
    global $database;
    $display = '';
    $query = "SELECT * FROM intern_experience WHERE   id = '$id'  ORDER BY id DESC";
    $res = $database->query($query);
    $count = $database->affected_rows();
    if ($count > 0) {
     
      $sn = 1;
      while ($row = mysqli_fetch_assoc($res)) {
        if($row["role"] == 1) {
          $role = "Super Admin";
        } else {
          $role = "Admin";
        }
        $display .= '
                    <tr>
                        <td>' . $sn . '</td>
                        <td>' . $row["names"] . '</td>
                        <td>' . $row["track"] . '</td>
                        <td>' . $row ["experience"] . '</td>
                        <td>' . $row["timestamp"] . '</td>
                        <td><a href=".php?editAdminId='.$row["admin_id"].'"><button class="btn btn-success btn-sm">View</button></a></td>';
                        if($row["block"] == 0) {
                          $display .='
                          <td><a href="InternExperience.php?editExperiences='.$row["admin_id"].'"><button class="btn btn-warning btn-sm">Approve</button></a></td>';
                        } else if ($row["block"]==1) {
                          $display .='
                          <td><a href="InternExperience.php?ApproveExperiences='.$row["admin_id"].'"><button class="btn btn-primary btn-sm">Edit</button></a></td>';
                        }
                        $display .= '
                        <td><a href="InternExperience.php?delete_Experiences='.$row["admin_id"].'"><button class="btn btn-danger btn-sm">Delete</button></a></td>';
                      $display .='
                    </tr>';
        $sn++;
      }
    } else {
      
      $display = "0";
    }

    return $display;
  }

}