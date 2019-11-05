<?php
require 'classControllers/init.php';
if (!isset($_SESSION["role"])) {
    header('Location:admin_login.php');
}
$mentors = new Mentor;
$display = $mentors->allMentors();
if (isset($_GET['acceptMentorId'])) {
    $mentor_id = $_GET['acceptMentorId'];
    $message = $mentors->AcceptMentor($mentor_id);
}
if (isset($_GET['rejectMentorId'])) {
    $mentor_id = $_GET['rejectMentorId'];
    $message = $mentors->RejectMentor($mentor_id);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registered Mentors</title>
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!--This contains the styling for the side bar -->
    <link href="css/dashboard.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    <link href="css/newDashboard.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />


    <!-- This version required for Pagination -->
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

</head>

<body>
    <main class="reg">
    <div id="overlay"></div>
        <div id="export-modal">
            <div>
                <input type="radio" id="csv" name="exportOptions"><label for="csv">Export to CSV</label>
            </div>
            <div>
                <input type="radio" id="pdf" name="exportOptions"><label for="pdf">Export to PDF</label>
            </div>
            <p id="message"></p>
            <button type="button" class="exports" id="download">Download</button>
        </div>
        <input type="text" class="searchBox"><i class="fas fa-search"></i>
        <section id="overview-section">
            <!-- <h1>Dashboard</h1> -->
            <h2>Active Mentors </h2>
            <div class="mentor-buttons">
                <a href="pending_mentors.php" class="btn btn-default">Pending Mentors</a>
                <a href="declined_mentors.php" class="btn btn-default">Declined Mentors</a>
            </div>
            <!-- <section id="intern-section">
				Populated by `js/dashboard.js`
			</section> -->

            <div>
                <div class="row">

                    <?php
                    if ($display == "0") {
                        echo "<h2>There are no Active Mentors</h2>";
                    } else {
                        ?>
                        <!--<div class="col-md-3">-->
                        <!--    <a href="exports/export-to-excel-mentors.php">-->
                        <!--        <button type="button" id="export">Export to Spreadsheet</button>-->
                        <!--    </a>-->
                        <!--</div>-->
                        <!-- <div class="col-md-3">

                            <a href="#" onclick="javascript:printDiv('printablediv')">
                                <button type="button" class="btn btn-primary btn-sm" id="export">Export to PDF</button>
                            </a> -->
                        </div>
                        <!-- <div id="printablediv" class="table-responsive"> -->
                        <div id="printablediv">
                            <div class="scroll">
                            <!-- <table id="my-table" class="table table-hover table-bordered mt-3 mb-1"> -->
                            <table id="my-table" class="table table-hover mentor-table">
                                <!-- <thead class="table-primary"> -->
                                <thead>
                                    <tr>
                                    <th data-heading="sn">SN<!--<i class="fas fa-sort-up"></i><i class="fas fa-sort-down"></i>--></th>
                                    <th data-heading="expertise">Area Of Expertise<!--<i class="fas fa-sort-up"></i><i class="fas fa-sort-down"></i>--></th>
                                    <th data-heading="photo">Photo<!--<i class="fas fa-sort-up"></i><i class="fas fa-sort-down"></i>--></th>
                                    <th data-heading="name">Name<!--<i class="fas fa-sort-up"></i><i class="fas fa-sort-down"></i>--></th>
                                    <th data-heading="email">Email<!--<i class="fas fa-sort-up"></i><i class="fas fa-sort-down"></i>--></th>
                                    <th data-heading="phone">Phone<!--<i class="fas fa-sort-up"></i><i class="fas fa-sort-down"></i>--></th>
                                    <!-- <th>Link To Linkedin</th> -->
                                    <th data-heading="cv">Link To Cv<!--<i class="fas fa-sort-up"></i><i class="fas fa-sort-down"></i>--></th>
                                    <th data-heading="Interest">Why Interested<!--<i class="fas fa-sort-up"></i><i class="fas fa-sort-down"></i>--></th>
                                    <th data-heading="state">Current State<!--<i class="fas fa-sort-up"></i><i class="fas fa-sort-down"></i>--></th>
                                    <th data-heading="employment-status">Employment Status<!--<i class="fas fa-sort-up"></i><i class="fas fa-sort-down"></i>--></th>
                                    <th data-heading="timeStamp">Timestamp<!--<i class="fas fa-sort-up"></i><i class="fas fa-sort-down"></i>--></th>
                                        <th> Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        echo $display;
                                        ?>

                                </tbody>
                            </table>
                          </div>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="buttonDiv">
                                <!--<a href="exports/export-to-pdf-mentors.php">-->
                                <a href="#" onclick="javascript:printDiv('printablediv')">
                                    <button type="button" class="exports" id="export">Print</button>
                                </a>
                                <a href="#" >
                                    <button type="button" class="exports" id="exportAs">Export</button>
                                </a>
                        </div>
                </div>
            </div>

            <!-- <button id="export">Export to Spreadsheet</button> -->

        </section>
        <section id="details-section">
			<div id="details-back" class="details-back">
                <div class="details-back">
                    <!-- <a href="overview.html" id="newitem-go-back" title="Go back">
                        <div></div>
                    </a> -->
                </div>
            </div>
            <div id="centralize">
			<h2>Mentor Details</h2>
			<em id="no-intern">No mentor selected</em>
            <br />
            <p class="details" style="margin-left:10%;"><span id="photo"></span></p>
			<p class="details">Name: <span id="name"></span></p>
			<p class="details">Email: <span id="email"></span></p>
			<p class="details">Phone Number: <span id="phone"></span></p>
			<p class="details">Expertise: <span id="expertise"></span></p>
			<p class="details">CV link: <span id="cv"></span></p>
            <p class="details">State of residence: <span id="state"></span></p>
            <p class="details">Employment Status: <span id="employment-status"></span></p>
            <p class="details">Why Interested: <span id="Interest"></span></p>
            <p class="details">Timestamp: <span id="timeStamp"></span></p>
            <!-- <div href="" id="details-return">Back to Overview</div> -->
            <div id="navigator">
                <i class="fas fa-chevron-left fa-2x left navigator"></i>
                <p class="details"><span id="sn"></span></p>
                <i class="fas fa-chevron-right fa-2x right navigator"></i>
            </div>
            </div>
		</section>
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
<script src="js/jspdf.js"></script>
<script src="js/jspdf.plugin.autotable.min.js"></script>
<script src="js/paginator.js"></script>
<script  type="text/javascript" src="js/sidebar.js"></script>
<script type="text/javascript" src="js/newDashboard.js"></script>
