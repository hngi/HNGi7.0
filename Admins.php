<?php

class Admins
{

 
  public function adminLogin()
  {
    
    //global $con;
    global $database;
    $errors = [];
    $email = $database->escape_string( $_POST["email"]);
    $password = $database->escape_string($_POST["password"]);
    if (empty($email)) {
      array_push($errors, "Email is required");
    }

    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    // check if there are errors
    // if (count($errors)) {
    //   echo '<p>Registration Failed with the following Errors</p>';
    //   foreach ($errors as $error) {
    //     echo $error . '<br />';
    //   }
    // } 
    
    if(count($errors) === 0){
      // there are no errors
      $query = 'SELECT * FROM admins WHERE email="' . $email . '" AND password="' . $password . '" ';

      $res = $database->query($query);
      $count = $database->affected_rows();

      if ($count > 0) {
        // user exist
        // get user details and create session

        $row = mysqli_fetch_assoc($res);

        $fullname = $row["firstname"] . ' ' . $row["lastname"];
        $role = $row["role"];
        $admin_id = $row["admin_id"];

        $_SESSION["fullname"] = $fullname;
        $_SESSION["role"] = $role;
        $_SESSION["admin_id"] = $admin_id;

        echo '<script>window.location.href = "dashboard.php"</script>';
      }
    }
  }

  public function allAdmins()
  {
    global $con;
    global $database;
    $display = '';
    $query = 'SELECT * FROM admins WHERE admin_id <> '.$_SESSION["admin_id"].'  ORDER BY admin_id DESC';
    $res = $database->query($query);
    $count = $database->affected_rows();
    if ($count > 0) {
      // inters exist
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
                        <td>' . $row["firstname"] . '</td>
                        <td>' . $row["lastname"] . '</td>
                        <td>' . $row["email"] . '</td>
                        <td>' . $role . '</td>
                        <td>' . $row["timestamp"] . '</td>
                        <td><a href="admin_view.php?editAdminId='.$row["admin_id"].'"><button class="btn btn-success btn-sm">View</button></a></td>';
                        if($row["block"] == 0) {
                          $display .='
                          <td><a href="admins.php?blockAdminId='.$row["admin_id"].'"><button class="btn btn-warning btn-sm">Block</button></a></td>';
                        } else if ($row["block"]==1) {
                          $display .='
                          <td><a href="admins.php?activateAdminId='.$row["admin_id"].'"><button class="btn btn-primary btn-sm">Activate</button></a></td>';
                        }
                        $display .= '
                        <td><a href="delete_admin.php?deleteAdminId='.$row["admin_id"].'"><button class="btn btn-danger btn-sm">Delete</button></a></td>';
                      $display .='
                    </tr>';
        $sn++;
      }
    } else {
      // there are no interns
      $display = "0";
    }

    return $display;
  }

  public function newAdmin($firstname, $lastname, $email, $role,$password)
  {
    global $database;
    //global $con;
    

    // check for existing email
    $query = "SELECT * FROM admins WHERE email = '" . $email . "' ";
    $res = $database->query($query);
    $count = $database->affected_rows();
    if ($count > 0) {
      // email exists
      $res = $resp = '<div class="alert alert-danger" role="alert">
                                    The Email you entered is already associated with an account
                                </div>';
    } else {
      // email is available, good, proceed to register

      $query = "INSERT INTO admins (firstname, lastname, email, password, role, timestamp) VALUES ('" . $firstname . "', '" . $lastname . "', '" . $email . "', '" . $password . "', '" . $role . "', now())";
      $res = $database->query($query);
      $count = $database->affected_rows();

      if ($count > 0) {
        // success
        $resp = '<div class="alert alert-success" role="alert">
                                Admin Created Successfully
                            </div>';
      } else {
        // failed
        $resp = '<div class="alert alert-danger" role="alert">
                                An error occurred. Please try again
                            </div>';
      }
    }

    return $resp;
  }

  public function getAdmin($id) {
    global $database;
    $query = "SELECT * FROM admins WHERE admin_id = ".$id."";
    $res = $database->query($query);
    $count = $database->affected_rows();
    if($count > 0) {
      // admin exists
      $row = mysqli_fetch_assoc($res);

      $data["firstname"] = $row["firstname"];
      $data["lastname"] = $row["lastname"];
      $data["email"] = $row["email"];
      $data["role"] = $row["role"];
      return $data;
    } else {
      // no admin found
      return 0;
    }
  }

  public function blockAdmin($id) {
    global $database;
    $query = "UPDATE admins set block = 1 WHERE admin_id = ".$id."";
    $res = $database->query($query);
    $count = $database->affected_rows();
    if($count > 0) {
      // updated
      return true;
    } else {
      // failed
      return false;
    }
  }

  public function activateAdmin($id) {
    global $database;
    $query = "UPDATE admins set block = 0 WHERE admin_id = ".$id."";
    $res = $database->query($query);
    $count = $database->affected_rows();
    if($count > 0) {
      // updated
      return true;
    } else {
      // failed
      return false;
    }
  }

  public function deleteAdmin($id) {
    global $database;
    $query = "DELETE FROM admins WHERE admin_id = ".$id."";
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
  public function isAdminExist($email){
    global $database;
    //global $con;


    // check for existing email
    $query = "SELECT * FROM admins WHERE email = '" . $email . "' ";
    $res = $database->query($query);
    $count = $database->affected_rows();
    return $count;
}

  public function getAdminPassword($email){
      global $database;
      //global $con;


      // check for existing email
      $query = "SELECT password FROM admins WHERE email = '" . $email . "' ";
      $res = $database->query($query);
      $row = mysqli_fetch_assoc($res);
      return $row;
  }

}


if (isset($_GET["login"])) {
  $admin = new Admins();
  $admin->adminLogin();
}

