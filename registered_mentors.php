<?php

require 'classControllers/init.php';
if (!isset($_SESSION["role"])) {
    header('Location:admin_login.php');
}


$mentors = new Mentor;
$display = $mentors->allMentors();
if (isset($_GET['search'])) {
    $mentors = new Mentors;
    $display = $mentors->ByName($_GET['search']);
}

if (isset($_GET['delete_id'])) {
    $mentor_id = $_GET['delete_id'];

    $message = $mentors->DeleteMentor($mentor_id);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Dashboard</title>
	<link rel="icon" type="img/png" href="images/hng-favicon.png">
	<link rel="stylesheet" href="css/dashboard.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
            document.body.innerHTML = "<html><head><title></title></head><body><br><br><br>" + divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;
        }
    </script>

</head>

<body>
	<main class="reg">
		<section id="overview-section">
			<h1>Registered Mentors</h1>
			<div class="register-container">
        <div class="row">

          <?php
          if ($display == "0") {
            echo "<h2>There are no Registered Mentors</h2>";
          } else {
            ?>
            <!--<div class="col-md-3">-->
            <!--    <a href="exports/export-to-excel.php">-->
            <!--        <button type="button" id="export">Export to Spreadsheet</button>-->
            <!--    </a>-->
            <!--</div>-->
            <div class="col-md-12">
                    <!--<a href="exports/export-to-pdf-mentors.php">-->
                    <a href="#" onclick="javascript:printDiv('printablediv')">
                        <button type="button" class="btn btn-primary btn-sm" id="export">Export to PDF</button>
                    </a>
                </div>
            </div>
            <div class="row" id="table-row">
                    <div class="table-responsive" id="printablediv">
                    <table class="table table-hover mt-3 mb-1">
                            <thead class="table-primary">
                                <tr>
                                    <th>S/N</th>
                                    <th>Area Of Expertise</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <!-- <th>Link To Linkedin</th> -->
                                    <th>Link To CV</th>
                                    <th>Why Interested</th>
                                    <th>Current State</th>
                                    <th>Employment Status</th>
                                    <th>Timestamp</th>
                                    <th>Action</th>


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
      <br /><br />
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
    <div id="modal-div"></div>
    <button id="trigger" hidden type="button" class="btn btn-primary" data-toggle="modal" data-target="#mentor-modal">
        Launch demo modal
    </button>
    <input type="checkbox" id="mobile-bars-check" />
    <label for="mobile-bars-check" id="mobile-bars">
        <div class="stix" id="stik1"></div>
        <div class="stix" id="stik2"></div>
        <div class="stix" id="stik3"></div>
    </label>


    <?php include('fragments/sidebar.php'); ?>
    <script>
        function displayEach(id) {
            $.get("modal.php", {
                mentor_id: id
            }, function(data) {
                console.log(data);
                $("#modal-div").html(data);
                //jQuery('#mentor-modal').modal('toggle');
                //setTimeout(function() {
                $('#trigger').trigger('click');
                //}, 500);
                // setTimeout(function() {
                //     $("#modal-div").load("modal.php", {
                //         mentor_id: id
                //     }, function() {
                //         //$('#img-modalbtn').trigger('click');
                //         $('#mentor-modal').modal('show');
                //     });

                // }, 500);
            });
        }
    </script>


</body>

</html>

<script type="text/javascript" src="js/dashboard.js"></script>
