<?php
require_once 'classControllers/init.php';
// include('backend/Admins.php');


if(!isset($_SESSION["role"])) {
    header('Location:admin_login');
}

$adminId = $_SESSION["admin_id"];
$admin = new Admins();
$display = $admin->getAdmin($adminId);

if(isset($_POST["update"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];

    $updateResult = $admin->updateProfile($firstname, $lastname, $email, $adminId);
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

</body>

</html>