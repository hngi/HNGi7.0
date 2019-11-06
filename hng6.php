<?php
require 'classControllers/init.php';
$countdown = new CountdownTimer();
$countDownValues = $countdown->getDate();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HNGi6.0</title>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link rel="stylesheet" href="css/hngsix.css">
    <link rel="stylesheet" href="css/countdown.css">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="icon" type="img/png" href="images/hng-favicon.png">

</head>
<body>
        <?php include('fragments/site_header.php'); ?>

    <p id="startDate" style="display: none;"><?php echo $countDownValues["startDate"]; ?></p>
    <p id="startTime" style="display: none;"><?php echo $countDownValues["startTime"]; ?></p>

    <section>
        <main>
            <section id="countdown-section">
                <h2 class="darkblue-text center-text" id="countdown-intro">Countdown to HNGi7.0</h2>
                <div class="countdown1">
                <p class="message"></p>
                <br>
                <div class="item">
                    <svg class="d-svg" width="160" height="160">
                    <circle class="d-outer" r="70" cy="81" cx="81" stroke-width="5" stroke="#d5d5d5" fill="none" />
                    <circle class="days" r="70" cy="81" cx="81" stroke-width="5" stroke="#06F4CC" fill="none" />
                    <text class="d-inner" x="50%" y="50%" stroke="#000000" stroke-width="2px" text-anchor="middle"
                        transform="rotate(90,75,75)"></text>
                    <text class="desc" x="50%" y="63%" stroke="#000000" stroke-width="0.5px" text-anchor="middle"
                        transform="rotate(90,75,75)">DAYS</text>
                    </svg>
                    <svg class="h-svg" width="160" height="160">
                    <circle class="h-outer" r="70" cy="81" cx="81" stroke-width="5" stroke="#d5d5d5" fill="none" />
                    <circle class="hours" r="70" cy="81" cx="81" stroke-width="5" stroke="#06F4CC" fill="none" />
                    <text class="h-inner" x="50%" y="50%" stroke="#000000" stroke-width="2px" text-anchor="middle"
                        transform="rotate(90,75,75)"></text>
                    <text class="desc" x="50%" y="63%" stroke="#000000" stroke-width="0.5px" text-anchor="middle"
                        transform="rotate(90,75,75)">HOURS</text>
                    </svg>
                    <svg class="m-svg" width="160" height="160">
                    <circle class="m-outer" r="70" cy="81" cx="81" stroke-width="5" stroke="#d5d5d5" fill="none" />
                    <circle class="mins" r="70" cy="81" cx="81" stroke-width="5" stroke="#06F4CC" fill="none" />
                    <text class="m-inner" x="50%" y="50%" stroke="#000000" stroke-width="2px" text-anchor="middle"
                        transform="rotate(90,75,75)"></text>
                    <text class="desc" x="50%" y="63%" stroke="#000000" stroke-width="0.5px" text-anchor="middle"
                        transform="rotate(90,75,75)">MINUTES</text>
                    </svg>
                    <svg class="s-svg" width="160" height="160">
                    <circle class="s-outer" r="70" cy="81" cx="81" stroke-width="5" stroke="#d5d5d5" fill="none" />
                    <circle class="seconds" r="70" cy="81" cx="81" stroke-width="5" stroke="#06F4CC" fill="none" />
                    <text class="s-inner" x="50%" y="50%" stroke="#000000" stroke-width="2px" text-anchor="middle"
                        transform="rotate(90,75,75)"></text>
                    <text class="desc" x="50%" y="63%" stroke="#000000" stroke-width="0.5px" text-anchor="middle"
                        transform="rotate(90,75,75)">SECONDS</text>
                    </svg>
                </div>
                </div>

                <h2 class="center-text"><a href="join-intern.php" class="skyblue-text" id="countdown-register">REGISTER
                        FOR HNGi7.0 NOW</a></h2>
            </section>

            <section id="home-about">
                <div class="container">
                    <div id="about-container">
                        <article class="my-auto"  data-aos="fade-right" >
                            <h1 class="blue-text hng6">HNG 6.0 Internship</h1>

                            <p class="my-auto">
                                The HNG 6.0 Internship commenced 23rd April, 2019 and ended 58th October, 2020. <br />
                                <br /> A well-planned, coordinated event where young talented folks from across the globe
                                participated remotely and were involved in learning
                                key skills needed to becoming the best globally in programming, design thinking, machine
                                learning and digital marketing. <br /> <br /> The HNG 6.0 Internship programme comprised of
                                10 stages. Tasks were given to participants and
                                deadlines for submission was set. Those who were late in submitting tasks and also those who
                                didn’t follow instructions to complete task as required were eliminated at every stage of
                                the event. <br /> <br /> The programme was directed
                                by Mark Essien, (founder-CEO hotels.ng) and some of the participants from the previous HNG
                                Internship edition were brought on board as
                                <a href="mentorpage.php" class="skyblue-text">Mentors</a>, their job was to guide and
                                inspire participatants when needed and also to properly coordinate the event.
                            </p>
                        </article>
                        <article>
                            <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722500/home-forum_wmrsfj.png">
                        </article>
                    </div>
                </div>
                
            </section>

            <section class="gallery">
                <h2 class="blue-text"  data-aos="fade-up">How It All Happened</h2>
                <section class="container">
                    <div class="gallery_items"  data-aos="fade-up">
                        <img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570722558/gallery-first_gldujn.png">
                        <img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570722589/gallery-second_nkrosi.png">
                        <img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570722618/gallery-third_oqgaiv.png">
                        <img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570722558/gallery-first_gldujn.png">
                        <img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570722589/gallery-second_nkrosi.png">
                        <img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570722618/gallery-third_oqgaiv.png">
                    </div>
                    <div class="gallery_items" id="hidden_images"  data-aos="fade-up">
                        <img
                            src="https://res.cloudinary.com/yutee/image/upload/v1571818578/low-quality/startng1_rbfvik.jpg">
                        <img
                            src="https://res.cloudinary.com/yutee/image/upload/v1571818578/low-quality/startng2_rva54w.jpg">
                        <img
                            src="https://res.cloudinary.com/yutee/image/upload/v1571818578/low-quality/startng3_blzemp.jpg">
                        <img
                            src="https://res.cloudinary.com/yutee/image/upload/v1571818578/low-quality/startng4_tlrjyf.jpg">
                        <img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570722618/gallery-third_oqgaiv.png">
                        <img
                            src="https://res.cloudinary.com/yutee/image/upload/v1571818578/low-quality/startng5_qvzjfy.jpg">
                        <img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570722558/gallery-first_gldujn.png">
                        <img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570722589/gallery-second_nkrosi.png">
                        <img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570722589/gallery-second_nkrosi.png">
                    </div>
                </section> <br>
                <div  data-aos="fade-up">
                    <button class="def-button shadowed" onclick="showImage()" id="view_more">View more photos</button></div>
            </section>

            <section id="participate-section" class="container">
                <div  data-aos="fade-right">
                    <h2 class="blue-text">Participation</h2>
                    <p>
                        More than 5000 intellectuals participated in the HNG 6.0 internship programme. <br /><br /> We
                        had people living in Africa, Europe and Asia sign up for the programme. <br /><br />
                        Participation was achieved remotely via the popular
                        collaboration tool called Slack.
                    </p> <br>
                    <p id="p-link"><a href="join-intern.php" class="def-button">Join HNGi7.0</a></p>
                </div>
                <div> <br>
                    <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722649/home-geeks_vld6nt.png"
                        id="geek-img">
                </div>
            </section>

            <section class="section3 container"  data-aos="fade-up">
                <h2 class="blue-text center-text">HNG 6 Internship Tracks (Curriculum)</h2>
                <div id="curriculum-flex">
                    <div>
                        <p>
                            Those who participated in HNG 6.0 Internship program were divided into groups according to
                            their interests.
                        </p>
                        <p> Those groups were popularly known as tracks in HNG 6.0 Internship and the following were
                            some of the tracks featured.</p>
                        <p> At various points in the program, collaboration between participants in different tracks is
                            achieved.
                        </p>
                    </div>
                    <div id="track-list">
                        <a href="#">BACK END TRACK</a>
                        <a href="#">UI / UX DESIGN TRACK</a>
                        <a href="#">MACHINE LEARNING TRACK</a>
                        <a href="#">FRONT END TRACK</a>
                        <a href="#">DIGITAL MARKETING TRACK</a>
                        <a href="#">MOBILE DEVELOPMENT TRACK</a>
                    </div>
                </div>
            </section>

            <section id="main-mentor-section">
                <div id="mentor-section">
                <div class="mentor-text"  data-aos="fade-right">
                    <h2 class="blue-text">HNG 6.0 Internship Mentors</h2>
                    <p>
                        Mentors are responsible for day-to-day running of the HNG Internship programme.
                        <br /><br /> They are usually recruited from past editions of HNG Internship programmes
                        <br /><br /> They oversee all activities in the programme and ensure interns adhere to the rules
                        and regulations of the programme
                    </p>
                </div>
                <div id="mentor-wrapper">
                    <div id="mentor-flex">
                        <div id="mentor-div">
                            <img
                                src="https://res.cloudinary.com/memz/image/upload/v1572796363/Mentors/20191103_165148_auawdc.jpg">
                           <p class="mentor-name center-text">Seyi Onifade</p>
                            <p class="mentor-desc center-text">Devops and CEO, HNG Tech</p>
                        </div>
                        <div id="mentor-div">
                            <img
                                src="https://res.cloudinary.com/memz/image/upload/v1572710145/Mentors/Tomisin_olpwrk.jpg">
                            <p class="mentor-name center-text">Tomisin Lalude</p>
                            <p class="mentor-desc center-text">Frontend Development</p>
                        </div>
                    </div>
                    <a href="mentorpage.php" class="def-button shadowed">See all Mentors</a>
                </div>
                </div>
                
            </section>

            <section id="slack-channels"  data-aos="fade-up">
                <h2 class="center-text blue-text" id="slack-title"><span>HNG 6 Internship Popular Channels - SLACK
                    </span><img id="slack-logo"
                        src="https://res.cloudinary.com/jaycodist/image/upload/v1570722732/slack-icon_hwxoui.svg"></h2>
                <div id="channel-list">
                    <div class="skyblue-text">#announcement</div>
                    <div class="skyblue-text">#game</div>
                    <div class="skyblue-text">#random</div>
                    <div class="skyblue-text">#things-learnt</div>
                    <div class="skyblue-text">#help</div>
                    <div class="skyblue-text">#resources</div>
                    <div class="skyblue-text">#opportunities</div>
                    <div class="skyblue-text">#underworld</div>
                </div>
            </section>
            <section class="section4">
            <div class="sponsor">
                    <div class="container">
                        <h2 class="center-text blue-text">HNG 6.0 Internship Sponsors</h2>
                        <div class="row section-row text-center mx-auto" data-aos="fade-up">
                            <div class="col-md-3">
                                <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722782/hotels-logo_x3icbw.svg">
                            </div>
                            <div class="col-md-3">
                                <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722780/akwa-ibom-logo_yzz8ny.svg">
                            </div>
                            <div class="col-md-3">
                                <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722785/imo-logo_rvxpil.svg">
                            </div>
                            <div class="col-md-3">
                                <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722788/verifi-logo_nfckrw.svg">
                            </div>
                        </div>
                    <div class="row second-row text-center mx-auto" data-aos="fade-up">
                        <div class="col-md-4">
                            <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570723653/figma-logo_iexfvh.png">                    </div>
                        <div class="col-md-4">
                            <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722855/bluechip-logo_rw62cu.svg">                    </div>
                        <div class="col-md-4">
                            <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722784/flutterwave-logo_nyv9ue.svg">                    </div>
                    </div>
                    <p class="center-text"  data-aos="fade-up"><a href="donate.php" class="def-button shadowed center">Become a Sponsor</a></p>
                    </div>

                    <!--
                    <div id="sponsor-flex-top" data-aos="fade-up">
                        <a><img
                                src="https://res.cloudinary.com/jaycodist/image/upload/v1570722782/hotels-logo_x3icbw.svg"></a>
                        <a><img
                                src="https://res.cloudinary.com/jaycodist/image/upload/v1570722780/akwa-ibom-logo_yzz8ny.svg"></a>
                        <a><img
                                src="https://res.cloudinary.com/jaycodist/image/upload/v1570722785/imo-logo_rvxpil.svg"></a>
                        <a><img
                                src="https://res.cloudinary.com/jaycodist/image/upload/v1570722788/verifi-logo_nfckrw.svg"></a>
                    </div>
                    <div id="sponsor-flex-bottom" data-aos="fade-up">
                        <a><img
                                src="https://res.cloudinary.com/jaycodist/image/upload/v1570723653/figma-logo_iexfvh.png"></a>
                        <a><img
                                src="https://res.cloudinary.com/jaycodist/image/upload/v1570722855/bluechip-logo_rw62cu.svg"></a>
                        <a><img
                                src="https://res.cloudinary.com/jaycodist/image/upload/v1570722784/flutterwave-logo_nyv9ue.svg"></a>
                    </div>
-->
                </div>
            </section>
        </main>
       
    </section>
    <?php include('fragments/site_footer.php'); ?>


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
</body>
<script type="text/javascript" src="js/hng6.js"></script>
    <script>
        function showImage() {
            var images = $("#hidden_images");
            images.slideToggle(1000).css("display", "grid");

        }


          let view_btn =  $("#view_more");
          view_btn.on("click", function(){
          let view_btn_text =  view_btn.text();
              if (view_btn_text === "View more photos"){
                view_btn.text("View less photos");
              }else {
                  view_btn.text("View more photos")
              }
          })
         
        

    </script>
</html>
