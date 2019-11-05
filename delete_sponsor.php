<?php
require_once "classControllers/init.php";
$sponsor = new sponsors;

if (!isset($_SESSION["role"])) {
  header('Location:admin_login.php');
}


if (isset($_GET["deleteSponsorId"])) {
  $sponsor_id = $_GET["deleteSponsorId"];
  $delete = $sponsor->getSponsorsById($sponsor_id);
  $name = $delete['sponsor_name'];
  $logo = $delete['sponsor_logo'];
  $about_you = $delete['about_you'];
  $address = $delete['business_address'];
}

if (isset($_GET["yesDeleteId"])) {
  $sponsor_id = $_GET["yesDeleteId"];
  $deleteRes = $sponsor->deleteSponsors($sponsor_id);
  if ($deleteRes == true) {
    $_SESSION['success'] = "<h3 class='alert alert-success'>Sponsor was deleted succefully</h3>";
    header("location: registered_sponsors.php");
  } else {
    $respose = '<div><p> Error;  Please try again</p></div>';
  }
}

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Delete Admin</title>
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

    #text-bold {
      font-weight: bold;
    }
  </style>

</head>

<body>
  <main>
    <section id="overview-section">
      <?php
      if ($_SESSION["role"] != 1) {
        echo '<h2><br><br><br>Sorry, You do not have the priviledge to view this page</p>';
        echo '<h3><a href="dashboard.php">Dashboard</a></h3>';
        exit();
      }
      ?>
      <!-- <h1>Dashboard</h1> -->
      <br><br><br>
      <h2> Confirm Delete Admin </h2>
      <!-- <section id="intern-section">
                Populated by `js/dashboard.js` 
            </section> -->

      <div class="container">
        <div class="row">
          <div class="col-md-6">

            <div>
              <div class="col-md-12 text-warning">
                <h4>Are you sure you want to delete sponsor with the following details?</h4>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <h4 id="text-bold">SPONSOR NAME:</h4>
              </div>
              <div class="col-md-6">
                <h4><?php echo $name; ?></h4>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <h4 id="text-bold">SPONSOR LOGO:</h4>
              </div>
              <div class="col-md-6">
                <img src='<?= $logo; ?>' style='width: 100%; height: 200px;'>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <h4 id="text-bold">ABOUT SPONSOR:</h4>
              </div>
              <div class="col-md-6">
                <h4><?= $about_you; ?></h4>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <h4 id="text-bold">ADDRESS:</h4>
              </div>
              <div class="col-md-6">
                <h4><?= $address ?></h4>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3">
                &nbsp;
              </div>
              <div class="col-md-6">
                <a href="registered_sponsors.php"><button class="btn btn-primary">No, Cancel</button></a>
                <a href="delete_sponsor.php?yesDeleteId=<?= $sponsor_id; ?>"><button class="btn btn-danger">Yes, Delete</button></a>
              </div>
            </div>

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