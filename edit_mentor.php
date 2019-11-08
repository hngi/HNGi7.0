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

//$the_intern = $intern->view($id);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Edit Mentor</title>

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
        <h1>Edit Mentor</h1>
        <div class="register-container">
            <div class="row">

                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }

                ?>

                <div class="col-md-8">
                    <form action="" method="post" role="form">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="container mt-5">

                                <div class="form-group">
                                    <label for="">Area of Interest</label>
                                    <div class="row">

                                    </div>
                                </div>

                                <div class="row d-flex mt-5 mb-5" id="form-contner">
                                    <div class="col-lg-8 m-auto">
                                        <div class="second">
                                            <center>
                                                <div class="image-upload">
                                                    <label for="file-input">
                                                        <div class="circle"><i class="fas fa-camera"></i></div>
                                                    </label>
                                                    <input id="file-input" type="file"/ name="image">
                                                </div>
                                                <div class="click text-center">Click the image above to upload a profile photo</div>
                                                <div class="jpg">JPG or PNG. Max size of 400k</div>
                                            </center>

                                            <div class="col-sm-12">
                                                <label for="validationCustom01"></label>
                                                <input name="name" type="text" class="form-control mt-2" id="validationCustom01" placeholder="Name" required value="<?php if (isset($_POST['name'])) {
                                                    echo $_POST['name'];
                                                } ?>"></div>
                                            <div class="invalid-feedback">
                                                Please Enter Your Name
                                            </div>
                                            <div class="col-sm-12">
                                                <input name="email" type="email" class="form-control mt-2" id="validationCustom02" placeholder="Email" required value="<?php if (isset($_POST['email'])) {
                                                    echo $_POST['email'];
                                                } ?>"></div>
                                            <div class="col-sm-12">
                                                <input name="phone" type="tel" class="form-control mt-2" id="validationCustom03" placeholder="Phone number" required value="<?php if (isset($_POST['phone'])) {
                                                    echo $_POST['phone'];
                                                } ?>"></div>
                                            <div class="col-sm-12">
                                                <input name="linkedin_link" type="url" class="form-control mt-2" id="validationCustom06" placeholder="Link to your Linkedin profile(optional)"  value="<?php if (isset($_POST['linkedin_link'])) {
                                                    echo $_POST['linkedin_link'];
                                                } ?>"></div>
                                            <div class="col-sm-12">
                                                <input name="github_link" type="url" class="form-control mt-2" id="validationCustom05" placeholder="Github link" value="<?php if (isset($_POST['github_link'])) {
                                                    echo $_POST['github_link'];
                                                } ?>">
                                            </div>

                                            <div class="col-sm-12">
                                                <input name="dribble_link" type="text" class="form-control mt-2" id="validationCustom04" placeholder="Dribble link"  value="<?php if (isset($_POST['dribble_link'])) {
                                                    echo $_POST['dribble_link'];
                                                } ?>"></div>


                                            <div class="col-sm-12">
                                                <input name="cv_link" type="url" class="form-control mt-2" id="validationCustom07" placeholder="Link to your CV" required value="<?php if (isset($_POST['cv_link'])) {
                                                    echo $_POST['cv_link'];
                                                } ?>"></div>
                                            <!-- new inserted inputs-->
                                            <div class="col-sm-12">
                                                <input name="fb_url" type="url" class="form-control mt-2" id="validationCustom07" placeholder="Link to your Facebook account" required value="<?php if (isset($_POST['fb_url'])) {
                                                    echo $_POST['fb_url'];
                                                } ?>"></div>
                                            <div class="col-sm-12">
                                                <input name="twitter_url" type="url" class="form-control mt-2" id="validationCustom07" placeholder="Link to your Twitter account" required value="<?php if (isset($_POST['twitter_url'])) {
                                                    echo $_POST['twitter_url'];
                                                } ?>"></div>
                                            <!-- new inserted inputs-->

                                            <div class="col-sm-12">
                                                <input name="interest" type="text" class="form-control mt-2" id="validationCustom08" placeholder="Why are you interested in mentoring with HNG?" required value="<?php if (isset($_POST['interest'])) {
                                                    echo $_POST['interest'];
                                                } ?>" maxlength="50"></div>
                                            <div class="col-sm-12">
                                                <select class="form-control mt-2" name="state" id="validationCustom09" placeholder="What state are you currently in?" required>
                                                    <?php

                                                    if (isset($_POST['state'])) {
                                                        echo "<option>" . $_POST['state'] . "</option>";
                                                    }

                                                    ?>
                                                    <option value="state">What state are you currently in? </option>
                                                    <option value="FCT">Federal Capital Territory</option>
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

                                            <div class="col-sm-12">
                                                <select name="employment_status" type="text" class="form-control mt-2" id="validationCustom10" placeholder="What is your current employment status?" required value="<?php if (isset($_POST['employment_status'])) {
                                                    echo $_POST['employment_status'];
                                                } ?>" maxlength="15">
                                                    <option value="Employee">Employed</option>
                                                    <option value="Self-employed">Self-employed</option>
                                                    <option value="Freelance">Freelance</option>
                                                    <option value="Unemployed">Unemployed</option>
                                                </select></div>
                                            <center><button class="btn btn-primary mt-3" type="submit">Submit</button></center>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </form>
                </div>

            </div>
            <br /><br />
            <div class="row" id="table-row">
                <div class="col-md-8">

                </div>

            </div>
        </div>
        <br /><br />
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

<script  type="text/javascript" src="js/sidebar.js"></script>
