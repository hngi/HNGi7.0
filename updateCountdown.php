<?php
require 'classControllers/init.php';
// check if session is set
if(!isset($_SESSION["role"])) {
	header('Location:login.php'); 
}

	$countdown = new CountdownTimer();
	$countDetails = $countdown->getLastUpdated();

    if(isset($_POST["updateTimer"])) {

		$startDate = $_POST['startDate'];
		$startTime = $_POST['startTime'];

		$countdown->updateTimer($startDate, $startTime);
    }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Update Countdown</title>
	<link rel="icon" type="img/png" href="images/hng-favicon.png">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link href="css/dashboard.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<style type="text/css">
		.card {
			height: 150px;
			background: #f3f3f3;
			margin: 15px;
			padding: 20px;
			border-radius: 8px;
			text-align: center;
			font-size: 20px;
			box-shadow: 1px 0 4px rgba(0,0,0,0.3);
			
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
			<h1>Update Countdown Timer</h1>
			<div class="row" id="welcome">
				<div class="col-md-9"><h2> </h2></div>
				<div class="col-md-3">
					<form method="post">
						
						
					</form>
				</div>
			</div>

			<br><br>

			<div class="container">

				<div class="row">

					<?php
						if(isset($_GET["updated"])) {
							echo '
							<div class="alert alert-success">
								<strong>Done!</strong> Countdown timer updated Successfully
							</div>';
						}

						if(isset($_GET["invalid"])) {
							echo '
							<div class="alert alert-danger">
								<strong>Error! Update Failed. </strong> Selected date and time cannot be in the past.
							</div>';
						}
					?>

					<div class="col-md-5">
						<form method="post">

						  <div class="form-group">
						    <label for="email">Start Date</label>
						    <input type="date" class="form-control" id="" name="startDate" required>
						  </div>

						  <div class="form-group">
						    <label for="pwd">Start Time</label>
						    <input type="time" class="form-control" id="" name="startTime" required>
						  </div>

						  <button type="submit" name="updateTimer" class="btn btn-primary">Update</button>
						  
						</form>
					</div>

					<div class="col-md-6" style="background: #EDF3F6; padding: 10px; border-radius: 10px; margin: 10px; ">
						<h3>Countdown Status</h3>

						<?php
							if($countDetails == "0") {
							?>
								<h5>Timer has not been Updated</h5>
							<?php
							} else {
							?>
							<?php
								$date=date_create($countDetails["startDate"]);
								$fStartDate =  date_format($date, "l, jS F, Y");
								
								$time = date_create($countDetails["startTime"]);
								$fStartTime = date_format($time, "g:i:A");

								$lastDate = date_create($countDetails["lastUpdated"]);
								$fLastUpdated = date_format($lastDate, "l, jS F, Y - g:i:A");
							?>

								<h5>Start Date : <?php echo $fStartDate; ?></h5>
								<h5>Start Date : <?php echo $fStartTime; ?></h5>
								<h5>Last Updated : <?php echo $fLastUpdated; ?> </h5>
								<h5>Updated By: <?php echo $countDetails["updatedBy"]; ?> </h5>
							<?php
							}
						?>

						
					</div>

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
<script  type="text/javascript" src="js/sidebar.js"></script>
<script type="text/javascript" src="js/dashboard.js"></script>