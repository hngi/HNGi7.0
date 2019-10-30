<?php
require 'classControllers/init.php';
// check if session is set
if(!isset($_SESSION["role"])) {
	header('Location:login.php');
}



    $lockForm = new LockRegForm();
	$status = $lockForm->checkStatus();

	$noOfInterns = $lockForm->getNoOfInterns();
	$noOfMentors = $lockForm->getNoOfMentors();
	$noOfAdmins = $lockForm->getNoOfAdmins();

    if($status == 1) {
        // echo "<p>The form is Open for Registration</p>";
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard2910.css">

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
            <section id="contents">
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <div class="navbar-header">
                                <a class="navbar-brand" href="#">my<span class="main-color">Dashboard</span></a>
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <i class="fa fa-align-right"></i>
                          </button>

                        </div>
                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My profile <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#"><i class="fas fa-user-circle fw"></i> My account</a></li>
                                <li><a href="#"><i class="fas fa-envelope fw"></i> My inbox</a></li>
                                <li><a href="#"><i class="fas fa-question-circle fw"></i> Help</a></li>

                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="fa fa-sign-out"></i> Log out</a></li>
                              </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-comments"></i><span>10</span></a></li>
                            <li><a href="#"><i class="fas fa-bell"></i><span>18</span></a></li>
                            <!-- <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </nav>
                    <div class="welcome">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-9">
                            <div class="content">
                              <h2>Welcome, <?php echo $_SESSION["fullname"]; ?> !</h2>
                              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
                            </div>

                          </div>

                        </div>
                      </div>
                    </div>
            </section>
		<!-- <section id="overview-section">

			<div class="row" id="welcome">

				<div class="col-md-3">
					<form method="post">
															<input type="hidden" name="status" value="close" />
									<button style="background: #b31329;" type="submit" name="lockopenform" id="export">Registration is Open, Lock Now</button>

					</form>
				</div>
            </div>
        </section>
       -->

        <section id="overview-section">
			<!-- <h1>Dashboard</h1> -->
			<div class="row" id="welcome">
				<!-- <div class="col-md-9"><h2>Welcome, <?php echo $_SESSION["fullname"]; ?> !</h2></div> -->
				<div class="col-md-3">
					<form method="post">
						<?php
							if($status == 1) {
								// form is open
								?>
									<input type="hidden" name="status" value="close" />
									<button style="background: #b31329;" type="submit" name="lockopenform" id="export">Registration is Open, Lock Now</button>
								<?php
							} else if($status == 0) {
								// form is closed
								?>
									<input type="hidden" name="status" value="open" />
									<button style="background: #5cb85c;" type="submit" name="lockopenform" id="export">Registration Locked, Open Now</button>
								<?php
							}
						?>

					</form>
				</div>
      </div>
            </section>
            <section class='statis text-center'>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-3">
                        <a href="registered_interns.php">
                          <div class="box danger">
                              <i class="fas fa-user-graduate"></i>
                            <h3><?php echo $noOfInterns; ?></h3>
                            <p class="lead">Registered Interns</p>
                          </div>
                          </a>
                        </div>

                        <div class="col-md-3">
                        <a href="registered_mentors.php">
                          <div class="box warning">
                            <i class="fas fa-hands-helping"></i>
                            <h3><?php echo $noOfMentors; ?></h3>
                            <p class="lead">Registered Mentors</p>
                          </div>
                          </a>
                        </div>

                        <div class="col-md-3">
                        <a href="admins.php">
                          <div class="box success">
                              <i class="fas fa-user-shield"></i>
                            <h3><?php echo $noOfAdmins; ?></h3>
                            <p class="lead">Registered Admins</p>
                          </div>
                        </a>
                        </div>

                        <div class="col-md-3">
                        <a href="registered_sponsors.php">
                          <div class="box bg-primary">
                            <i class="fas fa-hand-holding-usd"></i>
                            <h3><?php echo  2 ?></h3>
                            <p class="lead">Registered Sponsors</p>
                          </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </section>


		</section>
	</main>

	<input type="checkbox" id="mobile-bars-check" />
    <label for="mobile-bars-check" id="mobile-bars">
        <div class="stix" id="stik1"></div>
        <div class="stix" id="stik2"></div>
        <div class="stix" id="stik3"></div>
    </label>
	<?php include('fragments/sidebar.php'); ?>

		<!-- <select>
			<option selected="selected" disabled="disabled">Overview</option>
			<option value="0">Mentors</option>
			<option value="1">Users</option>
		</select>
		<a href="#">Advanced</a> -->


</body>
</html>

<script type="text/javascript" src="js/dashboard2.js"></script>
