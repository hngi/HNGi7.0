<?php
require_once 'classControllers/init.php';
// include('backend/internreview.php');


if(!isset($_SESSION["role"])) {
    header('Location:admin_login');
}

if(!isset($_GET['id'])){
    header("location:dashboard.php");
    exit();
}

$id = $_GET['id'];

$admin = new InternExperience();

if(isset($_POST['ok'])){
    $names = $database->escape_string($_POST["names"]);
    $stack = $database->escape_string($_POST["stack"]);
    $experience = $database->escape_string($_POST['experience']);

    $admin->updateExperience("$id","$names","$stack","$experience");

    $_SESSION['msg'] = "<div class='alert alert-success'>Experience updated successfully!</div>";
    header("location:internreview.php");
    exit();
}

$the_experience = $admin->fetchSingleExperience($id);


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard</title>

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
    <?php
    if ($_SESSION["role"] != 1) {
        echo '<h2><br><br><br>Sorry, You do not have the priviledge to view this page</p>';
        echo '<h3><a href="dashboard.php">Dashboard</a></h3>';
        exit();
    }
    ?>
    <section id="overview-section">
        <h1>EDIT EXPERIENCES</h1>
        <div class="register-container">
            <div class="row">

                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }

                ?>

                <div class="col-md-8"></div>

            </div>
            <br /><br />
            <div class="row" id="table-row">
                <div class="col-md-8">
                    <form action="" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Full name</label>
                            <input type="text" name="names" value="<?php echo $the_experience['names'];?>" class="form-control" required placeholder="Full Name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="stack">Stack</label>

                            <select class="interest form-control" name="stack" id="stack" required multiple>
                              <option value="" disabled selected hidden>Your Stack</option>
                              <option value="Backend">Backend</option>
                              <option value="DevOps">DevOps</option>
                              <option value="Digital Marketing">Digital Marketing</option>
                              <option value="Frontend">Frontend</option>
                              <option value="Machine Learning">Machine Learning</option>
                              <option value="Mobile Development">Mobile Development</option>
                              <option value="UI/UX Design">UI/UX Design</option>
                            </select>
                        </div>



                        <div class="form-group">
                            <label for="exp">Your Experience</label>
                            <textarea name="experience" class="form-control" required placeholder="Your Experience" id="exp" maxlength="300"><?php echo $the_experience['experience'];?></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="ok" class="btn btn-success" value="Update Experience">
                        </div>
                    </form>
                </div>

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
