<?php

include('config/database.php');
$db = new DB();
$con = $db->get_connection();

    class Mentors {

        function __construct() {
            
        }

        public function allMentors() {
            global $con;
            $display = '';
            $query = 'SELECT * FROM mentors';
            $res = mysqli_query($con, $query) or die(mysqli_error($con));
            $count = mysqli_affected_rows($con);
            if($count > 0) {
                // mentors exist
                $sn = 1;
                while($row = mysqli_fetch_assoc($res)) {
                    $display .='
                    <tr>
                        <td>'.$sn.'</td>
                        <td>'.$row["area_of_expertise"].'</td>
                        <td><img src="'.$row["photo_url"].'" style="width: 50px; height: 50px;"></td>
                        <td>'.$row["name"].'</td>
                        <td>'.$row["email"].'</td>
                        <td>'.$row["phone_no"].'</td>
                        
                        <td>'.$row["link_to_cv"].'</td>
                        <td>'.$row["why_interested"].'</td>
                        <td>'.$row["current_state"].'</td>
                        <td>'.$row["employment_status"].'</td>
                        <td>'.$row["timestamp"].'</td>
                    </tr>';
                    $sn++;
                }

            } else {
                // there are no mentors
                $display = "0";
            }

            return $display;
        }

    }

    if(isset($_GET["signup"])) {
        $interns = new Interns();
        $interns->internSignup();
    }
?>