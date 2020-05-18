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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
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
    <?php include 'fragments/site_header.php';?>

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
                            <circle class="d-outer" r="70" cy="81" cx="81" stroke-width="5" stroke="#d5d5d5"
                                fill="none" />
                            <circle class="days" r="70" cy="81" cx="81" stroke-width="5" stroke="#06F4CC" fill="none" />
                            <text class="d-inner" x="50%" y="50%" stroke="#000000" stroke-width="2px"
                                text-anchor="middle" transform="rotate(90,75,75)"></text>
                            <text class="desc" x="50%" y="63%" stroke="#000000" stroke-width="0.5px"
                                text-anchor="middle" transform="rotate(90,75,75)">DAYS</text>
                        </svg>
                        <svg class="h-svg" width="160" height="160">
                            <circle class="h-outer" r="70" cy="81" cx="81" stroke-width="5" stroke="#d5d5d5"
                                fill="none" />
                            <circle class="hours" r="70" cy="81" cx="81" stroke-width="5" stroke="#06F4CC"
                                fill="none" />
                            <text class="h-inner" x="50%" y="50%" stroke="#000000" stroke-width="2px"
                                text-anchor="middle" transform="rotate(90,75,75)"></text>
                            <text class="desc" x="50%" y="63%" stroke="#000000" stroke-width="0.5px"
                                text-anchor="middle" transform="rotate(90,75,75)">HOURS</text>
                        </svg>
                        <svg class="m-svg" width="160" height="160">
                            <circle class="m-outer" r="70" cy="81" cx="81" stroke-width="5" stroke="#d5d5d5"
                                fill="none" />
                            <circle class="mins" r="70" cy="81" cx="81" stroke-width="5" stroke="#06F4CC" fill="none" />
                            <text class="m-inner" x="50%" y="50%" stroke="#000000" stroke-width="2px"
                                text-anchor="middle" transform="rotate(90,75,75)"></text>
                            <text class="desc" x="50%" y="63%" stroke="#000000" stroke-width="0.5px"
                                text-anchor="middle" transform="rotate(90,75,75)">MINUTES</text>
                        </svg>
                        <svg class="s-svg" width="160" height="160">
                            <circle class="s-outer" r="70" cy="81" cx="81" stroke-width="5" stroke="#d5d5d5"
                                fill="none" />
                            <circle class="seconds" r="70" cy="81" cx="81" stroke-width="5" stroke="#06F4CC"
                                fill="none" />
                            <text class="s-inner" x="50%" y="50%" stroke="#000000" stroke-width="2px"
                                text-anchor="middle" transform="rotate(90,75,75)"></text>
                            <text class="desc" x="50%" y="63%" stroke="#000000" stroke-width="0.5px"
                                text-anchor="middle" transform="rotate(90,75,75)">SECONDS</text>
                        </svg>
                    </div>
                </div>

                <h2 class="center-text"><a href="join-intern" class="skyblue-text" id="countdown-register">REGISTER
                        FOR HNGi7.0 NOW</a></h2>
            </section>

            <section id="home-about">
                <div class="container">
                    <div id="about-container">
                        <article class="my-auto" data-aos="fade-right">
                            <h1 class="blue-text hng6">HNG 6.0 Internship</h1>

                            <p class="my-auto">
                                The sixth edition of the HNG Internship commenced on the 9th of September, 2019 and was
                                concluded on the 12th of November, 2019. <br> <br>

                                It was a well-planned, coordinated event where young talented folks from across the
                                globe participated remotely and were involved in learning key skills needed to become
                                the best globally in Programming, Product Design, Machine Learning, Digital Marketing
                                and more. <br> <br>

                                The Internship comprised of 10 stages where participants were assigned tasks on a weekly
                                basis with deadlines for submission. Failure of participants to turn in complete and
                                accurate tasks at the set deadline resulted in eviction. <br> <br>

                                We had <a href="mentorpage">mentors</a> onboard to guide interns in their respective
                                tracks throughout and also
                                to properly coordinate the program. <br> <br>
                                We are looking forward to HNG Internship 7.0, which will commence on the 1st of June,
                                2020. We look forward to seeing you onboard.

                            </p>
                        </article>
                        <article>
                            <img
                                src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056902/HNGi7/DSC_0061_compressed_wyvjvs.jpg">
                        </article>
                    </div>
                </div>

            </section>

            <section class="gallery">
                <h2 class="blue-text" data-aos="fade-up">How It All Happened</h2>
                <section class="container">
                    <div class="gallery_items" data-aos="fade-up">
                        <span>
                            <img
                                src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056945/HNGi7/DSC_0320_compressed_zban6e.jpg">
                            <p>Graduate Interns from HNGi6</p>
                        </span>
                        <span>
                            <img
                                src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056936/HNGi7/DSC_0235_compressed_quuops.jpg">
                            <p> Our Ladies in Tech</p>
                        </span>
                        <span>
                            <img
                                src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056902/HNGi7/DSC_0061_compressed_wyvjvs.jpg">
                            <p>Panel sessions ongoing</p>
                        </span>
                        <span>
                            <img
                                src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056951/HNGi7/DSC_0349_compressed_hobsvf.jpg">
                            <p> Some of the HNG mentors at the HNGi6 Lagos meetup</p>
                        </span>
                        <span>
                            <img
                                src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056912/HNGi7/DSC_0102_compressed_lkdfe5.jpg">
                            <p>A cross-section of the HNGi6 Lagos meetup handled by Jeffrey Ogah</p>
                        </span>
                        <span>
                            <img
                                src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056903/HNGi7/DSC_0066_compressed_gio6ad.jpg">
                            <p>A cross-section of HNGi6 meetup</p>
                        </span>
                    </div>
                    <div class="gallery_items" id="hidden_images" data-aos="fade-up">
                        <span>
                            <img
                                src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056897/HNGi7/DSC_0017_compressed_jcpliu.jpg">
                            <p>Interactions between graduate interns</p>
                        </span>
                        <span>
                            <img
                                src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056953/HNGi7/DSC_0379_compressed_liu0nb.jpg">
                            <p> Some of the HNG male mentors at the HNGi6 meetup</p>
                        </span>
                        <span>
                            <img
                                src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056935/HNGi7/DSC_0240_compressed_rqryji.jpg">
                            <p>Few of our beautiful ladies at the last meet up</p>
                        </span>
                        <span>
                            <img
                                src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056920/HNGi7/DSC_0176_compressed_rlodtc.jpg">
                            <p>An ongoing session</p>
                        </span>
                        <span>
                            <img
                                src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056931/HNGi7/DSC_0197_compressed_ju1aio.jpg">
                            <p>We are happy people</p>
                        </span>
                        <span>
                            <img
                                src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056956/HNGi7/DSC_0501_compressed_nl7twm.jpg">
                            <p>We are serious minded people</p>
                        </span>
                        <span>
                            <img
                                src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056910/HNGi7/DSC_0100_compressed_mosuvp.jpg">
                            <p>An on going session</p>
                        </span>
                        <span>
                            <img
                                src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056937/HNGi7/DSC_0252_compressed_cnwj4c.jpg">
                            <p>Few of our ladies </p>
                        </span>
                        <span>
                            <img
                                src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056985/HNGi7/DSC_0778_compressed_cbub9t.jpg">
                            <p>Interactions between mentors</p>
                        </span>
                    </div>
                </section> <br>
                <div data-aos="fade-up">
                    <button class="def-button shadowed" onclick="showImage()" id="view_more">View more photos</button>
                </div>
            </section>

            <section id="participate-section" class="container">
                <div data-aos="fade-right">
                    <h2 class="blue-text">Participation</h2>
                    <p>
                        Over 7000 intellectuals participated in the HNG internship 6.0 program. <br /><br /> We had
                        participants from across Africa, America, Europe, and Asia. <br /><br />
                        We communicated and carried out all activities remotely via a popular collaboration tool known
                        as Slack, Github and PivotalTracker.
                    </p> <br>
                    <p id="p-link"><a href="join-intern" class="def-button">Join HNGi7.0</a></p>
                </div>
                <div> <br>
                    <img src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056895/HNGi7/DSC_0007_compressed_dtapsd.jpg"
                        id="geek-img">
                </div>
            </section>

            <section class="section3 container" data-aos="fade-up">
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
                    <div class="mentor-text" data-aos="fade-right">
                        <h2 class="blue-text">HNG 6.0 Internship Mentors</h2>
                        <p>
                        <p> Mentors are responsible for the day-to-day running of the HNG Internship program.</p>
                        <p> They are usually finalists from previous editions of the Internship who volunteer to be
                            involved in the organization and planning of subsequent editions.
                        </p>
                        <p> They oversee all activities in the program and ensure interns adhere to the rules and
                            regulations while guiding them
                            through their tasks.
                        </p>

                        </p>
                    </div>
                    <div id="mentor-wrapper">
                        <div id="mentor-flex">
                            <div id="mentor-div">
                                <img src="https://res.cloudinary.com/dxikrojwn/image/upload/v1554311651/Motun.jpg">
                                <p class="mentor-name center-text">Da-costa Motunrayo</p>
                                <p class="mentor-desc center-text">Frontend Developer</p>
                            </div>
                            <div id="mentor-div">
                                <img src="https://res.cloudinary.com/jeffogah/image/upload/v1573127408/download.jpg">
                                <p class="mentor-name center-text">Jeffrey Ogah</p>
                                <p class="mentor-desc center-text">Frontend Developer</p>
                            </div>
                        </div>
                        <a href="mentorpage" class="def-button shadowed">See all Mentors</a>
                    </div>
                </div>

            </section>

            <section id="slack-channels" data-aos="fade-up">
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
                            <div class="col-md-4">
                                <a href="https://hotels.ng"><img
                                        src="https://res.cloudinary.com/jaycodist/image/upload/v1570722782/hotels-logo_x3icbw.svg">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://kudabank.com/"><img src="./images//kudaBank.png">
                                </a>                            </div>
                            <div class="col-md-4">
                                <a href="https://www.verifi.ng/pay/">
                                    <img
                                        src="https://res.cloudinary.com/jaycodist/image/upload/v1570722788/verifi-logo_nfckrw.svg"></a>                            </div>
                        </div>
                        <div class="row second-row text-center mx-auto" data-aos="fade-up">
                            <div class="col-md-4">
                                <a href="https://www.piggyvest.com/"><img src="./images/piggyvestLogo.png"></a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://blog.google/around-the-globe/google-africa/google-nigeria/"><img src="./images/google-nigeria.png"></a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://flutterwave.com/ng/"> <img
                                    src="https://res.cloudinary.com/jaycodist/image/upload/v1570722784/flutterwave-logo_nyv9ue.svg"
                                    width="100%"></a>                            </div>
                        </div>
                        <p class="center-text" data-aos="fade-up"><a href="donate"
                                class="def-button shadowed center">Become a Sponsor</a></p>
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
    <?php include 'fragments/site_footer.php';?>


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

    <?php // include('fragments/chat.php'); ?>
</body>
<script type="text/javascript" src="js/hng6.js"></script>
<script>
    function showImage() {
        var images = $("#hidden_images");
        images.slideToggle(1000).css("display", "grid");

    }


    let view_btn = $("#view_more");
    view_btn.on("click", function () {
        let view_btn_text = view_btn.text();
        if (view_btn_text === "View more photos") {
            view_btn.text("View less photos");
        } else {
            view_btn.text("View more photos")
        }
    })



</script>

</html>