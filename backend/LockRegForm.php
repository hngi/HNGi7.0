<?php

include('config/database.php');
$db = new DB();
$con = $db->get_connection();

    class LockRegForm {

        function __construct() {
            
        }

        public function checkStatus() {

            global $con;
            $query = 'SELECT * FROM reg_form_status';
            $res = mysqli_query($con, $query) or die(mysqli_error($con));
            $row = mysqli_fetch_assoc($res);
            return $row['status'];
            
        }

        public function setStatus($status) {

            global $con;
            $query = "UPDATE reg_form_status SET status = '".$status."'";
            $res = mysqli_query($con, $query) or die(mysqli_error($con));
            $count = mysqli_affected_rows($con);

            if($count > 0) {
                // status updated
                header("Refresh:0");

            } else {
                // failed, error, not updated
                // header('dashboard.php');
                header("Refresh:0");
            }
            
        }

        public function getNoOfInterns() {
            global $con;
            $query = 'SELECT * FROM interns';
            $res = mysqli_query($con, $query);
            $count = mysqli_affected_rows($con);
            return $count;
        } 

        public function getNoOfMentors() {
            global $con;
            $query = 'SELECT * FROM mentors';
            $res = mysqli_query($con, $query);
            $count = mysqli_affected_rows($con);
            return $count;
        } 

        public function getNoOfAdmins() {
            global $con;
            $query = 'SELECT * FROM admins';
            $res = mysqli_query($con, $query);
            $count = mysqli_affected_rows($con);
            return $count;
        }

    }
?>