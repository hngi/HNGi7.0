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
                header('Location: lock_reg_form.php');
            } else {
                // failed, error, not updated
                header('Location: lock_reg_form.php');
            }
            
        }

    }
?>