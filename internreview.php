<?php
require_once 'classControllers/init.php';
// include('backend/internreview.php');


if(!isset($_SESSION["role"])) {
    header('Location:login.php');
}

$admin = new InternExperience();

if(isset($_GET['action']) && isset($_GET['id'])){
    $act = $_GET['action'];

    switch ($act){
        case 'approve':
            $admin->approveExperience($_GET['id']);
            break;
        case 'delete':
            $admin->deleteExperience($_GET['id']);
            break;
    }

    $_SESSION['msg'] = "<div class='alert alert-success'>Action performed successfully</div>";
    header("location:internreview.php");
    exit();
}


$display = $admin->load_experiences();

/*
if(isset($_GET["editExperiences"])) {
    $id = $_GET["editExperiences"];
    $editExperiencesRes = $InternExperience->editExperiences($id);
    if($editExperiencesRes == true) {
        header("Location:internreview");
    }
}

if(isset($_GET["ApproveExperiences"])) {
    $id = $_GET["ApproveExperiences"];
    $ApproveExperiencesRes = $InternExperience->ApproveExperiences($id);
    if($ApproveExperiencesRes == true) {
        header("Location:internreview");
    }
}

if (isset($_GET['delete_Experiences'])) {
    $admin_id = $_GET['ApproveExperiences'];

    $message = $InternExperience->ApproveExperiences($admin_id);
}

if(isset($_GET["editExperiences"])) {
    $id = $_GET["editExperiences"];
    $editExperiencesRes = $InternExperience->editExperiences($id);
    if($editExperiencesRes == true) {
        header("Location:internreview");
    }
}

if(isset($_GET["ApproveExperiences"])) {
    $id = $_GET["ApproveExperiences"];
    $ApproveExperiences= $InternExperience->ApproveExperiences($id);
    if($ApproveExperiencesRes == true) {
        header("Location:internreview");
    }
}
*/


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Intern Reviews</title>

    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="css/dashboard.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

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
        <h1>INTERN REVIEWS</h1>
        <div class="register-container">
            <div class="row">

                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                if (count($display) == "0") {
                    echo "<h2>There are no Intern Reviews</h2>";
                } else {
                ?>

                <div class="col-md-8"></div>

            </div>
            <br /><br />
            <div class="row" id="table-row">
                <div class="table-responsive" id="printablediv">
                    <table class="table table-hover mt-3 mb-1 table-condensed">
                        <thead class="table-primary">
                        <tr>
                            <th>S/N</th>
                            <th>Names</th>
                            <th>Track</th>
                            <th>Experience</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        //echo $display;
                            //var_dump($display);
                            $n = 0;
                            foreach ($display as $item){
                                ?>
                                <tr>
                                    <td><?php echo ++$n;?></td>
                                    <td>
                                        <?php echo $item['names']; ?>
                                    </td>
                                    <td>
                                        <?php echo $item['stack']; ?>
                                    </td>

                                    <td>
                                        <?php echo $item['experience']; ?>
                                    </td>

                                    <td>
                                        <?php echo $item['status'] == 1 ? "Approved" : "Pending"; ?>
                                    </td>
                                    <td>
                                        <a href="edit_experience.php?id=<?php echo $item['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                                        <a href="?action=delete&id=<?php echo $item['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete the record?')">Delete</a>
                                        <?php
                                            if($item['status'] == 0){
                                                ?>
                                                <a onclick="return confirm('Are you sure you want to approve the experience?')" href="?action=approve&id=<?php echo $item['id']; ?>" class="btn btn-sm btn-info">Approve</a>
                                                <?php
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
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