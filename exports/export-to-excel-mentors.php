<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once ('../backend/config/database2.php');
include_once ('Mentors.php');


//Instantiate DB and connect
$database = new Database();
$db = $database->connect();

//Instantiate Intern object
$mentors = new Mentors($db);

//Get Intern query
$result = $mentors->read();

//get row count
$num = $result->rowCount();

//check intern
if ($num > 0){
    $delimiter = ",";
    $filename = "Mentors" . date('Y-m-d') . ".csv";

    //create a file pointer
    $f = fopen('php://memory', 'w');

    //set column headers
    
    $fields = array('S/N', 'Area of Expertise', 'Photo', 'Name', 'Email','Link to Linkedin','Link to CV','Why Interested','Current State','Employment Status', 'Date Registered');
    fputcsv($f, $fields, $delimiter);

    $x = 1;
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        //$lineData = array($row['intern_id'], $row['name'], $row['email'], $row['phone_no'], $row['link_to_portfolio'],$row['link_to_cv'],$row['years_of_experience'],$row['interest'],$row['current_location'],$row['employment_status'], $row['about']);

        $lineData = array($x++, $area_of_expertise, $photo_url, $name, $email, $phone_no, $link_to_linkedin, $link_to_cv, $why_interested, $current_state, $employment_status, $timestamp);
        fputcsv($f, $lineData, $delimiter);
    }
        //move back to beginning of file
        fseek($f, 0);

        //set headers to download file rather than displayed
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '";');

        //output all remaining data on a file pointer
        fpassthru($f);

    exit;

}else{
    //No post
    echo json_encode(
        array('message' => 'No Intern Found')
    );

}