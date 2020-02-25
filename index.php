<?php
    require 'classControllers/init.php';
    $countdown = new CountdownTimer();
    $countDownValues = $countdown->getDate();
?>
<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="css/countdown.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
</head>

<body>
    <p id="startDate" style="display: none;"><?php echo $countDownValues["startDate"]; ?></p>
    <p id="startTime" style="display: none;"><?php echo $countDownValues["startTime"]; ?></p>

    <?php include('fragments/site_header.php');?>
    <section class="body-section">
        <div>
            <img src="https://bit.ly/2OC3tWo" id="corner-circle" alt="Graphic at the top right corner">

            <main>

                <div class="container">
                    <div class="main-first-row mobile-view" data-aos="fade-up">
                        <div class="welcome-column">
                            <h1 id="welcome-text" class="text__dark-blue">
                                Welcome to<br>HNG 7.0 Internship
                            </h1>
                            <p id="welcome-story">
                                The HNG Internship is an ambitious attempt to change the way education is done in
                                Africa.
                                It’s the bridge between learning to code and becoming the best in the world.
                            </p>
                            <button class="cta-button button--midBlue" id="buttt">
                                <a href="join-intern" id="butt">Get Started</a>
                            </button>
                        </div>
                        <div class="image-column desktop-only">
                            <img id="circles"
                                src="https://res.cloudinary.com/joshuafolorunsho/image/upload/v1572646825/circles_yknmsg-min.png"
                                alt="">
                        </div>
                    </div>

                    <div class="main-second-row1 countdown2" data-aos="fade-up">
                        <h3 class="countdown__heading text_center">
                            Countdown to HNGi7.0
                        </h3>
                        <section id="countdown-container1" class="mt-2 mb-4">
                            <div class="message"></div>
                            <div class="countdown1">
                                <div class="item">
                                    <svg class="d-svg" width="160" height="160">
                                        <circle class="d-outer" r="70" cy="81" cx="81" stroke-width="5" stroke="#d5d5d5"
                                            fill="none" />
                                        <circle class="days" r="70" cy="81" cx="81" stroke-width="5" stroke="#06F4CC"
                                            fill="none" />
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
                                        <circle class="mins" r="70" cy="81" cx="81" stroke-width="5" stroke="#06F4CC"
                                            fill="none" />
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
                        </section>
                    </div>
                </div>

                <div class="main-third-row " data-aos="fade-up">
                    <div class="container">
                        <div class="">
                            <h3 class="subheading text_center text__dark-blue" style="font-weight: bold">
                                Unleash Your Creativity
                            </h3>
                        </div>
                        <div class="main-card__container">
                            <div class=".card__container">
                                <img class="card1-image"
                                    src="https://res.cloudinary.com/joshuafolorunsho/image/upload/v1572765853/card-image-1_qmzasp-min.jpg"
                                    alt="">
                                <h5 class="card1-heading text__dark-blue">Remote Learning</h5>
                                <p class="card1-text">
                                    Our aim is to help everyone willing to kick-start a career in tech without distance
                                    being a barrier. We have made our internship flexible to accommodate you regardless
                                    of your location or timezone.
                                </p>
                            </div>
                            <div class=".card__container">
                                <img class="card1-image"
                                    src="https://res.cloudinary.com/joshuafolorunsho/image/upload/v1572766772/card-image-2_e9bamu-min.jpg"
                                    alt="">
                                <h5 class="card1-heading text__dark-blue">Collaborate with Creatives</h5>
                                <p class="card1-text" id="tess">
                                    The HNG Internship gives room for effective teamwork while interns work on real-life
                                    projects. You get the chance to collaborate with other creatives from different
                                    parts of the world, which prepares you for future team collaborations outside the
                                    internship.
                                </p>
                            </div>
                            <div class=".card__container">
                                <img class="card1-image"
                                    src="https://res.cloudinary.com/joshuafolorunsho/image/upload/v1572766774/card-image-3_vqi4zm-min.jpg"
                                    alt="">
                                <h5 class="card1-heading text__dark-blue">Build Portfolio</h5>
                                <p class="card1-text">
                                    During the course of the internship, you will be introduced to different projects to
                                    work on. These projects could be added to your portfolio as quality samples to put
                                    you ahead of the competition when job hunting.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="main-fourth-row">
                    <h3 id="" class="text_center">How Does It Work ?</h3>
                    <div class="container">
                        <div class="">
                            <div class="section1">
                                <div class="myhalf-a-row mobile-view" data-aos="fade-right">
                                    <h4 class="apply">Apply To Become An Intern</h4>
                                    <p class="content">The HNG internship is a 3-month remote internship designed to
                                        find
                                        and
                                        develop the most talented software developers. Everyone is welcomed to
                                        participate
                                        (there is no entrance exam). Anyone can log into the internship
                                        using their laptop. Each week we give tasks.
                                    </p>
                                    <button class="cta-button button--midBlue" id="">
                                        <a href="join-intern">Get Started</a>
                                    </button>
                                </div>
                                <div class="half-a-row">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th colspan="2">Event Calendar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Registration</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Internship Starts</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Stage 1 to Stage 10</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Internship Ends</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <div class="section2">
                                <div class="half-a-row">
                                    <img class="intern-meet"
                                        src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056945/HNGi7/DSC_0320_compressed_zban6e.jpg"
                                        alt="interns" />
                                </div>
                                <div class="onboard my-auto mobile-view" data-aos="fade-left">
                                    <h4 class="">Onboard And Connect With Teammates
                                    </h4>
                                    <p class="content">Join one of the best remote learning opportunities in tech by
                                        signing up with us. Expand your knowledge with new challenging tasks and
                                        kick-start your career in tech. This is also a chance to connect with valuable
                                        and efficient teammates across the globe from the comfort of your home. </p>
                                    <button class="cta-button button--midBlue" id="buttt">
                                        <a href="join-intern">Get Started</a>
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="main-fifth-row">
                            <div class="row">
                                <div class=" text-md-left my-auto mobile-view" data-aos="fade-right">
                                    <h4 class="">Build Scalable Products &
                                        Grow</h4>
                                    <p class="content">Throughout the internship, you will work on scalable products.
                                        This will give you an insight into real-world projects and prepare you for more
                                        challenging tasks as you take on real-time jobs after the internship.
                                    </p>


                                    <button class="cta-button button--midBlue">
                                        <a href="join-intern">Get Started</a>
                                    </button>
                                </div>

                                <div class="">
                                    <div>
                                        <img
                                            src="https://res.cloudinary.com/joshuafolorunsho/image/upload/v1572767613/img1_cpa8nj-min.png">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-sixth-row" id="wrapper" data-aos="fade-up">
                    <div class="container">
                        <h4 class="text-center mt-5">One of the Best Learning Curriculums in the World</h4>
                        <section class="tracks">
                            <div class="track_container">
                                <div class="row" data-aos="fade-right">
                                    <div class="col-2">
                                        <img src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/frontend_hzyzio.png"
                                            width="50px" class="img-fluid">
                                    </div>
                                    <div class="col-10">
                                        <h5>FRONT END</h5>
                                        <P>Put your knowledge of HTML, CSS, and JavaScript into practice and sharpen it further as you turn exciting UI Designs into stunning web pages.</P>
                                    </div>

                                </div>
                                <div class="row" data-aos="fade-right">
                                    <div class="col-2">
                                        <img src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/backend_orn4az.png"
                                            width="50px" class="img-fluid">
                                    </div>
                                    <div class="col-10">
                                        <h5>BACK END</h5>
                                        <P>Build scalable, logic-driven applications with world-class technologies and handle the 'behind-the-scenes' functionality of web applications. 
                                        </P>
                                    </div>
                                </div>
                                <div class="row" data-aos="fade-right">
                                    <div class="col-2">
                                        <img src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/ml_sdviij.png"
                                            width="30px" class="img-fluid ml-2">
                                    </div>
                                    <div class="col-10">
                                        <h5>MACHINE LEARNING</h5>
                                        <P>Artificial intelligence is the future. Develop programs that can access data and utilize it to automatically learn and improve from experience.
                                        </P>
                                    </div>
                                </div>
                                <div class="row" data-aos="fade-right">
                                    <div class="col-2">
                                        <img src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/ui-ux_xq64bx.png"
                                            width="50px" class="img-fluid">
                                    </div>
                                    <div class="col-10">
                                        <h5>UI / UX DESIGN</h5>
                                        <P>Put your UI/UX Design skills to test and sharpen it as you design exciting User Interfaces for great User Experience.</P>
                                    </div>
                                </div>
                                <div class="row" data-aos="fade-right">
                                    <div class="col-2">
                                        <img src="https://res.cloudinary.com/alfredpison/image/upload/v1573055195/output-onlinepngtools_1_1_jc3fbe.png"
                                            width="50px" class="img-fluid">
                                    </div>
                                    <div class="col-10">
                                        <h5>ORACLE JET</h5>
                                        <P>Develop client-side applications with the powerful Oracle Jet interacting with Oracle products and services, especially Oracle Cloud services.
                                        </P>
                                    </div>
                                </div>
                                <div class="row" data-aos="fade-right">
                                    <div class="col-2">
                                        <img src="https://res.cloudinary.com/alfredpison/image/upload/v1573053633/phone_iphone-24px_1_k9trnt.png"
                                            width="50px" class="img-fluid">
                                    </div>
                                    <div class="col-10">
                                        <h5>MOBILE</h5>
                                        <P>Develop world-class Mobile applications and optimize functionality and user experience on mobile devices.
                                        </P>
                                    </div>
                                </div>
                                <div class="row" data-aos="fade-right">
                                    <div class="col-2">
                                        <img src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/dm_bxzzr2.png"
                                            width="50px" class="img-fluid">
                                    </div>
                                    <div class="col-10">
                                        <h5>DIGITAL MARKETING</h5>
                                        <P>Marketing has evolved over the years from print to digital. Get more familiar with how to market using SEO, content marketing, paid advertising or email marketing through digital technologies.
                                        </P>
                                    </div>
                                </div>
                            </div>

                            <div class="table_accord">
                                <div class="accordion">
                                    <div class="card" id="card0">
                                        <h2 class="card-header">
                                            <img
                                                src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png">
                                            <a> Frontend Development </a>
                                        </h2>


                                        <div class="card-body">
                                            <ul class="accordion_tab">
                                                <li>HTML</li>
                                                <li>CSS 3</li>
                                                <li>Javascript</li>
                                                <li>Bootstrap</li>
                                                <li>JQuery</li>
                                                <li>Vue</li>
                                                <li>ReactJs</li>
                                                <li>Oracle JET</li>
                                                <li>Angular</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card" id="card1">
                                        <h2 class="card-header">
                                            <img
                                                src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png">
                                            <a> Backend Development </a>
                                        </h2>
                                        <div class="card-body">
                                            <ul class="accordion_tab">
                                                <li>PHP</li>
                                                <li>Python</li>
                                                <li>Node.js</li>
                                                <li>Laravel</li>
                                                <li>Apache</li>
                                                <li>NGINX</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="card" id="card2">
                                        <h2 class="card-header">
                                            <img
                                                src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png">
                                            <a> Machine Learning </a>
                                        </h2>
                                        <div class="card-body">
                                            <ul class="accordion_tab">
                                                <li>Java</li>
                                                <li>Python</li>
                                                <li>Google Cloud ML Engine</li>
                                                <li>Amazon Machine Learning (AML)</li>
                                                <li>Accord.NET</li>
                                                <li>Apache Mahout</li>
                                                <li>Shogun</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card" id="card3">
                                        <h2 class="card-header">
                                            <img
                                                src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png">
                                            <a> UI/UX Design </a>
                                        </h2>
                                        <div class="card-body">
                                            <ul class="accordion_tab">
                                                <li>FIGMA</li>
                                                <li>InVision Studio</li>
                                                <li>Adobe XD</li>
                                                <li>Framer X</li>
                                                <li>UXPin</li>
                                                <li>Adobe Illustrator</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card" id="card2">
                                        <h2 class="card-header">
                                            <img
                                                src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png">
                                            <a> Oracle Jet </a>
                                        </h2>
                                        <div class="card-body">
                                            <ul class="accordion_tab">
                                                <li>Knockout JS</li>
                                                <li>Require JS</li>
                                                <li>Jquery</li>
                                                <li>Cordova</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card" id="card2">
                                        <h2 class="card-header">
                                            <img
                                                src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png">
                                            <a> Mobile </a>
                                        </h2>
                                        <div class="card-body">
                                            <ul class="accordion_tab">
                                                <li>IOS</li>
                                                <li>Andriod</li>
                                                <li>Windows</li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card" id="card4">
                                        <h2 class="card-header">
                                            <img
                                                src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png">
                                            <a> Digital Marketing </a>
                                        </h2>
                                        <div class="card-body">
                                            <ul class="accordion_tab">
                                                <li>Social Media</li>
                                                <li>Content Writing</li>
                                                <li>Google analytic</li>
                                                <li>SEO</li>
                                                <li>Google Adwords</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>


                <div class="main-seventh-row" data-aos="fade-up">
                    <div class="container">
                        <h4>Our Dedicated Mentors
                        </h4>
                        <section class="mentor-section" data-aos="fade-up">
                            <div class="mentor-image">
                                <img src="https://res.cloudinary.com/jeffogah/image/upload/v1573127408/download.jpg">
                                <p class="font-weight-bold">Jeffrey Ogah</p>
                                <p>Frontend Developer</p>
                            </div>

                            <div class="mentor-image">
                                <img src="https://res.cloudinary.com/do9i9xfku/image/upload/v1554310773/Passport.png">
                                <p class="font-weight-bold">Tomisin Lalude </p>
                                <p>Frontend Developer</p>
                            </div>
                            <div class="mentor-image">
                                <img src="https://res.cloudinary.com/dxikrojwn/image/upload/v1554311651/Motun.jpg">
                                <p class="font-weight-bold">Da-costa Motunrayo</p>
                                <p>Frontend Developer</p>
                            </div>
                            <div class="mentor-image">
                                <img
                                    src="https://res.cloudinary.com/joshuafolorunsho/image/upload/v1572871096/zodqqfrro1lwuntitiaw.jpg">
                                <p class="font-weight-bold">Ephraim Aigbefo</p>
                                <p>Fullstack Developer</p>
                            </div>
                        </section>
                        <div>
                            <button class="button--midBlue cta-button" id="mentorButton">
                                <a href="mentorpage">See more</a>
                            </button>
                        </div>
                    </div>

                </div>

                <div class="main-eighth-row">

                    <div class="container">
                        <div class="row_8">
                            <div class="row_8--one mobile-view" data-aos="fade-right">
                                <h4>HNG 6.0 Internship
                                </h4>
                                <p class="so-far">...the journey so far</p>
                                <p>The HNG 6.0 Internship commenced 9th September, 2019 and ended 17th November, 2019.
                                </p>

                                <p>
                                    A well-planned, coordinated event where young talented folks from across the globe
                                    participated remotely and were involved in learning key skills needed to becoming
                                    the
                                    best
                                    globally in programming, design thinking, machine learning and digital marketing.
                                </p>

                                <div>
                                    <a href="hng6">
                                        <i class="fa fa-angle-right "></i>Learn more</a>
                                </div>

                            </div>

                            <div class="row_8--two">
                                <img
                                    src="https://res.cloudinary.com/dsjn4g5sh/image/upload/v1579056902/HNGi7/DSC_0061_compressed_wyvjvs.jpg">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="support" data-aos="fade-up">
                    <div class="container">
                        <div class="support__header">
                            <h3 class="support__header-text text-light text_center">Support the Movement</h3>
                        </div>
                        <div class="support__items">
                            <div class="support__item">
                                <span class="support__item-icon"> <i class="fas fa-donate donate"></i> </span>
                                <div class="support__item-body">
                                    <h4 class="support__item-text text-light">
                                        Donate to the Program
                                    </h4>
                                    <span class="support__item-link">
                                        <i class="fa fa-chevron-circle-right"></i>
                                        <a href="donate" class="text-light">Get Started</a>
                                    </span>
                                </div>
                            </div>
                            <div class="support__item">
                                <span class="support__item-icon">
                                    <i class="fas fa-hands-helping help"></i>
                                </span>
                                <div class="support__item-body">
                                    <h4 class="support__item-text text-light">
                                        Become a Partner
                                    </h4>
                                    <span class="support__item-link">
                                        <i class="fa fa-chevron-circle-right"></i>
                                        <a href="donate" class="text-light">Get Started</a>
                                    </span>
                                </div>
                            </div>
                            <div class="support__item">
                                <span class="support__item-icon">
                                    <i class="fas fa-credit-card card"></i>
                                </span>
                                <div class="support__item-body">
                                    <h4 class="support__item-text text-light">
                                        Sponsor via software or tool
                                    </h4>
                                    <span class="support__item-link">
                                        <i class="fa fa-chevron-circle-right"></i>
                                        <a href="donate" class="text-light">Get Started</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="sponsor">
                    <div class="container">
                        <h2 class="text_center blue-text">HNG 6.0 Internship Sponsors</h2>
                        <div class="row section-row text-center mx-auto" data-aos="fade-up">
                            <div class="col-md-3">
                                <img
                                    src="https://res.cloudinary.com/jaycodist/image/upload/v1570722782/hotels-logo_x3icbw.svg">
                            </div>
                            <div class="col-md-3">
                                <img
                                    src="https://res.cloudinary.com/jaycodist/image/upload/v1570722780/akwa-ibom-logo_yzz8ny.svg">
                            </div>
                            <div class="col-md-3">
                                <img
                                    src="https://res.cloudinary.com/jaycodist/image/upload/v1570722785/imo-logo_rvxpil.svg">
                            </div>
                            <div class="col-md-3">
                                <img
                                    src="https://res.cloudinary.com/jaycodist/image/upload/v1570722788/verifi-logo_nfckrw.svg">
                            </div>
                        </div>
                        <div class="row second-row text-center mx-auto" data-aos="fade-up">
                            <div class="col-md-4">
                                <img
                                    src="https://res.cloudinary.com/jaycodist/image/upload/v1570723653/figma-logo_iexfvh.png">
                            </div>
                            <div class="col-md-4">
                                <img
                                    src="https://res.cloudinary.com/jaycodist/image/upload/v1570722855/bluechip-logo_rw62cu.svg">
                            </div>
                            <div class="col-md-4">
                                <img
                                    src="https://res.cloudinary.com/jaycodist/image/upload/v1570722784/flutterwave-logo_nyv9ue.svg">
                            </div>
                        </div>
                        <button class="cta-button button--midBlue">
                            <a href="donate" class="text_center">Become a Sponsor</a>
                        </button>
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

            </main>

        </div>
    </section>
    <?php include('fragments/site_footer.php'); ?>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/countdown.js"></script>
    <script src="js/script.js"></script>
    <script>
        let accord_target = $(".card-header");
        let accord_body = accord_target.next();
        for (let i = 0; i < accord_target.length; i++) {
            $(accord_target[i]).on("click", function () {
                $(this).next().toggle();
                $(this).toggleClass("activeHomepageDrop")
            })
        }
    </script>
    <?php include('fragments/chat.php'); ?>
</body>

</html>