<?php
require_once 'classControllers/init.php';
// include('backend/internreview.php');


if(!isset($_SESSION["role"])) {
    header('Location:login,php');
}

if(!isset($_GET['id'])){
    header("location:dashboard.php");
    exit();
}

$id = $_GET['id'];

$intern = new Intern();



if(isset($_POST['ok'])){
    $data['name'] = $database->escape_string($_POST["name"]);
    $data['about'] = $database->escape_string($_POST['about']);
    $data['phone_no'] = $database->escape_string($_POST['phone_no']);
    $data['link_to_cv'] = $database->escape_string($_POST['link_to_cv']);
    $data['interest'] = $database->escape_string($_POST['interest']);
    $data['employment_status'] = $database->escape_string($_POST['employment_status']);
    $data['current_location'] = $database->escape_string($_POST['current_location']);

    $intern->updateInterns($id, $data);

    $_SESSION['msg'] = "<div class='alert alert-success'>Intern updated successfully!</div>";
    header("location:edit_interns.php?id=$id");
    exit();
}

$the_intern = $intern->view($id);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Edit Intern</title>

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
        <h1>Edit Intern</h1>
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
                            <input type="text" name="name" value="<?php echo $the_intern['name'];?>" class="form-control" required placeholder="Full Name" id="name">
                        </div>

                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input class="form-control" value="<?php echo $the_intern['phone_no'];?>" type="text" name="phone_no" id="phoneNo" required placeholder="Phone Number" />
                        </div>
                        <div class="form-group">
                            <label for="linkCV">Link to CV</label>
                            <input type="url" name="link_to_cv" id="linkCV" required placeholder="Link to your CV (LinkedIn Profile or any other link)" class="form-control" value="<?php echo $the_intern['link_to_cv'];?>" />
                        </div>

                        <div class="form-group">
                            <label for="interest">Area of Interest</label>
                            <select multiple class="interest form-control" name="interest[]">
                                <option><?php echo $the_intern['interest'];?></option>
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
                            <label for="location">Current Location</label>
                            <select class="form-control" name="current_location" id="location" required>
                                <option><?php echo $the_intern['current_location'];?></option>
                            <option>Federal Capital Territory</option>
                            <option value="Abia">Abia</option>
                            <option value="Adamawa">Adamawa</option>
                            <option value="Akwa Ibom">Akwa Ibom</option>
                            <option value="Anambra">Anambra</option>
                            <option value="Bauchi">Bauchi</option>
                            <option value="Bayelsa">Bayelsa</option>
                            <option value="Benue">Benue</option>
                            <option value="Borno">Borno</option>
                            <option value="Cross River">Cross River</option>
                            <option value="Delta">Delta</option>
                            <option value="Ebonyi">Ebonyi</option>
                            <option value="Edo">Edo</option>
                            <option value="Ekiti">Ekiti</option>
                            <option value="Enugu">Enugu</option>
                            <option value="Gombe">Gombe</option>
                            <option value="Imo">Imo</option>
                            <option value="Jigawa">Jigawa</option>
                            <option value="Kaduna">Kaduna</option>
                            <option value="Kano">Kano</option>
                            <option value="Katsina">Katsina</option>
                            <option value="Kebbi">Kebbi</option>
                            <option value="Kogi">Kogi</option>
                            <option value="Kwara">Kwara</option>
                            <option value="Lagos">Lagos</option>
                            <option value="Nasarawa">Nasarawa</option>
                            <option value="Niger">Niger</option>
                            <option value="Ogun">Ogun</option>
                            <option value="Ondo">Ondo</option>
                            <option value="Osun">Osun</option>
                            <option value="Oyo">Oyo</option>
                            <option value="Borno">Borno</option>
                            <option value="Plateau">Plateau</option>
                            <option value="Rivers">Rivers</option>
                            <option value="Sokoto">Sokoto</option>
                            <option value="Taraba">Taraba</option>
                            <option value="Yobe">Yobe</option>
                            <option value="Zamfara">Zamfara</option>
                        </select>
                        </div>

                        <div class="form-group">
                            <label for="empStatus">Employment Status</label>
                            <select name="employment_status" id="empStatus" class="empStatus form-control" required>
                                <option><?php echo $the_intern['employment_status'];?></option>

                                <option value="Recently Employed (3 months or less)">Recently Employed (3 months or less)</option>
                                <option value="Employee">Employee</option>
                                <option value="Self-employed">Self-employed</option>
                                <option value="Freelance">Freelance</option>
                                <option value="Unemployed">Unemployed</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="about">About</label>
                        <textarea name="about" id="about" required cols="30" rows="10" placeholder="Briefly tell us about yourself" class="form-control"><?php echo $the_intern['about'];?></textarea>
                        </div>


                        <div class="form-group">
                            <input type="submit" name="ok" class="btn btn-success" value="Update Intern">
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
