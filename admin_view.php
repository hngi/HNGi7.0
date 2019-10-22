<?php
   require_once "classControllers/init.php";
    $admin = new Admins();

    if(!isset($_SESSION["role"])) {
        header('Location:admin_login.php'); 
    }

    if(isset($_POST["submit"])) {
        $firstname = $database->escape_string($_POST["firstname"]);
        $lastname = $database->escape_string($_POST["lastname"]);
        $email = $database->escape_string($_POST["email"]);
        $role = $database->escape_string($_POST["role"]);
        $password = rand(123456, 789654);
        //$password = sha1($password);
        $resp = $admin->newAdmin($firstname, $lastname, $email, $role,$password);
        if ($resp) {

            $subject = 'WElCOME TO HNG INTERNSHIP';
            $body = $firstname . ' ' . $lastname . ' you have been registered as an admin on HNG INTERSHIP site, kindly find the attachment of your registration detail and login with it. You are advise to change your password after you logedd in. Thank you';
            sendNewAdminMail($email, $password, $subject, $body);
        }

    }

    if(isset($_GET["editAdminId"])) {
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
    <title>View Admin</title>
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
            <br><br>
            <h2>Admin Details </h2>
            <!-- <section id="intern-section">
                Populated by `js/dashboard.js` 
            </section> -->

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="row">
                            <div class="col-md-3">
                                <h4>Fullname</h4>
                            </div>
                            <div class="col-md-6">
                                <h4><?php echo $res["firstname"] . ' ' . $res["lastname"]; ?></h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <h4>Email</h4>
                            </div>
                            <div class="col-md-6">
                                <h4><?php echo $res["email"]; ?></h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <h4>Role</h4>
                            </div>
                            <div class="col-md-6">
                                <h4><?php if($res["role"]==1) { echo "Super Admin"; } else { echo "Admin"; } ?></h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                &nbsp;
                            </div>
                            <div class="col-md-6">
                                <a href="admins.php"><button class="btn btn-primary">All Admins</button></a>
                               <!--  <a href="deleteAdmin.php?deleteAdminId=<?php echo $id; ?>"><button class="btn btn-danger">Delete</button></a> -->
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