<?php
    require 'classControllers/init.php';
    $internExperience = new InternExperience();
    if(isset($_POST['ok'])){


      $file = $_FILES['image'];
      $fileName = $file['name'];
      $fileTmpName = $file['tmp_name'];
      $fileSize = $file['size'];
      $fileError = $file['error'];
      $fileType = $file['type'];

        $fileExtension = explode('.', $fileName);
        $fileActualExtension = strtolower(end($fileExtension));

        $allowed = array('jpg', 'jpeg', 'png');

        if(in_array($fileActualExtension, $allowed)){

        $fileNewName = uniqid('', true).".".$fileActualExtension;


        $fileDestination = 'uploads/interns/'.$fileNewName;
        move_uploaded_file($fileTmpName, $fileDestination);



        // $internExperience->uploadImage($fileDestination);
        $names = $database->escape_string($_POST["names"]);
        $stack = $database->escape_string($_POST["stack"]);
        $experience = $database->escape_string($_POST['experience']);

      }

          $fileDe = 'uploads/interns/'.$fileNewName;
          move_uploaded_file($fileTmpName, $fileDe);
        $internExperience->saveExperience($names,$stack,$fileDe,$experience);

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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="stylesheet" href="css/intern-experience.css">
    <title>Intern Experience</title>


    <style>
        h2.heading {
          color: #084482;
          font-weight: bolder;
          padding: 0 4px;
        }
        p.para {
          width: 100%;
          text-align: center;
          margin-bottom: 100px !important;
          padding: 0 4px;
        }
  </style>
</head>

<body>

<section class="navigation">
   <?php include('fragments/site_header.php'); ?>
  </section>


    <section class="jumbo">
            <h2 class="heading">Past Interns Experience</h2>
            <p class="para">Testimonies From Ex-HNG Internship Finalists<br>
            <a href="#" onclick="modalForm()" class="experiencetext">Submit Experience</a>
            </p>
   </section>

    <div class="submitExperience" id="submitExperience">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Submit Your HNG Internship Experience</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="closeForm()">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Full name</label>
                            <input type="text" name="names" class="form-control" required placeholder="Full Name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="stack">Your Stack</label>
                            
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
                            <textarea name="experience" class="form-control" required placeholder="Your Experience" id="exp" maxlength="300"></textarea>
                        </div>


                          <div class="form-group">
                              <label for="image">Your Picture </label>
                              <br>
                              <input type="file" name="image" required />
                          </div>


                        <div class="form-group">
                            <input type="submit" name="ok" class="btn btn-success modal-button" value="Submit Experience">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeForm()">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <section class="container-fluid px-2">
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
                                $img_src = "$image";
                            }
                            ?>
                            <div class="wrapper-child col-sm-12"  >
                                <img class="image" src="<?= $img_src;?>" alt = "intern img">
                                <h4 class="name"><?= $all_experience['names'];?></h4>
                                <p class="stack"><?= $all_experience['stack'];?></p> <hr>
                                <p class="experience">
                                    <?= nl2br($all_experience['experience']);?>
                                </p>
                            </div>
                            <?php
                        }
                    ?>

            </section>
        </section>

    </main>
    </section><br>
    <?php include('fragments/site_footer.php'); ?>

</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/countdown.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" crossorigin="anonymous"></script>

    <script>
        let formBox = $(".submitExperience");
            function modalForm (){
                formBox.slideToggle(100);
            }

            function closeForm (){
                formBox.css("display", "none")
            }
    </script>
</html>
