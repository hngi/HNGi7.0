<?php
require 'classControllers/init.php';
if(!isset($_SESSION["role"])) {
	header('Location:admin_login.php'); 
}
   
    $mentors = new Mentor;
    $display = $mentors->allMentors();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Mentors</title>
	<link rel="icon" type="img/png" href="images/hng-favicon.png">
	<link rel="stylesheet" href="css/dashboard.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<style type="text/css">
		.card {
			height: 150px;
			background: #ccc;
			margin: 15px;
			padding: 10px;
			border-radius: 15px;
			
		}
	</style>
	
	<script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body><br><br><br>" + divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;
        }
    </script>

</head>
<body>
	<main>
		<section id="overview-section">
			<!-- <h1>Dashboard</h1> -->
			<h2>Registered Mentors </h2>
			<!-- <section id="intern-section">
				Populated by `js/dashboard.js` 
			</section> -->

			<div class="container">
				<div class="row">

                <?php
                    if($display == "0") {
                        echo "<h2>There are no Registered Interns</h2>";
                    } else {
                    ?>
                        <!--<div class="col-md-3">-->
                        <!--    <a href="exports/export-to-excel-mentors.php">-->
                        <!--        <button type="button" id="export">Export to Spreadsheet</button>-->
                        <!--    </a>-->
                        <!--</div>-->
                        <div class="col-md-3">
                            <!--<a href="exports/export-to-pdf-mentors.php">-->
                            <a href="#" onclick="javascript:printDiv('printablediv')">
                                <button type="button" id="export">Export to PDF</button>
                            </a>
                        </div>
                        <div id="printablediv">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Area Of Expertise</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <!-- <th>Link To Linkedin</th> -->
                                    <th>Link To Cv</th>
                                    <th>Why Interested</th>
                                    <th>Current State</th>
                                    <th>Employment Status</th>
                                    <th>Timestamp</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        echo $display; 
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                    }
                ?>
                    
				</div>
			</div>

			<!-- <button id="export">Export to Spreadsheet</button> -->
		
		</section>
		<!-- <section id="details-section">
			<div id="details-back">
                <div>
                    <a href="overview.html" id="newitem-go-back" title="Go back">
                        <div></div>
                    </a>
                </div>
            </div>
			<h2>Intern application details</h2>
			<em id="no-intern">No intern selected</em>
			<br />
			<p>Name: <span id="details-name"></span></p>
			<p>Email: <span id="details-email"></span></p>
			<p>Age: <span id="details-age"></span></p>
			<p>Phone Number: <span id="details-number"></span></p>
			<p>Track of interest: <span id="details-track"></span></p>
			<p>CV link: <span id="details-CV-link"></span></p>
			<p>State of residence: <span id="details-state-of-residence"></span></p>
			<div href="" id="details-return">Back to Overview</div>
		</section> -->
	</main>

	<input type="checkbox" id="mobile-bars-check" />
    <label for="mobile-bars-check" id="mobile-bars">
        <div class="stix" id="stik1"></div>
        <div class="stix" id="stik2"></div>
        <div class="stix" id="stik3"></div>
    </label>
    
    <?php include('fragments/sidebar.php'); ?>

</body>
</html>

<script type="text/javascript" src="js/dashboard.js"></script>