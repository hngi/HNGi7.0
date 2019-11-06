<?php
require_once "classControllers/init.php";
$admin = new Admins();
$sponsor = new sponsors;
if (!isset($_SESSION["role"])) {
  header('Location:login.php');
}
if (isset($_GET['editSponsorId'])) {
  $sponsor_id = $database->escape_string($_GET['editSponsorId']);
  $getdetail = $sponsor->getSponsorsById($sponsor_id);
  if (isset($_POST["sponsor-update"])) {
    $errors = [];
    $sponsor->sponsor_name = $_POST["name"];
    $sponsor->sponsor_email = $_POST["sponsor_email"];
    $sponsor->business_address = $_POST["business_address"];
    $sponsor->about_you = $_POST["about_you"];
    $resp = $sponsor->updateSponsor();
    if ($resp) {
      header("location: registered_sponsors.php");
      $_SESSION['success'] = "<h3 class='alert alert-success'>Sponsor was updated succefully</h3>";
    } else {
      $errors[] = "Upload not successful";
    }
  }
  if (isset($_POST['update_photo'])) {
    $sponsor_id = $database->escape_string($_GET['editSponsorId']);
    $image = $_FILES['file']['name'];
    $target_file = 'uploads/sponsor-img/' .  $image;
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
      $sponsor->updateSponsorImg($target_file);
      header("location: registered_sponsors.php");
      $_SESSION['success'] = "<h3 class='alert alert-success'>Sponsor Logo was updated succefully</h3>";
    } else {
      $errors[] = "Upload not successful";
    }
  }
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
  </style>

</head>

<body>
  <main>
    <section id="overview-section">
      <!-- <h1>Dashboard</h1> -->
      <br><br>
      <h2>Register a new Sponsor </h2>
      <!-- <section id="intern-section">
				Populated by `js/dashboard.js`
			</section> -->

      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form method="post" enctype="multipart/form-data">

              <?php
              if (isset($resp)) {
                echo $resp;
              }
              if (!empty($errors)) {
                foreach ($errors as $error) {
                  echo "<p class='text-danger'>$error</p>";
                }
              }
              ?>

              <div class="form-group">
                <label for="email">Sponsor Name</label>
                <input type="text" class="form-control" name="name" id="firstname" value="<?= $getdetail['sponsor_name']; ?>">
              </div>
              <div class="form-group">
                <label for="email">Sponsor Address</label>
                <input type="text" class="form-control" name="business_address" id="firstname" value="<?= $getdetail['business_address']; ?>">
              </div>
              <div class="form-group">
                <label for="email">About Sponsor</label>
                <input type="text" class="form-control" name="about_you" id="firstname" value="<?= $getdetail['about_you']; ?>">
              </div>
              <div class="form-group">
                <label for="email">Sponsor Email</label>
                <input type="email" class="form-control" name="sponsor_email" id="firstname" value="<?= $getdetail['sponsor_email']; ?>">
              </div>
              <div class="form-group">
                <img src="<?= $getdetail['sponsor_logo']; ?>" alt="" style="margin-bottom:4px; width: 30%;"><br>
                <div class="">
                  <input type="file" class="" name="file" id="lastname">
                  <input type="submit" class="btn btn-light" style="font-size:12px; margin-top:5px; color:blue" name="update_photo" value="update-image">

                </div>

              </div>

              <button type="submit" class="btn btn-primary" name="sponsor-update">Submit</button>


              <a href="registered_sponsors.php" class="btn mb-4" style="background: gray; color:#fff;">cancle</a>
            </form>
          </div>
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
<script  type="text/javascript" src="js/sidebar.js"></script>
