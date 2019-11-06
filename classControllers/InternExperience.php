<?php

class InternExperience
{

    public function saveExperience($names,$stack,$fileDe,$experience){
        global $database;
        $sql = "INSERT INTO intern_experience(names,stack,image,experience,status) VALUES('$names','$stack','$fileDe','$experience','0')";
        $query = $database->query($sql);
        return $query;
    }

   
    public function uploadImage($destination) {
      global $database;
        $sql = "INSERT INTO intern_experience (image) VALUES ('$destination')";
        $result = $database->query($sql);
        return $result;
    }



    function fetch_experiences(){
        global $database;
        //Method to fetch interns records
        $sql = "SELECT * FROM intern_experience WHERE status = '1' ORDER BY id DESC";
        $query = $database->query($sql);
        $result = $query->fetch_all(MYSQLI_ASSOC);

        return $result;
    }

    public function load_experiences(){
        global $database;
        //Method to fetch interns records
        $sql = "SELECT * FROM intern_experience ORDER BY id ASC";
        $query = $database->query($sql);
        $result = $query->fetch_all(MYSQLI_ASSOC);
        return $result;
    }
    public function approveExperience($id){
        global $database;
        $q = $database->query("UPDATE intern_experience SET status = '1' WHERE id = '$id'");
    }
    public function updateExperience($id,$names,$stack,$experience){
        global $database;
        $query = "UPDATE intern_experience SET names = '$names', stack = '$stack', experience = '$experience' WHERE id ='$id'";
        $database->query("$query");
    }
    public function deleteExperience($id){
        global $database;
        $q = $database->query("DELETE FROM intern_experience WHERE id = '$id'");
    }
    public function fetchSingleExperience($id){
        global $database;
        $sql = $database->query("SELECT * FROM intern_experience WHERE id ='$id'");
        $result = $sql->fetch_assoc();
        return $result;
    }
}
