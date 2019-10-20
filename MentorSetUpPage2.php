<?php
require_once "config/database.php";
require_once 'classControllers/mentor.php';

$error = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST['name'])) {
    $error['name'] = "Name is required";
  }
  if (empty($_POST['area_of_expertise'])) {
    $error['area_of_expertise'] = "You need to pick at least one area of expertise";
  }
  if (!isset($_FILES['image'])) {
    $error['image'] = "Profile Photo is required";
  }
  if (empty($_POST['email'])) {
    $error['email'] = "Email is required";
  }
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $error['email'] = "Invalid email";
  }
  if (empty($_POST['phone'])) {
    $error['phone'] = "Phone Number is required";
  }
  if (empty($_POST['job'])) {
    $error['job'] = "Input field is required";
  }
  if (empty($_POST['portfolio_link'])) {
    $error['portfolio_link'] = "Input field is required";
  }
  if (empty($_POST['cv_link'])) {
    $error['cv_link'] = "Input field is required";
  }
  if (!filter_var($_POST['cv_link'], FILTER_VALIDATE_URL)) {
    $error['cv_link'] = "Invalid Url";
  }
  if (!filter_var($_POST['portfolio_link'], FILTER_VALIDATE_URL)) {
    $error['portfolio_link'] = "Invalid Url";
  }
  if (empty($_POST['state'])) {
    $error['state'] = "Your current state is required";
  }
  if (empty($_POST['interest'])) {
    $error['interest'] = "Input field is required";
  }
  if (empty($_POST['employment_status'])) {
    $error['employment_status'] = "Input field is required";
  }
  if (empty($error)) {
    $area_of_expertise = "";

    foreach ($_POST['area_of_expertise'] as $value) {
      $area_of_expertise .= $value . " ";
    }


    $file = $_FILES['image'];
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];

    // get extension
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    // define allowed extensions
    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
      // check for error
      if ($fileError === 0) {
        // 400kb limit
        if ($fileSize < 400000) {
          // rename image file
          $fileNameNew = uniqid('', true) . "." . $fileActualExt;
          $fileDestination = 'uploads/' . $fileNameNew;
          if (move_uploaded_file($fileTmpName, $fileDestination)) {

            $mentor->area_of_expertise = $database->escape_string($area_of_expertise);
            $mentor->photo_url = $fileDestination;
            $mentor->name = $database->escape_string($_POST['name']);
            $mentor->email = $database->escape_string($_POST['email']);
            $mentor->phone_no = $database->escape_string($_POST['phone']);
            $mentor->link_to_portfolio = $database->escape_string($_POST['portfolio_link']);
            $mentor->link_to_linkedin = $database->escape_string($_POST['linkedin_link']);
            $mentor->link_to_cv = $database->escape_string($_POST['cv_link']);
            $mentor->why_interested = $database->escape_string($_POST['interest']);
            $mentor->current_state = $database->escape_string($_POST['state']);
            $mentor->employment_status = $database->escape_string($_POST['employment_status']);
            $mentor->timestamp = strftime("%Y-%m-%d %H:%M:%S", time());

            if ($mentor->Apply_mentor()) {
              header("location:MentorSetUpPage2.php?message=Application Successful");
            }
          } else {
            $error['image'] = "image failed to upload";
          }
        } else {

          $error['image'] = "Your image is too big!, MAX 400kb";
        }
      } else {

        $error['image'] = "There was an error uploading your picture";
      }
    } else {

      $error['image'] = "Image format not allowed!";
    }
  }
}
?>
<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mentor Setup Page | 2</title>
  <meta name="description" content="mentors">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Ubuntu|Pacifico&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/header-footer.css">
  <link href="css/mentorSetuppage.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <!-- <link rel="stylesheet" href="css/mentorSetuppage.css"> -->
  <link rel="icon" type="img/png" href="images/hng-favicon.png">
</head>

