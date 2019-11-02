<?php
class classSponsor
{

    public function sponsorsignup($logo,$name, $email, $address, $message)
    {

        //global $con;
        global $database;
        // validation codes here
        $errors = array();

        if (empty($name)) {
            array_push($errors, "Fullname is required");
        }

        if (empty($email)) {
            array_push($errors, "Email is required");
        }

        // check if email aready exist
        $query = "SELECT * FROM sponsors WHERE sponsor_email = '" . $email . "' ";
        $res = $database->query($query);
        $count = $database->affected_rows();
        if ($count > 0) {
            // email already taken
            array_push($errors, "The Email address is already in use.");
        } else {
            // email is not taken
        }


        if (count($errors)) {
            echo '<p>Registration Failed with the following Errors</p>';
            foreach ($errors as $error) {
                echo '<span style="color: red; font-size: 12px; font-weight: bold;">' . $error . '</span><br />';
            }
        } else {
            // there are no errors
            $logo="";
            $date=date("Y-m-d");
            $query = "INSERT INTO sponsors (sponsor_name,sponsor_email,sponsor_logo, business_address,about_you, updated_at)
                VALUES('" . $name . "', '" . $email . "', '" . $logo ."','". $address ."','".$message. "', '" . $date . "' ) ";

            
            $res = $database->query($query);
            $count = $database->affected_rows();
            
            if ($count > 0) {
                $message="Thank you for your application, we will get back to you shortly!.";
            } 
            else {
                // failed, error, not created
                        $message="Your application was not received, please try again!.";
            }
           return $message;
        }
    }

    public function allsponsors()
    {
        global $con;
        global $database;
        $display = '';
        $query = 'SELECT * FROM sponsors ORDER BY sponsor_id DESC';
        //$res = mysqli_query($con, $query) or die(mysqli_error($con));
        $res = $database->query($query);
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            // sponsors exist
            $no = '';
            while ($row = mysqli_fetch_assoc($res)) {
                $no++;
                $display .= '
                    <tr>
                        <td>' . $row["sponsor_id"] . '</td>
                        <td>' . $row["sponsor_name"] . '</td>
                        <td>' . $row["sponsor_email"] . '</td>
                        <td>' . $row["sponsor_logo"] . '</td>
                        <td>' . $row["business_address"] . '</td>
                        <td>' . $row["about_you"] . '</td>
                        <td>' . $row["updated_at"] . '</td>
                        <td>'  .'<a href="registered_sponsors.php?rejectsponsorId=' . $row["sponsor_id"] . '" class="btn btn-danger btn-sm" style="margin-right:5px;">Deactivate</a>' . '</td>

                    </tr>';
            }
        } else {
            // there are no sponsors
            $display = "0";
        }

