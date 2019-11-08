<?php
require_once "classControllers/init.php";
$admin = new Admins();

if (!isset($_SESSION["role"])) {
    header('Location:login');
}
if (isset($_GET["editAdminId"])) {
    $id = $_GET["editAdminId"];
    $res = $admin->getAdmin($id);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>New Admin</title>
	<link rel="icon" type="img/png" href="images/hng-favicon.png">
	<link rel="stylesheet" href="css/dashboard.css">
	<link rel="stylesheet" href="css/view-admin.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

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
  
  @media (max-width: 400px) {
   .admin__details {
    font-size: 25px !important;
   }
  }
	</style>

</head>
<body>
	<main>
    <section id="overview-section">
        <!-- <h1>Dashboard</h1> -->
        <br><br>

          <h2 class="col-12 text-center admin__details" style="padding-left:15px">Admin Details
          <hr class="border__bottom">
          </h2>

        <!-- <section id="intern-section">
            Populated by `js/dashboard.js`
        </section> -->

        <div class="col-lg-12 details mt-5">
<div class="container-fluid">

 <div class="fullname">
  <h4 class="contact">Full Name</h4>
  <h4 class="contact__details">
   <?php echo $res["firstname"] . ' ' . $res["lastname"]; ?>
  </h4>
  <hr class="horizontal__line">
 </div>

 <div class="email my-5">
  <h4 class="contact">Email</h4>
  <h4 class="contact__details">
   <?php echo $res["email"]; ?>
  </h4>
  <hr class="horizontal__line">
 </div>

 <div class="role">
  <h4 class="contact">Role</h4>
  <h4 class="contact__details">
   <?php if ($res["role"] == 1) {
    echo "Super Admin";
   } else {
    echo "Admin";
   } ?>
  </h4>
  <hr class="horizontal__line">
 </div>

 <div class="admin__button">
  
  <a href="admins.php">
   <button class="btn btn-lg btn-primary">All Admins</button>
  </a>
  <span class="ml-2 badge">
    <?php echo $id; ?>
  </span>

 </div>

</div>
</div>

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

<script  type="text/javascript" src="js/sidebar.js"></script>
<script type="text/javascript" src="js/dashboard.js"></script>
