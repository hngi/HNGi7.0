<?php
    require 'classControllers/init.php';
    $internExperience = new InternExperience();
    if(isset($_POST['ok'])){
        $names = $database->escape_string($_POST["names"]);
        $stack = $database->escape_string($_POST["stack"]);
        $experience = $database->escape_string($_POST['experience']);

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){
            $folder = "./uploads/interns/";
            $ext = strtolower(end(explode(".",$_FILES['image']['name'])));
            $allowed = array('jpg','jpeg','png');
            if(in_array($ext,$allowed)){
                $image_name = uniqid().$_FILES['image']['name'];
                $destination = $folder."/".$image_name;
                $source = $_FILES['image']['tmp_name'];

                if(move_uploaded_file($source,$destination)){
                    $image = $image_name;
                }else{
                    $image = "";
                }
            }else{
                $image = "";
            }

        }else{
            $image = "";
        }

        $internExperience->saveExperience("$names","$stack","$image","$experience");

        $_SESSION['msg'] = "<div class='alert alert-success'>Your experience has been submitted successfully!</div>";
        header("location:intern-experience.php");
        exit();
    }

    $all_experiences = $internExperience->fetch_experiences();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="stylesheet" href="css/intern-experience.css">
    <title>Experience Page</title>
</head>

<body>
    <section class="container-fluid">
    <?php include('fragments/site_header.php');?>
    <div class="jumbotron" id="landing-page">
        <div class="">
            <h2>Experience Recap From Past Interns</h2>
            <p class="lead">Testimonies From Ex HNG Internship Finalists</p>
            <a href="#modal-id" data-toggle="modal" class="btn btn-primary">Submit Experience</a> <!--button to add experience-->
        </div>

    </div>

    <!--modal here-->
    <div class="modal fade" id="modal-id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Submit Your HNG Internship Experience</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Full name</label>
                            <input type="text" name="names" class="form-control" required placeholder="Full Name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="stack">Your Stack</label>
                            <input type="text" name="stack" class="form-control" required placeholder="Your Stack" id="stack">
                        </div>
                        <div class="form-group">
                            <label for="exp">Your Experience</label>
                            <textarea name="experience" class="form-control" required placeholder="Your Experience" id="exp" maxlength="300"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Your Picture(Optional)</label>
                            <br>
                            <input type="file" name="image" accept="image/*">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="ok" class="btn btn-success" value="Submit Experience">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <main>
        <section>
            <section class="mentors-section">
                <div class="container">
                    <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>
                </div>
                <div class="wrapper">
                    <?php
                        foreach ($all_experiences as $all_experience){
                            $image = $all_experience['image'];
                            $names = $all_experience['names'];

                            if($image == ""){
                                $img_src = "https://via.placeholder.com/150x150.png?text=$names";
                            }else{
                                $img_src = "uploads/interns/$image";
                            }
                            ?>
                            <div class="wrapper-child"  >
                                <img class="image" src="<?php echo $img_src;?>">
                                <h4><?php echo $all_experience['names'];?></h4>
                                <p><?php echo $all_experience['stack'];?></p>
                                <p>
                                    <?php echo nl2br($all_experience['experience']);?>
                                </p>
                            </div>
                            <?php
                        }
                    ?>

            </section>
        </section>
        <?php include('fragments/site_footer.php'); ?>

    </main>
    </section>
</body>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="js/intern-experience.js"></script>
</html>