<?php

    class CountdownTimer {

        public function checkStatus() {

            //global $con;
            global $database;            
            $query = 'SELECT * FROM reg_form_status';
            $res = $database->query($query);
            $row = mysqli_fetch_assoc($res);
            return $row['status'];
            
        }

        public function updateTimer($startDate, $startTime) {

            global $database;

            // check if date and time are valid

            $curDate = date("Y-m-d");
            $curTime = date("H:i");

            $dateStatus = "";

            if(strtotime($startDate) < strtotime($curDate)) {

                $dateStatus = 'invalid';

            } else if (strtotime($startDate)  == strtotime($curDate)) {

                // same day, check time
                if(strtotime($startTime) < strtotime($curTime)) {
                    $dateStatus = 'invalid';
                } else {
                    $dateStatus = 'valid';
                }

            } else {

                $dateStatus = 'valid';

            }

            if($dateStatus == 'valid') {

                // get details of addmin
                $query = "SELECT * FROM admins WHERE admin_id = ".$_SESSION["admin_id"]."";
                $res = $database->query($query);
                $row = mysqli_fetch_assoc($res);
                $adminFullname = $row["firstname"] . ' ' . $row["lastname"];

                // check if table already has timer 
                $query = "SELECT * FROM countdown";
                $res = $database->query($query);
                $count = $database->affected_rows();

                if($count > 0) {

                    // table has countdown, update
                    $query = "UPDATE countdown SET start_date = '".$startDate."', start_time = '".$startTime."', last_updated = now(), updated_by = '".$adminFullname."' ";
                    $res = $database->query($query);
                    $count = $database->affected_rows();
                    if($count > 0) {
                        // inserted
                        header("Location: updateCountdown.php?updated");
                    } else {
                        // error
                        header("Location: updateCountdown.php?failed");
                    }

                } else {

                    // table does not have coountdown, insert
                    $query = "INSERT INTO countdown (start_date, start_time, last_updated, updated_by) VALUES('" . $startDate . "', '" . $startTime . "', now(), '" . $adminFullname . "' ) ";
                    $res = $database->query($query);
                    $count = $database->affected_rows();
                    if($count > 0) {
                        // inserted
                        header("Location: updateCountdown.php?updated");
                    } else {
                        // error
                        header("Location: updateCountdown.php?failed");
                    }

                }

            } else {

                // invalid date or time 
                header("Location: updateCountdown.php?invalid");

            }
            
        }

        public function getLastUpdated() {

            global $database;
            $query = "SELECT * FROM countdown";
            $res = $database->query($query);
            $count = $database->affected_rows();
            
            if($count > 0) {

                $row = mysqli_fetch_assoc($res);

                $data["startDate"] = $row["start_date"];
                $data["startTime"] = $row["start_time"];
                $data["lastUpdated"] = $row["last_updated"];
                $data["updatedBy"] = $row["updated_by"];
                return $data;
            } else {
                return 0;
            }

        }

        public function getDate() {
            global $database;
            $query = "SELECT * FROM countdown";
            $res = $database->query($query);
            $count = $database->affected_rows();
            if($count > 0) {

                $row = mysqli_fetch_assoc($res);

                $data["startDate"] = $row["start_date"];
                $data["startTime"] = $row["start_time"];
                
                return $data;
            } else {
                return 0;
            }
        }

    }


?>