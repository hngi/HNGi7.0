<?php
   require_once "classControllers/init.php";
    $sponsors = new sponsor;

    if(!isset($_SESSION["role"])) {
        header('Location:admin_login.php'); 
    }

    if(isset($_GET["deletesponsorId"])) {
        $id = $_GET["deletesponsorId"];
        $res = $sponsors->getsponsor($id);
    }

    if(isset($_GET["yesDeleteId"])) {
        $id = $_GET["yesDeleteId"];
        $deleteRes = $sponsors->deletesponsor($id);
        if($deleteRes == true) {
            header("Location:registered_sponsors.php");
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
    <title>Delete sponsor</title>
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
            <?php 
                if($_SESSION["role"] != 1) {
                    echo '<h2><br><br><br>Sorry, You do not have the priviledge to view this page</p>';
                    echo '<h3><a href="dashboard.php">Dashboard</a></h3>';
                    exit();
                }
            ?>
            <!-- <h1>Dashboard</h1> -->
            <br><br><br>
            <h2> Confirm Delete sponsor </h2>
            <!-- <section id="sponsor-section">
                Populated by `js/dashboard.js` 
            </section> -->

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div>
                            <div class="col-md-12">
                                <h4>Are you sure you want to delete sponsor with the following details?</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <h4>Name</h4>
                            </div>
                            <div class="col-md-6">
                                <h4><?php echo $res["name"]; ?></h4>
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
                                <h4>Phone</h4>
                            </div>
                            <div class="col-md-6">
                                <h4><?php echo $res["phone"]; ?></h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                &nbsp;
                            </div>
                            <div class="col-md-6">
                                <a href="registered_sponsors.php"><button class="btn btn-primary">No, Cancel</button></a>
                                <a href="delete_sponsor.php?yesDeleteId=<?php echo $id; ?>"><button class="btn btn-danger">Yes, Delete</button></a>
                            </div>
                        </div>

                    </div> 
                </div>
            </div>

            <!-- <button id="export">Export to Spreadsheet</button> -->
        
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

<script type="text/javascript" src="js/dashboard.js"></script>