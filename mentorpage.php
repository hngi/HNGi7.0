<?php

require_once "classControllers/init.php";
   //  $mentor = new Mentors();
$mentor = new Mentor;

$mentors = $mentor->showMentors();


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

    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->

    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
  <link rel="stylesheet" type="text/css" href="css/mentorpage.css">
  <link rel="icon" type="img/png" href="images/hng-favicon.png">

  <title>Mentors</title>

  
</head>

<body>
  <div style="background-color: #D1F0F6 !important;"><?php include('fragments/site_header.php'); ?></div>

  <section >
  
  <div class="jumbotron" id="landing-page">
    <div class="container">
      <h2>Our Mentors</h2>
      <p class="lead">Our mentors who are experienced in various sector contributes their
        time and knowledge in making sure the interns get the best guide as
        they begin their journey into the tech industry      
      </p>
        <a href="MentorSetUpPage2.php">Sign up as Mentor</a>
      <!--UPDATE MENTOR PROFILE --= COLLECT EMAIL HERE -->
        <p class="update_mentor" onclick="modalForm()"> <a>Update Your Profile</a></p>

      <section class="form-field">
        <form action="" class="collect_email">
          <p> Enter your email below to get a link to update your profile </p>
          <input type="email" name="email" placeholder="Enter your registered email" class="mentor_email">
          <input type="submit" value="Submit" class="action_button">
          <input type="button" value="Close" class="action_button action_button--two" onclick="modalForm()">
        </form>
      </section>
  </div>
  </div>

</section>  




        <!-- mentor details -->
        <div class="container-fluid mt-5 mentor">
            <div class="row text-center">

                <?php
                    $counter = 1;
                    foreach($mentors as $ment):
                      if($counter % 4 == 0){
                        $counter = 1;
                      }else{
                        $counter = $counter + 1;
                      }
                ?>
                <!-- mentor item 1-->
                <div class="col-xl-3 col-sm-6 mb-3 mentor_card">
                    <div class="bg-white rounded  py-4 px-4"><img
                            src="<?= $ment['photo_url'] ;  ?>"
                            alt="" width="100%" height="auto" class="img-fluid rounded-circle mb-3  ">
                        <h6 class="mb-2 hew"><?= $ment['name']; ?></h6>
                        <span class="text-muted"><?= $ment['area_of_expertise'] ; ?></span>
                        <ul class="social mb-0 list-inline mt-2">
                            <li class="list-inline-item"><a href="<?= $ment['twitter_url'] ;  ?>" class="social-link s-link<?= $counter ;?>"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="<?= $ment['fb_url'] ;  ?>" class="social-link s-link<?= $counter ; ?>"><i
                                        class="fab fa-facebook"></i></a></li>
                            <?php
                
                                $skills_array = explode('|', $ment['area_of_expertise']);
                                empty($ment['link_to_github'])? $portfolio_link = $ment['dribble_link'] : $portfolio_link = $ment['link_to_github'];

                            ?>
                            <li class="list-inline-item"><a href="<?= $portfolio_link;  ?>" class="social-link s-link<?= $counter ;?>"><i
                                        class="fab fa-<?=((in_array('UI/UX-Design', $skills_array, true))? 'dribbble': 'github');?>"></i></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- End -->
                <?php

                    endforeach;
                ?>


            </div>
        </div>







<?php include('fragments/site_footer.php'); ?>

<!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
<?php include('fragments/chat.php'); ?>
</body>

    <script src="js/main.js"></script>
    <!-- <script type="text/javascript" src="js/countdown.js"></script> -->

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

<!-- deprecated -->
<!-- <script src="js/mentorpage.js"></script> -->

<div id="jumptotop"><em></em></div>
<!-- <script src="./js/scroll-to-top.js"></script> -->
<script>
  function modalForm (){
    $(".form-field").fadeToggle(500);
  }
</script>
</html>
