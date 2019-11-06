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

  </div>
  </div>

</section>  




        <!-- mentor details -->
        <div class="container mt-5 mentor">
            <div class="row text-center">

                <?php

                    foreach($mentors as $ment):

                ?>
                <!-- mentor item 1-->
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="bg-white rounded  py-5 px-4"><img
                            src="<?= $ment['photo_url'] ;  ?>"
                            alt="" width="100%" height="auto" class="img-fluid rounded-circle mb-3  ">
                        <h5 class="mb-2"><?= $ment['name']; ?></h5>
                        <span class="text-muted"><?= $ment['area_of_expertise'] ; ?></span>
                        <ul class="social mb-0 list-inline mt-5">
                            <li class="list-inline-item"><a href="<?= $ment['twitter_url'] ;  ?>" class="social-link s-link1"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="<?= $ment['fb_url'] ;  ?>" class="social-link s-link1"><i
                                        class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="<?= $ment['link_to_portfolio'] ;  ?>" class="social-link s-link1"><i
                                        class="fab fa-github"></i></a>
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
<script src="./js/scroll-to-top.js"></script>
</html>
