<?php
require 'classControllers/init.php';
// check if session is set
if(!isset($_SESSION["role"])) {
	header('Location:admin_login.php'); 
}

	

    $lockForm = new LockRegForm();
	$status = $lockForm->checkStatus();
	
	$noOfInterns = $lockForm->getNoOfInterns();
	$noOfMentors = $lockForm->getNoOfMentors();
	$noOfAdmins = $lockForm->getNoOfAdmins();

    if($status == 1) {
        // echo "<p>The form is OPen for Registration</p>";
    } else {
        // echo "<p>Registration is closed</p>";
    }

    if(isset($_POST["lockopenform"])) {
		$status = $_POST['status'];
        if($status == "open") {
            $sval = 1;
        } else {
            $sval = 0;
		}
        
        $lockForm->setStatus($sval);
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

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<style type="text/css">
		.card {
			height: 150px;
			background: #D2D8E8;
			margin: 15px;
			padding: 20px;
			border-radius: 15px;
			text-align: center;
			font-size: 20px;
			
		}

		.card p{
			font-weight: bolder;
			font-size: 35px;
		}
	</style>

</head>
<body>
	<main>
		<section id="overview-section">
			<h1>Dashboard</h1>
			<h2>Welcome <?php echo $_SESSION["fullname"]; ?></h2>
			<!-- <section id="intern-section">
				Populated by `js/dashboard.js` 
			</section> -->

			<div class="row">
				
				<div class="col-md-5">
					<form method="post">
						<?php
							if($status == 1) {
								// form is open
								?>
									<input type="hidden" name="status" value="close" />
									<button style="background: #924846;" type="submit" name="lockopenform" id="export">Registration is Open, Lock Now</button>
								<?php
							} else if($status == 0) {
								// form is closed
								?>
									<input type="hidden" name="status" value="open" />
									<button style="background: #4E6A4D;" type="submit" name="lockopenform" id="export">Lock Registration Locked, Open Now</button>
								<?php
							}
						?>
						
					</form>
					
				</div>
				
			</div>

			<div class="container">
				<div class="row">
					<a href="registered_interns.php">
						<div class="col-md-2 card">
							Registered Interns
							<p><?php echo $noOfInterns; ?></p>
						</div>
					</a>

					<a href="registered_mentors.php">
						<div class="col-md-2 card">
							Registered Mentors
							<p><?php echo $noOfMentors; ?></p>
						</div>
					</a>
					
					<a href="admins.php">
						<div class="col-md-2 card">
							Registered Admins
							<p><?php echo $noOfAdmins; ?></p>
						</div>
					</a>
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