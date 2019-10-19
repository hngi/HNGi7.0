<?php
session_start();
include('../config/database.php');
$db = new DB();
//$con = $db->get_connection();

    class Admins {

        function __construct() {
            
        }

        public function adminLogin() {

            //global $con;
            global $db;
            $email = $_POST["email"];
            $password = $_POST["password"];

            // validation codes here
            $errors = array();

            if(empty($email)) {
                array_push($errors,"Email is required");
            } 

            if(empty($password)) {
                array_push($errors,"Password is required");
            } 

            // check if there are errors
            if(count($errors)) {
                echo '<p>Registration Failed with the following Errors</p>';
                foreach($errors as $error) {
                    echo $error . '<br />';
                }
            } else {
                // there are no errors
                $query = 'SELECT * FROM admins WHERE email="'.$email.'" AND password="'.$password.'" ';

                $res = $db->query($query);
                $count = $db->affected_rows();

                if($count > 0) {
                    // user exist
                    // get user details and create session
                    
                    $row = mysqli_fetch_assoc($res);

                    $fullname = $row["firstname"] . ' ' . $row["lastname"];
                    $role = $row["role"];

                    $_SESSION["fullname"] = $fullname;
                    $_SESSION["role"] = $role;

                    echo '<script>window.location.href = "dashboard.php"</script>';
                } else {
                    // user does not exist
                    echo '<p style="margin: 5px; padding: 5px 10px 5px 10px; background: #F7CFCF; color: #6A0E0D; width: 100% !important; ">Incorrect Username or password</p>';
                }
            }
 
        }

        public function allAdmins() {
            global $con;
            global $db;
            $display = '';
            $query = 'SELECT * FROM admins';
            $res = $db->query($query);
            $count = $db->affected_rows();
            if($count > 0) {
                // inters exist
                $sn = 1;
                while($row = mysqli_fetch_assoc($res)) {
                    $display .='
                    <tr>
                        <td>'.$sn.'</td>
                        <td>'.$row["firstname"].'</td>
                        <td>'.$row["lastname"].'</td>
                        <td>'.$row["email"].'</td>
                        <td>'.$row["role"].'</td>
                        <td>'.$row["timestamp"].'</td>
                    </tr>';
                    $sn++;
                }

            } else {
                // there are no interns
                $display = "0";
            }

            return $display;
        }

        public function newAdmin($firstname, $lastname, $email, $role) {
            global $db;
            //global $con;
            $password = rand(123456,789654);
            $hashedPassword = sha1($password);

            // check for existing email
            $query = "SELECT * FROM admins WHERE email = '".$email."' ";
            $res = $db->query($query);
            $count = $db->affected_rows();
            if($count > 0) {
                // email exists
                $res = $resp = '<div class="alert alert-danger" role="alert">
                                    The Email you entered is already associated with an account
                                </div>';
            } else {
                // email is available, good, proceed to register
                
                $query = "INSERT INTO admins (firstname, lastname, email, password, role, timestamp) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$hashedPassword."', '".$role."', now())";
                $res = $db->query($query);
                $count = $db->affected_rows();

                if($count > 0) {
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

    }

    if(isset($_GET["login"])) {
        $admin = new Admins();
        $admin->adminLogin();
    }
?>