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
    <title>The HNG Internship</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link rel="stylesheet" href="css/hngsix.css">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="icon" type="img/png" href="images/hng-favicon.png">

</head>
<body>

    <p id="startDate" style="display: none;"><?php echo $countDownValues["startDate"]; ?></p>
    <p id="startTime" style="display: none;"><?php echo $countDownValues["startTime"]; ?></p>

    <section class="container-fluid">
        <?php include('fragments/site_header.php'); ?>

        <main>
            <section id="countdown-section">
                <h2 class="darkblue-text center-text" id="countdown-intro">Countdown to HNGi7.0 </h2>

                <section id="countdown-container">
                    <div id="day-div">
                        <div class="countdown-symbol" id="day-symbol">
                            <div class="arcs-background"></div>
                            <div id="day-start" class="arc arc_start"></div>
                            <div id="day-end" class="arc arc_end"></div>
                            <span id="day-text" class="moshe">05</span>
                        </div>
                        <p class="center-text">DAYS</p>
                    </div>
                    <div id="hour-div">
                        <div class="countdown-symbol" id="hour-symbol">
                            <div class="arcs-background"></div>
                            <div id="hour-start" class="arc arc_start"></div>
                            <div id="hour-end" class="arc arc_end"></div>
                            <span id="hour-text">24</span>
                        </div>
                        <p class="center-text">HOURS</p>
                    </div>
                    <div id="minute-div">
                        <div class="countdown-symbol" id="minute-symbol">
                            <div class="arcs-background"></div>
                            <div id="minute-start" class="arc arc_start"></div>
                            <div id="minute-end" class="arc arc_end"></div>
                            <span id="minute-text" class="moshe">52</span>
                        </div>
                        <p class="center-text">MINUTES</p>
                    </div>
                    <div id="second-div">
                        <div class="countdown-symbol" id="second-symbol">
                            <div class="arcs-background"></div>
                            <div id="second-start" class="arc arc_start"></div>
                            <div id="second-end" class="arc arc_end"></div>
                            <span id="second-text">41</span>
                        </div>
                        <p class="center-text">SECONDS</p>
                    </div>
                </section>

                <h2 class="center-text"><a href="join-intern.php" class="skyblue-text" id="countdown-register">REGISTER
                        FOR HNGi7.0 NOW</a></h2>
            </section>

            <section id="home-about">
                <div id="about-container">
                    <article>
                        <h1 class="blue-text">HNG 6.0 Internship</h1>

                        <p>
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
            </section>

            <section class="gallery">
                <h2 class="blue-text">How it All Happened</h2>
                <section>
                    <div class="gallery_items">
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
                    <div class="gallery_items" id="hidden_images">
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
                <div>
                    <button class="def-button shadowed" onclick="showImage()">View more photos</button></div>
            </section>

            <section id="participate-section">
                <div>
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

            <section class="section3">
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

            <section id="mentor-section">
                <div>
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
                                src="https://res.cloudinary.com/jaycodist/image/upload/v1570722683/mentors-first_qlquq9.png">
                            <p class="mentor-name center-text">Samuel L. Jackson</p>
                            <p class="mentor-desc center-text">Mentor, HNG 5.0</p>
                        </div>
                        <div id="mentor-div">
                            <img
                                src="https://res.cloudinary.com/jaycodist/image/upload/v1570722685/mentors-second_frnhpz.png">
                            <p class="mentor-name center-text">Taraji P. Henson</p>
                            <p class="mentor-desc center-text">Mentor, HNG 6.0</p>
                        </div>
                    </div>
                    <a href="mentorpage.php" class="def-button shadowed">See all Mentors</a>
                </div>
            </section>

            <section id="slack-channels">
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
                <h2 class="center-text blue-text">HNG 6.0 Internship Sponsors</h2>
                <div id="sponsor-flex-top">
                    <a href="#"><img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570722782/hotels-logo_x3icbw.svg"></a>
                    <a href="#"><img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570722780/akwa-ibom-logo_yzz8ny.svg"></a>
                    <a href="#"><img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570722785/imo-logo_rvxpil.svg"></a>
                    <a href="#"><img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570722788/verifi-logo_nfckrw.svg"></a>
                </div>
                <div id="sponsor-flex-bottom">
                    <a href="#"><img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570723653/figma-logo_iexfvh.png"></a>
                    <a href="#"><img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570722855/bluechip-logo_rw62cu.svg"></a>
                    <a href="#"><img
                            src="https://res.cloudinary.com/jaycodist/image/upload/v1570722784/flutterwave-logo_nyv9ue.svg"></a>
                </div>
                <p class="center-text"><a href="donate.php" class="def-button shadowed center">Become a Sponsor</a></p>
            </section>
        </main>
       
    </section>
    <?php include('fragments/site_footer.php'); ?>

</body>
<script type="text/javascript" src="js/hng6.js"></script>
    <script>
        function showImage() {
            var images = document.getElementById("hidden_images");
            if (images.style.display === "grid") {
                images.style.display = "none";
            } else {
                images.style.display = "grid";
            }
        }
    </script>
</html>