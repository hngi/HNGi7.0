<?php



    class Intern {

        public function DeleteIntern($intern_id){


            global $database;

            $sql = "DELETE FROM interns WHERE intern_id = '$intern_id'";

            if($query = $database->query($sql)){

              $message = "Intern Deleted successfully.";

             // header('Location: registered_interns.php');

              //echo '<script>window.location.href = "registered_interns.php"</script>';
            }

           // return $message;

          }



        public function internSignup() {

            //global $con;
            global $database;
            $fullname = $database->escape_string($_POST['fullname']);
            $email = $database->escape_string($_POST['email']);
            $phoneNo = $database->escape_string($_POST['phoneNo']);
            $linkPort = $database->escape_string($_POST['linkPort']);
            $linkCV = $database->escape_string($_POST['linkCV']);
            $exp = $database->escape_string($_POST['exp']);
            $interest = $database->escape_string($_POST['interest']);
            $location = $database->escape_string($_POST['location']);
            $empStatus = $database->escape_string($_POST['empStatus']);
            $about = $database->escape_string($_POST['about']);
            $date = $database->escape_string($_POST['date']);

            // validation codes here
            $errors = array();

            if(empty($fullname)) {
                array_push($errors,"Fullname is required");
            }

            if(empty($email)) {
                array_push($errors,"Email is required");
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid.");
            }

            if(empty($phoneNo)) {
                array_push($errors,"Phone Number is required");
            }

            if(empty($linkPort)) {
                array_push($errors,"Link to portfolio is required");
            }

            if(empty($linkCV)) {
                array_push($errors,"Link to CV is required");
            }

            if(empty($exp)) {
                array_push($errors,"Experience is required");
            }

            if(empty($interest)) {
                array_push($errors,"Interest is required");
            }

            if(empty($location)) {
                array_push($errors,"Location is required");
            }

            if(empty($empStatus)) {
                array_push($errors,"Employment is required");
            }

            if(empty($about)) {
                array_push($errors,"About is required");
            }

            // check if email aready exist
            $query = "SELECT * FROM interns WHERE email = '".$email."' ";
            $res = $database->query($query);
            $count = $database->affected_rows();
            if($count > 0) {
                // email already taken
                array_push($errors, "The Email address is already in use.");
            } else {
                // email is not taken
            }


            if(count($errors)) {
                echo '<p>Registration Failed with the following Errors</p>';
                foreach($errors as $error) {
                    echo '<span style="color: red; font-size: 12px; font-wieght: bold;">' . $error . '</span><br />';
                    header('Location: join-intern.php?failed');
                    exit();
                }
            } else {
                // there are no errors
                $query = "INSERT INTO interns (name, email, phone_no, link_to_portfolio, link_to_cv, years_of_experience, interest, current_location, employment_status, about, timestamp)
                VALUES('".$fullname."', '".$email."', '".$phoneNo."', '".$linkPort."', '".$linkCV."', '".$exp."', '".$interest."', '".$location."', '".$empStatus."', '".$about."', '".$date."' ) ";

                $res = $database->query($query);
                $count = $database->affected_rows();
                header('Location: join-intern.php?successful');
                if($count > 0) {
                    // intern created
                    echo '<script>window.location.href = "./join-intern.php"</script>';


                } else {
                    // failed, error, not created
                    echo '
                        <div class="alert alert-danger" role="alert">
                            Your registration was not successful. Please try again.
                        </div>';
                }
            }

        }

        public function allInterns() {
            global $con;
            global $database;
            $display = '';
            $query = 'SELECT * FROM interns ORDER BY intern_id DESC';
            //$res = mysqli_query($con, $query) or die(mysqli_error($con));
            $res = $database->query($query);
            $count = mysqli_num_rows($res);
            if($count > 0) {
                // inters exist
                $no = '';
                while($row = mysqli_fetch_assoc($res)) {
                    $no++;
                    $display .='
                    <tr>
                        <td>'.$no.'</td>
                        <td>'.$row["intern_id"].'</td>
                        <td>'.$row["name"].'</td>
                        <td>'.$row["email"].'</td>
                        <td>'.$row["phone_no"].'</td>

                        <td>'.$row["link_to_cv"].'</td>
                        <td>'.$row["years_of_experience"].'</td>
                        <td>'.$row["interest"].'</td>
                        <td>'.$row["current_location"].'</td>
                        <td>'.$row["employment_status"].'</td>
                        <td>'.$row["about"].'</td>
                        <td>'.$row["timestamp"].'</td>
                        <td>' . '<a class="btn btn-primary" onClick="interndetails('.$row["intern_id"].');">&nbsp;View&nbsp;</a>

                        ' . '<a onClick=\"javacript: return confirm("Please confirm deletion");\"
                        href="registered_interns.php?delete_id=' . $row["intern_id"] . '" class="btn btn-danger btn-xs">Delete</a>' . '

                        </td>

                    </tr>';

                }

            } else {
                // there are no interns
                $display = "0";
            }

            return $display;
        }


        //Function to view each intern details
          function view()
          {
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                $id = (int)$id;
                global $database;
                $sql = "SELECT * FROM interns WHERE intern_id = '$id'";
                $result = $database->query($sql);
                $result1 = mysqli_fetch_assoc($result);

              return $result1;
            }
          }

          // function to connect and execute the query
            function search()
          {
              if(isset($_POST['search']))
              {
                global $database;
                $valueToSearch = $_POST['valueToSearch'];
                $sql1 = "SELECT * FROM interns WHERE name ='$valueToSearch' OR current_location ='$valueToSearch'";
                $result11 = $database->query($sql1);
                return $result11;
              }

          }

    }

    if(isset($_GET["signup"])) {
        $interns = new Interns();
        $interns->internSignup();
    }
?>