<body>
  <div class="hero">
    <!--Header-->
    <!--header>
            <div class="container">
                <nav class="navbar navbar-expand-lg" aria-label="Main navigation">
                    <a class="navbar-brand text-center mt-2" href="index.html">
                        <img src="https://res.cloudinary.com/kuic/image/upload/v1570690973/HNG/brand-logo_nbp2ci.png" alt="HNG Internship" class="logo">
                    </a>
                    <button class="navbar-toggler mt-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars fa-lg"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav list-unstyled text-uppercase pt-3 pt-lg-0 ml-auto text-center">
                            <li class="nav-item  text-center mr-3">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="hng6.html" style="text-transform:uppercase;">HNG6</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="mentorpage.html">Mentors</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="contactform.html">Contact</a>
                            </li>
                            <li class="nav-item join mr-3">
                                <a class="nav-link"href="join-intern.html"><button class="btn btn-primary text-center" type="submit">Join HNG</button></a>
                            </li>
                        </ul>
                    </div>
                </nav> 
            </div> 
        </header-->

    <?php include('fragments/site_header.php'); ?>

    <!--Welcome Section-->
    <div class="text-center mt-3 p-2 welcome">
      <div class="text-center">
        <h1 class="text-center mentor">Mentor Account Set Up</h1>
        <p class="text-center">Thanks for your interest in becoming a HNG mentor.<br> Kindly fill out this form.</p>
      </div>
      <?php
      if (isset($_GET['message'])) {
        echo  "<div class='alert alert-success'>" . $_GET['message'] . "</div>";
      }

      ?>
      <!--<a href="#form"><i class="fas fa-arrow-circle-down mt-5"></i></a>-->
    </div>
  </div>
  <!--Form1-->
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
    <div class="container form mt-3">
      <div class="container-fluid">
        <div class="row expertise">
          <p class=" col-12 text-center area p-2">Choose an area of expertise</p>
          <div class="col-sm-4"></div>
          <div id="wrap" class="text-justify col-sm-4 mb-3 mt-2"> <?php
                                                                  if (!empty($error)) {

                                                                    foreach ($error as $details) {
                                                                      echo  "<div class='alert alert-danger'><center>" . $details . "<br></center></div>";
                                                                    }
                                                                  }

                                                                  ?>
            <div>
              <input id="check1" type="checkbox" name="area_of_expertise[]" class="checkbox mr-1" value="Frontend"><label class="accordion-label" for="check1">Frontend Development</label>
              <div class="accordion-content">
                <p><span>Preferred Skills: </span> HTML, CSS, JavaScript, Bootstrap, JQuery</p>
              </div>
            </div>
            <div>
              <input id="check2" name="area_of_expertise[]" type="checkbox" class="checkbox mr-1" value="Backend"><label class="accordion-label" for="check2">Backend Development</label>
              <div class="accordion-content">
                <p><span>Preferred Skills: </span>PHP/Laravel, NodeJS, SQL, MongoDB</p>
              </div>
            </div>
            <div>
              <input id="check3" name="area_of_expertise[]" type="checkbox" class="checkbox mr-1" value="Machine-leraning"><label class="accordion-label" for="check3">Machine Learning</label>
              <div class="accordion-content">
                <p><span>Preferred Skills: </span>Python, TensorFlow</p>
              </div>
            </div>
            <div>
              <input id="check4" name="area_of_expertise[]" type="checkbox" class="checkbox mr-1" value="UI/UX-Design"><label class="accordion-label" for="check4">UI/UX Design</label>
              <div class="accordion-content">
                <p><span>Preferred Skills: </span>Creative, Attention to detail, Figma</p>
              </div>
            </div>
            <div>
              <input id="check5" name="area_of_expertise[]" type="checkbox" class="checkbox mr-1" value="Mobile-Development"><label class="accordion-label" for="check5">Mobile Development</label>
              <div class="accordion-content">
                <p><span>Preferred Skills: </span>Android, Java, Kotlin, Flutter</p>
              </div>
            </div>
            <div>
              <input id="check6" name="area_of_expertise[]" type="checkbox" class="checkbox mr-1" value="Digital-marketing"><label class="accordion-label" for="check6">Digital Marketing</label>
              <div class="accordion-content">
                <p><span>Preferred Skills: </span> Adwords, SEO, Content writing, E-mail and Facebook Marketing </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4"></div>
        </div>
      </div>

      <!--Form2-->
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
              <input name="job" type="text" class="form-control mt-2" id="validationCustom04" placeholder="What do you do" required value="<?php if (isset($_POST['job'])) {
                                                                                                                                              echo $_POST['job'];
                                                                                                                                            } ?>"></div>
            <div class="col-sm-12">
              <input name="portfolio_link" type="url" class="form-control mt-2" id="validationCustom05" placeholder="Link to you portfolio" required value="<?php if (isset($_POST['portfolio_link'])) {
                                                                                                                                                              echo $_POST['portfolio_link'];
                                                                                                                                                            } ?>"></div>
            <div class="col-sm-12">
              <input name="linkedin_link" type="url" class="form-control mt-2" id="validationCustom06" placeholder="Link to your Linkedin profile" required value="<?php if (isset($_POST['linkedin_link'])) {
                                                                                                                                                                      echo $_POST['linkedin_link'];
                                                                                                                                                                    } ?>"></div>
            <div class="col-sm-12">
              <input name="cv_link" type="url" class="form-control mt-2" id="validationCustom07" placeholder="Link to your cv" required value="<?php if (isset($_POST['cv_link'])) {
                                                                                                                                                  echo $_POST['cv_link'];
                                                                                                                                                } ?>"></div>
            <div class="col-sm-12">
              <input name="interest" type="text" class="form-control mt-2" id="validationCustom08" placeholder="Why are you interested in mentoring with HNG?" required value="<?php if (isset($_POST['interest'])) {
                                                                                                                                                                                  echo $_POST['interest'];
                                                                                                                                                                                } ?>"></div>
            <div class="col-sm-12">
              <input name="state" type="text" class="form-control mt-2" id="validationCustom09" placeholder="What state are you currently in?" required value="<?php if (isset($_POST['state'])) {
                                                                                                                                                                  echo $_POST['state'];
                                                                                                                                                                } ?>"></div>
            <div class="col-sm-12">
              <input name="employment_status" type="text" class="form-control mt-2" id="validationCustom10" placeholder="What is your current employment status?" required value="<?php if (isset($_POST['employment_status'])) {
                                                                                                                                                                                    echo $_POST['email'];
                                                                                                                                                                                  } ?>"></div>
            <center><button class="btn btn-primary mt-3" type="submit">Submit</button></center>

          </div>
        </div>
      </div>
    </div>
  </form>


  <!--FooterSection-->

  <!-- Footer -->
  <?php include('fragments/site_footer.php'); ?>




  <script src="https://kit.fontawesome.com/85682eb992.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/mentorSetupPage.js"></script>
</body>

</html>