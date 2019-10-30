<?php
    require 'classControllers/init.php';
    // include('sponsor.php');

    if (!isset($_SESSION["role"])) {
        header('Location:admin_login.php');
    }

class classSponsor
{

    public function oursponsors($names,$image){
        global $database;
        $sql = "INSERT INTO sponsors(`sponsors-name`,`sponsors-img`,status) VALUES('$names','$image','1')";
        $query = $database->query($sql);
    }


    function fetch_sponsors(){
        global $database;
        //Method to fetch sponsors records
        $sql = "SELECT sponsors-names,sponsors-img, FROM sponsors WHERE status = '1' ORDER BY id DESC";
        $query = $database->query($sql);
        $result = $query->fetch_all(MYSQLI_ASSOC);

        return $result;
    }

    public function approvesponsors($id){
        global $database;
        $q = $database->query("UPDATE oursponsors SET status = '1' WHERE id = '$id'");
    }
    public function updatesponsors($id,$names,$image){
        global $database;
        $query = "UPDATE oursponsors SET names = '$names', experience = '$experience' WHERE id ='$id'";
        $database->query("$query");
    }
    public function deletesponsors($id){
        global $database;
        $q = $database->query("DELETE FROM oursponsors WHERE id = '$id'");
    }
    public function fetchingsponsors($id){
        global $database;
        $sql = $database->query("SELECT * FROM oursponsors WHERE id ='$id'");
        $result = $sql->fetch_assoc();
        return $result;
    }
}
?>
