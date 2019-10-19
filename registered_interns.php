<?php
<<<<<<< HEAD
require_once 'dbh.php';

$rew = new Database;
$resul = $rew->saveRecords();
=======
session_start();
if(!isset($_SESSION["role"])) {
	header('Location:admin_login.php'); 
}
    include('backend/Interns.php');
    $interns = new Interns();
    $display = $interns->allInterns();
>>>>>>> f224f333f7cee3d763f579f8829156f9a919c614

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<<<<<<< HEAD
    <title>List Of Registered Intern</title>
    <link rel="shortcut icon" href="https://res.cloudinary.com/dekillerj/image/upload/v1570648980/brand-logo.png"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="stylesheet" href="css/join-intern.css">

  </head>
  <body>
    <header>
    <a href="index.html"><img id="hng-logo" src="https://res.cloudinary.com/phiileo/image/upload/v1571147073/brand-logo_tx0mdt.png"></a>
    <input type="checkbox" id="mobile-bars-check" />
        <label for="mobile-bars-check" id="mobile-bars">
          <!--img src="images/bars-icon.png" height="23px"-->
    <div class="stix" id="stik1"></div>
    <div class="stix" id="stik2"></div>
    <div class="stix" id="stik3"></div>
        </label>
    <nav>
      <a href="index.html" class="header-links">Home</a>
      <a href="hng6.html" class="header-links">HNG 6</a>
      <a href="mentorpage.html" class="header-links">Mentors</a>
      <a href="registered_interns.php" id="join-hng" class="def-button">View Registered Interns</a>
    </nav>
  </header>
  <div class="table-responsive">

    <table class="table table-bordered table-condensed table-hover table-sm mr-2 ml-2 mt-1 mb-1">
      <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>PhoneNo</th>
        <th>Link To Portfolio</th>
        <th>Link to CV</th>
        <th>Years of Experience</th>
        <th>Interest</th>
        <th>Location</th>
        <th>Employment Status</th>
        <th>About</th>
        <th>Timestamp</th>
      </tr>
      </thead>
        <!-- Loop condition to view rigestered interns -->
    <?php while ($results = mysqli_fetch_assoc($resul)) :

      ?>
      <tbody>
        <tr>
          <td><?=$results['intern_id'];?></td>
          <td><?=$results['name'];?></td>
          <td><?=$results['email'];?></td>
          <td><?=$results['phone_no'];?></td>
          <td><?=$results['link_to_portfolio'];?></td>
          <td><?=$results['link_to_cv'];?></td>
          <td><?=$results['years_of_experience'];?></td>
          <td><?=$results['interest'];?></td>
          <td><?=$results['current_location'];?></td>
          <td><?=$results['employment_status'];?></td>
          <td><?=$results['about'];?></td>
          <td><?=$results['timestamp'];?></td>
        </tr>
        </tbody>
        <?php endwhile; ?>
    </table>
  </div>
=======
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Interns</title>
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

</head>
<body>
	<main>
		<section id="overview-section">
			<!-- <h1>Dashboard</h1> -->
			<h2>Registered Interns </h2>
			<!-- <section id="intern-section">
				Populated by `js/dashboard.js` 
			</section> -->
>>>>>>> f224f333f7cee3d763f579f8829156f9a919c614

			<div class="container">
				<div class="row">

                <?php
                    if($display == "0") {
                        echo "<h2>There are no Registered Interns</h2>";
                    } else {
                    ?>
                        <div class="col-md-3">
                            <a href="exports/export-to-excel.php">
                                <button type="button" id="export">Export to Spreadsheet</button>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="exports/export-to-pdf.php">
                                <button type="button" id="export">Export to PDF</button>
                            </a>
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Emai</th>
                                <th>Phone</th>
                                <!-- <th>Porfolio</th> -->
                                <th>CV</th>
                                <th>Exp</th>
                                <th>Interest</th>
                                <th>Location</th>
                                <th>Emp. Stat</th>
                                <th>About</th>
                                <th>Reg. Date</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    echo $display; 
                                ?>
                            </tbody>
                        </table>
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