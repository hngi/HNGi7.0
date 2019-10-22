<?php
include_once ('../config/database.php');
include_once ('Interns.php');


//Instantiate DB and connect
$database = new DB();
$db = $database->get_connection();

//Instantiate Intern object
$intern = new Interns($db);

//Get Intern query
$result = $intern->read();


//check intern

$delimiter = ",";
$filename = "interns_" . date('Y-m-d') . ".csv";

//create a file pointer
$f = fopen('php://memory', 'w');

//set column headers
$fields = array('S/N', 'Name', 'Email', 'Phone', 'Link to Portfolio','Link to Cv','Years of Experience','Interest','Location','Employment Status', 'About');
fputcsv($f, $fields, $delimiter);

$x = 1;
while ($row = $result->fetch_array()) {
    extract($row);
    //$lineData = array($row['intern_id'], $row['name'], $row['email'], $row['phone_no'], $row['link_to_portfolio'],$row['link_to_cv'],$row['years_of_experience'],$row['interest'],$row['current_location'],$row['employment_status'], $row['about']);
    $lineData = array($x++, $name, $email, $phone_no, $link_to_portfolio, $link_to_cv, $years_of_experience, $interest, $current_location, $employment_status, $about);
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