        return $display;
    }

    public function pendingsponsors()
    {
        global $con;
        global $database;
        $display = '';
        $query = 'SELECT * FROM sponsors WHERE status = 0 ORDER BY sponsor_id DESC';
        //$res = mysqli_query($con, $query) or die(mysqli_error($con));
        $res = $database->query($query);
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            // inters exist
            $no = '';
            while ($row = mysqli_fetch_assoc($res)) {
                $no++;
                $display .= '
                    <tr>
                        <td>' . $no . '</td>
                        <td>' . $row["sponsor_id"] . '</td>
                        <td>' . $row["name"] . '</td>
                        <td>' . $row["address"] . '</td>
                        <td>' . $row["about you"] . '</td>
                        <td>' . $row["timestamp"] . '</td>
                        <td>' . '<a href="registered_sponsors.php?acceptsponsorId=' . $row["sponsor_id"] . '" class="btn btn-primary btn-sm" style="margin-right:5px;">Accept</a>' .'<a href="registered_sponsors.php?rejectInternId=' . $row["sponsor_id"] . '" class="btn btn-warning btn-sm" style="margin-right:5px;">Reject</a>' .'<a href="delete_sponsor.php?deletesponsorId=' . $row["sponsor_id"] . '" class="btn btn-danger btn-sm">Delete</a>' . '</td>

                    </tr>';
            }
        } else {
            // there are no sponsors
            $display = "0";
        }

        return $display;
    }

    public function declinedsposors()
    {
        global $con;
        global $database;
        $display = '';
        $query = 'SELECT * FROM sponsors WHERE status = 1 ORDER BY sponsor_id DESC';
        //$res = mysqli_query($con, $query) or die(mysqli_error($con));
        $res = $database->query($query);
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            // inters exist
            $no = '';
            while ($row = mysqli_fetch_assoc($res)) {
                $no++;
                $display .= '
                    <tr>
                        <td>' . $no . '</td>
                        <td>' . $row["sponsor_id"] . '</td>
                        <td>' . $row["name"] . '</td>
                        <td>' . $row["phone_no"] . '</td>
                        <td>' . $row["interest"] . '</td>
                        <td>' . $row["timestamp"] . '</td>
                        <td>' . '<a href="registered_sponsors.php?acceptsponsorId=' . $row["sponsor_id"] . '" class="btn btn-primary btn-sm" style="margin-right:5px;">Activate</a>' .'<a href="delete_sponsor.php?deletesponsorId=' . $row["sponsor_id"] . '" class="btn btn-danger btn-sm">Delete</a>' . '</td>

                    </tr>';
            }
        } else {
            // there are no sponsors
            $display = "0";
        }

        return $display;
    }


    //Function to view each sponsors details
    public  function view()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $id = (int) $id;
            global $database;
            $sql = "SELECT * FROM sponsors WHERE sponsor_id = '$id'";
            $result = $database->query($sql);
            $result1 = mysqli_fetch_assoc($result);

            return $result1;
        }
    }

    // function to connect and execute the query
    public  function search($search)
    {

        global $database;
        $display = "";
        $sql1 = "SELECT * FROM sponsors WHERE `name` LIKE '%$search%' OR `current_location` LIKE '%$search%'";
        $res = $database->query($sql1);
        $count = $database->affected_rows();
        if ($count > 0) {
            // sponsors exist
            $no = '';
            while ($row = mysqli_fetch_assoc($res)) {
                $no++;
                $display .= '
                        <tr>
                            <td>' . $no . '</td>
                            <td>' . $row["sponsor_id"] . '</td>
                            <td>' . $row["name"] . '</td>
                            <td>' . $row["address"] . '</td>
                            <td>' . $row["about you"] . '</td>
                            <td>' . $row["timestamp"] . '</td>
                            <td>' . '&nbsp;<a  href="delete_sponsor.php?deletesponsorId=' . $row["sponsor_id"] . '" class="btn btn-danger btn-xs">Delete</a>' . '</td>

                        </tr>';
            }
        } else {
            // there are no sponsors
            $display = "0";
        }
        return $display;
    }

    public function getSponsor($id) {
        global $database;
        $query = "SELECT * FROM sponsors WHERE sponsor_id = ".$id."";
        $res = $database->query($query);
        $count = $database->affected_rows();
        if($count > 0) {
          // sponsor exists
          $row = mysqli_fetch_assoc($res);

          $data["name"] = $row["name"];
          $data["phone"] = $row["phone_no"];
          $data["logo"] = $row["logo"];
          $data["about"] = $row["about you"];
          $data["address"] = $row["business address"];



          return $data;
        } else {
          // no sponsors found
          return 0;
        }
      }

      public function deletesponsor($id) {
        global $database;
        $query = "DELETE FROM sponsors WHERE sponsor_id = ".$id."";
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

      public function Rejectsponsor($sponsor_id) {
        global $database;
        $query = "UPDATE sponsors SET status = 1 WHERE sponsor_id = '$sponsor_id'";
        $query2 = $database->query("SELECT * FROM sponsors WHERE sponsor_id = '$sponsor_id' ");
        $res = $database->query($query);
        $row = mysqli_fetch_array($query2);
        $fullname = $row['firstname']. ' ' . $row['lastname'];
        $email = $row['email'];
        $count = $database->affected_rows();
        if($count > 0) {
            $body = "Your registration as an intern on the HNGi7 platform has been disapproved or pending. Thank you";
            rejectInternMail($email, $fullname, $body);
          // updated
         // $reject_message = 'Intern Rejected Successfully.';
          //return $message;
          header('Location: registered_sponsors.php');
        } else {
          // failed
          return false;
        }
      }

      public function Acceptsponsor($sponsor_id) {
        global $database;
        $query = "UPDATE sponsors SET status = 2 WHERE sponsor_id = '$sponsor_id'";
        $query2 = $database->query("SELECT * FROM sponsors WHERE sponsor_id = '$sponsor_id' ");
        $res = $database->query($query);
        $count = $database->affected_rows();
        $row = mysqli_fetch_array($query2);
        $fullname = $row['firstname'] . ' ' . $row['lastname'];
        $email = $row['email'];
        if($count > 0) {
            $body = "Your registration as an intern on the HNGi7 platform has been approved and accepted. Thank you";
            acceptsponsorMail($email, $fullname, $body);
          // updated
          $accept_message = "sponsor Accepted successfully.";
          //return $message;
         header('Location:registered_sponsors.php');
        } else {
          // failed
          return false;
        }
      }
}
