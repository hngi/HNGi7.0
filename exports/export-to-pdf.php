<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once ('../backend/config/database2.php');
include_once ('Interns.php');
require ('../vendor/autoload.php');

use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf('L','A3');


//Instantiate DB and connect
$database = new Database();
$db = $database->connect();

//Instantiate Intern object
$intern = new Interns($db);

//Get Intern query
$result = $intern->read();

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
    <th>Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Link to Portfolio</th>
    <th>Link to CV</th>
    <th>Experience (Yrs)</th>
    <th>Interest</th>
    <th>Location</th>
    <th>Employment Status</th>
  </tr>';

    $x = 1;
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $content .= '<tr>';
        $content .= '<td>'.$x++.'</td>';
        $content .= '<td>'.$name.'</td>';
        $content .= '<td>'.$email.'</td>';
        $content .= '<td>'.$phone_no.'</td>';
        $content .= '<td>'.$link_to_portfolio.'</td>';
        $content .= '<td>'.$link_to_cv.'</td>';
        $content .= '<td>'.$years_of_experience.'</td>';
        $content .= '<td>'.$interest.'</td>';
        $content .= '<td>'.$current_location.'</td>';
        $content .= '<td>'.$employment_status.'</td>';
        $content .= '</tr>';


    }
    $content .='</table></page>';

    $html2pdf->writeHTML($content);

    $html2pdf->output('interns.pdf', 'D');


    exit;

}else{
    //No post
    echo json_encode(
        array('message' => 'No Intern Found')
    );

}