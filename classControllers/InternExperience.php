<?php
/**
 * Created by PhpStorm.
 * User: Hollyphat
 * Date: 10/24/2019
 * Time: 11:59 AM
 */

class InternExperience
{

    public function saveExperience($names,$stack,$image,$experience){
        global $database;
        $sql = "INSERT INTO intern_experience(`names`,stack,`image`,experience,status) VALUES('$names','$stack','$image','$experience','1')";
        $query = $database->query($sql);
    }


    function fetch_experiences(){
        global $database;
    }
}