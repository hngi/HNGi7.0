<?php
require_once 'classControllers/init.php';
// include('backend/Admins.php');


if(!isset($_SESSION["role"])) {
    header('Location:admin_login');
}

$adminId = $_SESSION["admin_id"];
$admin = new Admins();
$display = $admin->getAdmin($adminId);


if($display["hasPic"] == 0) {
    // admin has NO picture, show default
    $_SESSION["hasPic"] = "no";
} else {
    // admin has picture
     $_SESSION["hasPic"] = "yes";
}


if(isset($_POST["update"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];

    $updateResult = $admin->updateProfile($firstname, $lastname, $email, $adminId);
}


if(isset($_POST["uploadPicture"])) {
    $fileName = $adminId. ".jpg";
    if (move_uploaded_file($_FILES["image"]["tmp_name"], "adminProfilePics/".$fileName."")) {
        $admin->imageUPloaded($adminId);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Admin Profile</title>

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
        .col-md-2 {
            height: 40px;
        }
        .col-md-8 {
            height: 1px;
            padding: 0;
            margin: 0;
        }
    </style>


</head>

<body>
<main class="reg">

    <section id="overview-section">
        <h1>Admin Profile</h1>
        <div class="register-container">
            <br /><br />
            <div class="row" id="table-row">

                <div class="col-md-6">

                    <?php
						if(isset($_GET["updated"])) {
							echo '
							<div class="alert alert-success">
								<strong>Done!</strong> Profile updated Successfully
							</div>';
						}

						if(isset($_GET["failed"])) {
							echo '
							<div class="alert alert-danger">
								<strong>Error! Update Failed. </strong> No changes found.
							</div>';
						}
                    ?>

                    <form method="post">
                        <div class="form-group">
                            <label for="">First Name: </label>
                            <input type="text" name="firstname" id="fname" required class="form-control" value="<?php echo $display["firstname"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Last Name: </label>
                            <input type="text" name="lastname" id="name" required class="form-control" value="<?php echo $display["lastname"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Email: </label>
                            <input type="email" name="email" id="email" required  class="form-control" value="<?php echo $display["email"]; ?>">
                        </div>

                        <div class="form-group">
                            <label for="">Role: </label>
                            <?php
                                if($display["role"] == 1) {
                                    $role = "Super Admin";
                                } else if($display["role"] == 2) {
                                    $role = "Admin";
                                }
                            ?>
                            <input type="text" name="role" id="role" required  class="form-control" value="<?php echo $role; ?>" disabled>
                        </div>

                        <input type="submit" class="btn btn-success" id="submit" name="update" value="Save Changes">


                    </form>

                </div>

                <div class="col-md-6">

                   <?php
                        if(isset($_GET["picSaved"])) {
                            echo '
                            <div class="alert alert-success">
                                <strong>Done!</strong> Profile Picture uploaded Successfully
                            </div>';
                        }

                        if(isset($_GET["changed"])) {
                            echo '
                            <div class="alert alert-success">
                                <strong>Done!</strong> Profile Picture updated Successfully
                            </div>';
                        }
                    ?>

                    <div class="col-md-10" style="margin-bottom: 20px; margin-top: 20px;">
                        <?php
                            if($display["hasPic"] == 0) {
                                // admin has NO picture, show default
                                echo '<img src="adminProfilePics/default.jpg" />';
                            } else {
                                // admin has picture
                                echo '<img src="adminProfilePics/'.$adminId.'.jpg" class="img-circle img-responsive" />';
                            }
                        ?>

                    </div>

                    <div class="row" style="padding-left: 70px;">
                        <?php
                            if($display["hasPic"] == 0) {
                                // admin has NO picture
                                echo '
                                <button class="btn btn-warning" data-toggle="modal" data-target="#myModal">Upload Profile Picture</button>';
                            } else {
                                // admin has picture
                                echo '
                                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Change Profile Picture</button>';
                            }
                        ?>

                    </div>

                </div>

            </div>
        </div>
        <br /><br />

    </section>

</main>

<input type="checkbox" id="mobile-bars-check" />
<label for="mobile-bars-check" id="mobile-bars">
    <div class="stix" id="stik1"></div>
    <div class="stix" id="stik2"></div>
    <div class="stix" id="stik3"></div>
</label>

<?php include('fragments/sidebar.php'); ?>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select Profile Picture</h4>
      </div>
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">First Name: </label>
                <input type="file" name="image" id="image" required class="form-control">
            </div>


            <input type="submit" class="btn btn-success" id="submit" name="uploadPicture" value="Submit">

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


</body>

</html>

<script  type="text/javascript" src="js/sidebar.js"></script>
<script type="text/javascript" src="js/newDashboard.js"></script>
