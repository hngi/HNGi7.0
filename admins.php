<?php
require_once 'classControllers/init.php';
// include('backend/Admins.php');


if(!isset($_SESSION["role"])) {
    header('Location:admin_login');
}

$admin = new Admins();
$display = $admin->allAdmins();

if(isset($_GET["blockAdminId"])) {
    $id = $_GET["blockAdminId"];
    $blockAdminRes = $admin->blockAdmin($id);
    if($blockAdminRes == true) {
        header("Location:admins.php");
    }
}

if(isset($_GET["activateAdminId"])) {
    $id = $_GET["activateAdminId"];
    $activateAdminRes = $admin->activateAdmin($id);
    if($activateAdminRes == true) {
        header("Location:admins.php");
    }
}

if (isset($_GET['delete_id'])) {
    $admin_id = $_GET['delete_id'];

    $message = $admin->DeleteAdmin($admin_id);
}

if(isset($_GET["blockAdminId"])) {
    $id = $_GET["blockAdminId"];
    $blockAdminRes = $admin->blockAdmin($id);
    if($blockAdminRes == true) {
        header("Location:admins.php");
    }
}

if(isset($_GET["activateAdminId"])) {
    $id = $_GET["activateAdminId"];
    $activateAdminRes = $admin->activateAdmin($id);
    if($activateAdminRes == true) {
        header("Location:admins.php");
    }
}



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Admin Dashboard</title>

    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="css/dashboard.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

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
    <?php
    if ($_SESSION["role"] != 1) {
        echo '<h2><br><br><br>Sorry, You do not have the priviledge to view this page</p>';
        echo '<h3><a href="dashboard.php">Dashboard</a></h3>';
        exit();
    }
    ?>
    <section id="overview-section">
        <h1>Registered Admins</h1>
        <div class="register-container">
            <div class="row">

                <?php
                if ($display == "0") {
                    echo "<h2>There are no Registered Admins</h2>";
                } else {
                ?>
                <div class="col-md-2">
                    <a href="new_admin.php">
                        <button type="button" class="btn btn-primary btn-sm" id="export">&#43; New Admin</button>
                    </a>
                </div>
                <div class="col-md-8"></div>
                
            </div> <br /><br />
            <div class="row" id="table-row">
                <div class="table-responsive" id="printablediv">
                    <table class="prime-table table-hover mt-3 mb-1 table-condensed">
                        <thead class="table-primary">
                        <tr>
                            <th>S/N</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Registration Date</th>
                            <th colspan="3">Actions</th>
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

</body>

</html>
<script  type="text/javascript" src="js/sidebar.js"></script>