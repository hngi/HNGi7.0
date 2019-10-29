<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once ('../backend/config/database2.php');
include_once ('Mentors.php');
require ('../vendor/autoload.php');

use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf('L','A3');


//Instantiate DB and connect
$database = new Database();
$db = $database->connect();

//Instantiate Intern object
$mentors = new Mentors($db);

//Get Intern query
$result = $mentors->read();

//get row count
$num = $result->rowCount();
$content = "";

//check intern
if ($num > 0){



    $content='<style type="text/css">
<!--
   table {
    border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
    text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
background-color: #000000;
}
-->
</style>';
    $content .= '<page><table border="1">
    <tr>
    <th>S/N</th>
    <th>Area of Expertise</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Lilnk to Linkedin</th>
    <th>Link to CV</th>
    <th>Why Interested</th>
    <th>Current Location</th>
    <th>Employment Status</th>
    <th>Date of Registration</th>
  </tr>';

    $x = 1;
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $content .= '<tr>';
        $content .= '<td>'.$x++.'</td>';
        $content .= '<td>'.$area_of_expertise.'</td>';
        $content .= '<td>'.$name.'</td>';
        $content .= '<td>'.$email.'</td>';
        $content .= '<td>'.$phone_no.'</td>';
        $content .= '<td>'.$link_to_linkedin.'</td>';
        $content .= '<td>'.$link_to_cv.'</td>';
        $content .= '<td>'.$why_interested.'</td>';
        $content .= '<td>'.$current_state.'</td>';
        $content .= '<td>'.$employment_status.'</td>';
        $content .= '<td>'.$timestamp.'</td>';
        $content .= '</tr>';


    }
    $content .='</table></page>';

    $html2pdf->writeHTML($content);

    $html2pdf->output('Mentors.pdf', 'D');


    exit;

}else{
    //No post
    echo json_encode(
        array('message' => 'No Mentor Found')
    );

}