<?php




    class LockRegForm {

      

        public function checkStatus() {

            //global $con;
            global $database;            
            $query = 'SELECT * FROM reg_form_status';
            $res = $database->query($query);
            $row = mysqli_fetch_assoc($res);
            return $row['status'];
            
        }

        public function setStatus($status) {

            //global $con;
            global $database;
            $query = "UPDATE reg_form_status SET status = '".$status."'";
            $res = $database->query($query);
            $count = $database->affected_rows();

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
            //global $con;
            global $database;
            $query = 'SELECT * FROM interns';
            $res = $database->query($query);
            $count = $database->affected_rows();
            return $count;
        } 

        public function getNoOfMentors() {
            //global $con;
            global $database;
            $query = 'SELECT * FROM mentors';
            $res = $database->query($query);
            $count = $database->affected_rows();
            return $count;
        } 

        public function getNoOfAdmins() {
            //global $con;
            global $database;
            $query = 'SELECT * FROM admins';
            $res = $database->query($query);
            $count = $database->affected_rows();
            return $count;
        }

    }
?>