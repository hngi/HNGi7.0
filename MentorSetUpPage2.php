<?php
require_once "config/database.php";
require_once 'classControllers/init.php';

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
 Mentors::emailExists($_POST['email']) ? $error['email'] = "Email has been used to register before" : false;
 if (empty($error)) {
    $area_of_expertise = "";
    $count = count($_POST['area_of_expertise']);
    foreach ($_POST['area_of_expertise'] as $value) {
    $area_of_expertise .= $value ." | ";
    }
    // for ($i = 0; $i < $count; $i++) {
    //     $area_of_expertise .= $_POST['area_of_expertise'][$i] . " | ";
    // }
    $area_of_expertise = substr($area_of_expertise, 0, -3);
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
       mailMentor($mentor->email, $mentor->name);
       header("location:MentorSetUpPage2.php?message=Application Successful");
       //echo "<script>alert('Image uploaded successfully!')</script>";
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
 <title>Mentor Setup</title>
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

  <section class="navigation">
   <?php include('fragments/site_header.php'); ?>
  </section>
  <!--Welcome Section-->
  <div class="text-center mt-3 p-2 welcome">
   <div class="text-center">
    <h1 class="text-center mentor">Mentor Account Set Up</h1>
    <p class="text-center gratitude">Thanks for your interest in becoming a HNG mentor.<br> Kindly fill out this form.</p>
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
  <div class="container mt-5">
   <div class="container-fluid">
    <div class="row">
     <p class=" col-12 text-center area mb-5">Choose an area of expertise</p>
     <div id="wrap" class="text-justify  mb-3 wrap mx-auto">
      <?php
      if (!empty($error)) {

       foreach ($error as $details) {
        echo  "<div class='alert alert-danger'><center>" . $details . "<br></center></div>";
       }
      }

      ?>
      <div class="custom-control custom-checkbox mb-1">
       <input id="check1" type="checkbox" name="area_of_expertise[]" class="checkbox mr-1 custom-control-input" value="Frontend">
       <label class="accordion-label custom-control-label" for="check1">Frontend Development</label>
       <i class="fa fa-angle-down fa-icon" aria-hidden="true"></i>
       <div class="accordion-content">
        <p><span>Preferred Skills: </span> HTML, CSS, JavaScript, Bootstrap, JQuery</p>
       </div>
      </div>
      <div class="custom-control custom-checkbox mb-1">
       <input id="check2" name="area_of_expertise[]" type="checkbox" class="checkbox mr-1 custom-control-input" value="Backend">
       <label class="accordion-label custom-control-label" for="check2">Backend Development</label>
       <i class="fa fa-angle-down fa-icon" aria-hidden="true"></i>
       <div class="accordion-content">
        <p><span>Preferred Skills: </span>PHP/Laravel, NodeJS, SQL, MongoDB</p>
       </div>
      </div>
      <div class="custom-control custom-checkbox mb-1">
       <input id="check3" name="area_of_expertise[]" type="checkbox" class="checkbox mr-1 custom-control-input" value="Machine-learning">
       <label class="accordion-label custom-control-label" for="check3">Machine Learning</label>
       <i class="fa fa-angle-down fa-icon" aria-hidden="true"></i>
       <div class="accordion-content">
        <p><span>Preferred Skills: </span>Python, TensorFlow</p>
       </div>
      </div>
      <div class="custom-control custom-checkbox mb-1">
       <input id="check4" name="area_of_expertise[]" type="checkbox" class="checkbox mr-1 custom-control-input" value="UI/UX-Design">
       <label class="accordion-label custom-control-label" for="check4">UI/UX Design</label>
       <i class="fa fa-angle-down fa-icon" aria-hidden="true"></i>
       <div class="accordion-content">
        <p><span>Preferred Skills: </span>Creative, Attention to detail, Figma</p>
       </div>
      </div>
      <div class="custom-control custom-checkbox mb-1">
       <input id="check5" name="area_of_expertise[]" type="checkbox" class="checkbox mr-1 custom-control-input" value="Mobile-Development">
       <label class="accordion-label custom-control-label" for="check5">Mobile Development</label>
       <i class="fa fa-angle-down fa-icon" aria-hidden="true"></i>
       <div class="accordion-content">
        <p><span>Preferred Skills: </span>Android, Java, Kotlin, Flutter</p>
       </div>
      </div>
      <div class="custom-control custom-checkbox mb-1">
       <input id="check6" name="area_of_expertise[]" type="checkbox" class="checkbox mr-1 custom-control-input" value="Digital-marketing">
       <label class="accordion-label custom-control-label" for="check6">Digital Marketing</label>
       <i class="fa fa-angle-down fa-icon" aria-hidden="true"></i>
       <div class="accordion-content">
        <p><span>Preferred Skills: </span> Adwords, SEO, Content writing, E-mail and Facebook Marketing </p>
       </div>
      </div>
     </div>
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
                                                                                                                                                                        } ?>" maxlength="50"></div>
      <div class="col-sm-12">
       <select class="form-control mt-2" name="state" id="validationCustom09" placeholder="What state are you currently in?" required>
        <?php

         if (isset($_POST['state'])) {     
            echo "<option>".$_POST['state']."</option>";
          }

        ?>
       <option value="state">What state are you currently in? </option>
     <option value="india">Federal Capital Territory</option>
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
       <input name="employment_status" type="text" class="form-control mt-2" id="validationCustom10" placeholder="What is your current employment status?" required value="<?php if (isset($_POST['employment_status'])) {
                                                                                                                                                                            echo $_POST['employment_status'];
                                                                                                                                                                           } ?>" maxlength="15"></div>
      <center><button class="btn btn-primary mt-3" type="submit">Submit</button></center>

     </div>
    </div>
   </div>
  </div>
 </form>
 
 <?php include('fragments/site_footer.php'); ?>

</body>
<script src="https://kit.fontawesome.com/85682eb992.js" crossorigin="anonymous"></script>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" crossorigin="anonymous"></script><script src="js/mentorSetupPage.js"></script>

</html>