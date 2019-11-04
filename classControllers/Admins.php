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
      $query = "SELECT * FROM admins WHERE email= '$email' ";
      $res = $database->query($query);
      $row = mysqli_fetch_assoc($res);
      $count = $database->affected_rows();
      if ($count > 0) {
        // user exist
        // get user details and create session
        if(password_verify($password, $row['password'])){

          $fullname = $row["firstname"] . ' ' . $row["lastname"];
          $role = $row["role"];
          $admin_id = $row["admin_id"];
          $block = $row['block'];

          if ($block == 1) {
            // admin is blocked, cannot login
            header("Location: login.php?blocked");
          } else {
            // admin can login
            $_SESSION["fullname"] = $fullname;
            $_SESSION["role"] = $role;
            $_SESSION["admin_id"] = $admin_id;

            echo '<script>window.location.href = "dashboard.php"</script>';
          }

        }
               
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
                        <td data-label="S/N">' . $sn . '</td>
                        <td data-label="First Name">' . $row["firstname"] . '</td>
                        <td data-label="Last Name">' . $row["lastname"] . '</td>
                        <td data-label="Email">' . $row["email"] . '</td>
                        <td data-label="Role">' . $role . '</td>
                        <td data-label="Registration Date">' . $row["timestamp"] . '</td>
                        <td data-label="Actions"><a href="admin_view.php?editAdminId='.$row["admin_id"].'"><button class="btn btn-success btn-sm">View</button></a></td>';
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

  public function newAdmin($firstname, $lastname, $email, $role)
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
     
      $query = "INSERT INTO admins (firstname, lastname, email, role, timestamp) VALUES ('" . $firstname . "', '" . $lastname . "', '" . $email . "', '" . $role . "', now())";
      $res = $database->query($query);
      $count = $database->affected_rows();

      if ($count > 0) {
        // success
        $subject = 'WElCOME TO HNG INTERNSHIP';
        $body = "<html>
        <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
        </head>
        <body style='margin: 0; padding: 0;'>
          <table border='0' cellpadding='0' cellspacing='0' width='100%'>
            <tr>
              <td style='padding: 10px 0 30px 0;'>
                <table align='center' border='0' cellpadding='0' cellspacing='0' width='600' style='border: 1px solid #cccccc; border-collapse: collapse;'>
                  <tr>
                    <td align='center' bgcolor='#fff' style='padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;'>
                      <img src='https://res.cloudinary.com/phiileo/image/upload/v1571147073/brand-logo_tx0mdt.png' alt='Creating Email Magic' width='300' height='150' style='display: block;' />
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor='#ffffff' style='padding: 40px 30px 40px 30px;'>
                      <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                        <tr>
                          <td style='color: #153643; font-family: Arial, sans-serif; font-size: 24px;'>
                            <b>Dear,  $firstname $lastname .</b>
                          </td>
                        </tr>
                        <tr>
                          <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                                            You have been registered as an admin on HNG INTERSHIP site, kindly find your registration details below. We recommend you change your password with link below.<br> Thank you.
                          </td>
                                        </tr>";
        sendNewAdminMail($email, $subject, $body);

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
      $data["hasPic"] = $row["hasPic"];
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

  // Write by JohnEbri; 1/11/2019 6:56PM
  public function updateProfile($firstname, $lastname, $email, $id) {
    global $database;

      $query = "UPDATE admins SET firstname = '".$firstname."', lastname = '".$lastname."', email = '".$email."' WHERE admin_id = '".$id."' ";
      $res = $database->query($query);
      $count = $database->affected_rows();
      if($count > 0) {
        // edited
        header("Location: adminProfile.php?updated");
      } else {
        // failed
        header("Location: adminProfile.php?failed");
      }
  }

  public function imageUPloaded($id) {
    global $database;
    $query = "UPDATE admins SET hasPic = 1 WHERE admin_id = ".$id."";
    $res = $database->query($query);
    $count = $database->affected_rows();
    if($count > 0) {
      // uploaded
      header("Location: adminProfile.php?picSaved");
    } else {
      // failed
      header("Location: adminProfile.php?changed");
    }
    

  }
}

if (isset($_GET["login"])) {
  $admin = new Admins();
  $admin->adminLogin();
}

