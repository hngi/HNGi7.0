<?php
require 'classControllers/init.php';

if (!isset($_SESSION["role"])) {
  header('Location:admin_login.php');
}
// include('backend/Interns.php');
$interns = new Intern;
$display = $interns->allInterns();

if (isset($_GET['delete_id'])) {
  $intern_id = $_GET['delete_id'];

  $message = $interns->DeleteIntern($intern_id);
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Interns</title>
  <link rel="icon" type="img/png" href="images/hng-favicon.png">
  <link rel="stylesheet" href="css/dashboard.css">

  <!-- Latest compiled and minified CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



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
  <main class="reg">
    <section id="overview-section interns-list">
      <!-- <h1>Dashboard</h1> -->
      <h2>Registered Interns </h2>
      <!-- <section id="intern-section">
				Populated by `js/dashboard.js`
			</section> -->

      <div class="container">
        <div class="row">

          <?php
          if ($display == "0") {
            echo "<h2>There are no Registered Interns</h2>";
          } else {
            ?>
            <!--<div class="col-md-3">-->
            <!--    <a href="exports/export-to-excel.php">-->
            <!--        <button type="button" id="export">Export to Spreadsheet</button>-->
            <!--    </a>-->
            <!--</div>-->
            <div class="col-md-3">
              <!--<a href="exports/export-to-pdf.php">-->
              <a href="#" onclick="javascript:printDiv('printablediv')">
                <button type="button" class="btn btn-primary" id="export">Export to PDF</button>
              </a>
            </div>
            <div class="table-responsive" id="printablediv">
              <table class="table table-hover table-bordered  mt-3 mb-1 table-condensed">
                <thead class="table-primary">
                  <tr>
                    <th>S/N</th>
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

  <input type="checkbox" id="mobile-bars-check" />
  <label for="mobile-bars-check" id="mobile-bars">
    <div class="stix" id="stik1"></div>
    <div class="stix" id="stik2"></div>
    <div class="stix" id="stik3"></div>
  </label>

  <?php include('fragments/sidebar.php'); ?>


  <!-- Modal -->
  <div class="modal fade" id="coolStuffModal" tabindex="-1" role="dialog" aria-labelledby="coolStuffLabel" aria-hidden="true">

    <!-- <div class="modal fade details-1" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="details-l" aria-hidden="true"> -->
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="contentLabel">Noooo</h5>
          <!-- <h5 class="modal-title" id="contentLabel"><?= $product['title']; ?></h5> -->
          <!-- <button class="close" type="button" onclick="closeModel()" aria-label="close">
          <span aria-hidden="true">&times;</span></button> -->
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="center-block">
                </div>
              </div>
              <div class="col-sm-6">
                <h4>Details</h4>
                <!-- <p><?= $product['description']; ?></p>
              <p>Price : <?= money($product['price']); ?></p>
              <p>Brand: <?= $brand['brand']; ?></p> -->
                <form class="" action="" method="post">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-3"><label for="quantity">Quantity:</label></div>
                      <input type="text" name="quantity" id="quantity" class="form-control form-brand" value="">
                    </div>
                    <div class="col-xs-9"></div>
                  </div>
                  <div class="form-group">
                    <label for="size">Size :</label>
                    <select class="form-control" name="size" id="size">
                      <!-- <option value=""></option>
        <?php foreach ($sizeArray as $string) {
          $stringArray = explode(':', $string);
          $size = $stringArray[0];
          $quantity = $stringArray[1];
          echo '<option value="' . $size . '">' . $size . ' (' . $quantity . ' Available)</option>';
        } ?> -->
                    </select>
                  </div>
                </form>
              </div>
              <div class="col-sm-6 modal-footer"></div>
              <div class="modal-footer col-sm-6">
                <button type="button" class="btn btn-info" onclick="closeModel()">Close</button>
                <button type="submit" class="btn btn-warning" onclick="closeModel()">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script type="text/javascript">
    // To display the promo items. The code is in index
    function detailsmodal(id) {
      var data = {
        "intern_id": intern_id
      };
      jQuery.ajax({
        url: '/HNGi7.0/registered_interns.php',
        method: "post",
        data: data,
        success: function(data) {
          jQuery('body').append(data);
          jQuery('#details-modal').modal('toggle');
        },
        error: function() {
          alert("Something went wrong!")
        },
      });
    }
  </script>

  <script type="text/javascript" src="js/dashboard.js"></script>


</body>

</html>