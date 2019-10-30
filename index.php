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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
</head>
<style>
    #home {
        display: none;
    }
</style>

<body>
    <section class="container-fluid">
        <?php include('fragments/site_header.php');?>
        <div>
            <img src="https://bit.ly/2OC3tWo" id="corner-circle" alt="Graphic at the top right corner">

            <main>
                <div class="main-first-row">
                    <div class="welcome-column">
                        <h1 id="welcome-text" class="text__dark-blue">
                            Welcome to HNG 7.0 Internship
                        </h1>
                        <p id="welcome-story">
                            The HNG Internship is an ambitious attempt to change the way education is done in Africa.
                            It’s the bridge between learning to code, and becoming the best in the world.
                        </p>
                        <button class="cta-button button--midBlue" id="buttt">
                            <a href="join-intern.php" id="butt">Get Started</a>
                        </button>
                    </div>
                    <div class="image-column desktop-only">
                        <img id="circles" src="https://bit.ly/2OzWHk7" alt="">
                    </div>
                </div>

                <div class="main-second-row countdown">
                    <h3 class="countdown__heading text_center">
                        Countdown to HNGi7.0
                    </h3>
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

                </div>

                <div class="main-third-row ">
                    <div class="">
                        <h3 class="subheading text_center text__dark-blue" style="font-weight: bold">
                            Unleash Your Creativity
                        </h3>
                    </div>
                    <div class="main-card__container">
                        <div class=".card__container">
                            <img class="card1-image" src="https://bit.ly/33gP99W" alt="">
                            <h5 class="card1-heading text__dark-blue">Remote Learning</h5>
                            <p class="card1-text">
                                The HNG internship is a 3-month remote internship designed to find and develop the most
                                talented software developers.
                            </p>
                        </div>
                        <div class=".card__container">
                            <img class="card1-image" src="https://bit.ly/2IAGSFN" alt="">
                            <h5 class="card1-heading text__dark-blue">Collaborate with Creatives</h5>
                            <p class="card1-text" id="tess">
                                The HNG internship is a 3-month remote internship designed to find and develop the most
                                talented software developers.
                            </p>
                        </div>
                        <div class=".card__container">
                            <img class="card1-image" src="https://bit.ly/2Vug2Vf" alt="">
                            <h5 class="card1-heading text__dark-blue">Build Portfolio</h5>
                            <p class="card1-text">
                                The HNG internship is a 3-month remote internship designed to find and develop the most
                                talented software developers.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="main-fourth-row">
                    <h3 id="" class="text_center">How Does It Work ?</h3>
                    <div class="">
                        <div class="section1">
                            <div class="myhalf-a-row">
                                <h4 class="apply">Apply To Become An Intern</h4>
                                <p class="content">The HNG internship is a 3-month remote internship designed to find
                                    and
                                    develop the most talented software developers. Everyone is welcomed to participate
                                    (there is no entrance exam). Anyone can log into the internship
                                    using their laptop. Each week we give tasks.
                                </p>
                                <button class="cta-button button--midBlue" id="">
                                    <a href="join-intern.php">Get Started</a>
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
                                    src="https://res.cloudinary.com/chux/image/upload/v1570646194/Rectangle_4.6_vfbtwb.png"
                                    alt="interns" />
                            </div>
                            <div class="onboard">
                                <h4 class="">Onboard And Connect With Teammates
                                </h4>
                                <p class="content">The HNG internship is a 3-month remote internship designed to find
                                    and
                                    develop the most talented software developers. Everyone is welcomed to participate
                                    (there is no entrance exam). Anyone can log into the internship
                                    using their laptop. Each week we give tasks.</p>
                                <button class="cta-button button--midBlue" id="buttt">
                                    <a href="join-intern.php">Get Started</a>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="main-fifth-row">
                    <div class="row">
                        <div class=" text-md-left">
                            <h4 class="">Build Scalable Products &
                                Grow</h4>
                            <p class="content">The HNG Internship is a 3-months remote internship designed to find and
                                develop the most talented software developers. Everyone is welcoming to
                                participate(there is
                                no entrance exam). Anyone can log into the internship
                                using their laptop. Each week, we give tasks.</p>


                            <button class="cta-button button--midBlue">
                                <a href="join-intern.php">Get Started</a>
                            </button>
                        </div>

                        <div class="">
                            <div>
                                <img
                                    src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730626/img1_cpa8nj.png">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-sixth-row" id="wrapper">
                    <h4 class="text-center mt-5">One of the Best Learning Curriculums in the World</h4>
                    <section class="tracks">
                        <div class="track_container">
                            <div class="row">
                                <div class="col-2">
                                    <img src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/frontend_hzyzio.png"
                                        width="50px" class="img-fluid">
                                </div>
                                <div class="col-10">
                                    <h5>FRONT END</h5>
                                    <P>Put your Frontend skills to test and sharpen it further as you turn
                                        exciting UI Designs into stunning web pages.</P>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <img src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/backend_orn4az.png"
                                        width="50px" class="img-fluid">
                                </div>
                                <div class="col-10">
                                    <h5>BACK END</h5>
                                    <P>Put your backenend skills to test and sharpen it by building
                                        scalable, logic driven applications with world class technologies.
                                    </P>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <img src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/ml_sdviij.png"
                                        width="30px" class="img-fluid ml-2">
                                </div>
                                <div class="col-10">
                                    <h5>MACHINE LEARNING</h5>
                                    <P>Develop programs that can access data and utilize it to automatically
                                        learn and improve from experience
                                    </P>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <img src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/ui-ux_xq64bx.png"
                                        width="50px" class="img-fluid">
                                </div>
                                <div class="col-10">
                                    <h5>UI / UX DESIGN</h5>
                                    <P>Put your UX/UI Design skills to test and sharpen it as you design
                                        exciting User Interfaces for great User Experience.</P>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <img src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/dm_bxzzr2.png"
                                        width="50px" class="img-fluid">
                                </div>
                                <div class="col-10">
                                    <h5>DIGITAL MARKETING</h5>
                                    <P>Put your UX/UI Design skills to test and sharpen it as you design
                                        exciting User Interfaces for great User Experience.</P>
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
                                            <li>Ruby on Rails</li>
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


                <div class="main-seventh-row">
                    <h4>Our Dedicated Mentors
                    </h4>
                    <section class="mentor-section">
                        <div class="mentor-image">
                            <img src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730807/IMG2_uiu3fj.png">
                            <p>Ryan Thompson</p>
                            <p>web Developer</p>
                        </div>
                        <div class="mentor-image">
                            <img src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730833/IMG4_kvttgt.png">
                            <p>Romina Hadid </p>
                            <p>Marketing Strategist</p>
                        </div>
                        <div class="mentor-image">
                            <img src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730816/IMG3_cerrem.png">
                            <p>Alexander Smith</p>
                            <p>UI/UX Designer</p>
                        </div>
                        <div class="mentor-image">
                            <img src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730816/IMG3_cerrem.png">
                            <p>John Doe </p>
                            <p>Founder and CEO</p>
                        </div>
                    </section>
                    <div>
                        <button class="button--midBlue cta-button" id="mentorButton">
                            <a href="mentorpage.php">See more</a>
                        </button>
                    </div>
                </div>

                <div class="main-eighth-row">
                    <div class="row_8">
                        <div class="row_8--one">
                            <h4>HNG 6.0 Internship
                            </h4>
                            <p><i>.....the journey so far</i></p>
                            <p>The HNG 6.0 Internship commenced 9th September, 2019 and ended 17th November, 2019.</p>

                            <p>
                                A well-planned, coordinated event where young talented folks from across the globe
                                participated remotely and were involved in learning key skills needed to becoming the
                                best
                                globally in programming, design thinking, machine learning and digital marketing.
                            </p>

                            <div>
                                <a href="hng6.php">
                                    <i class="fa fa-angle-right "></i>Learn more</a>
                            </div>

                        </div>

                        <div class="row_8--two">
                            <img src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730841/IMG5_prmueb.png">
                        </div>
                    </div>
                </div>

                <div class="support">
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
                                    <a href="donate.php" class="text-light">Get Started</a>
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
                                    <a href="donate.php" class="text-light">Get Started</a>
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
                                    <a href="donate.php" class="text-light">Get Started</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sponsor">
                    <h2 class="text_center blue-text">HNG 6.0 Internship Sponsors</h2>
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
                    <button class="cta-button button--midBlue">
                        <a href="donate.php" class="text_center">Become Sponsor</a>
                    </button>
                </div>

            </main>

        </div>
    </section>
    <?php include('fragments/site_footer.php'); ?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script src="js/main.js"></script>
<div id="jumptotop"><em></em></div>
<script src="./js/scroll-to-top.js"></script>

<script>
    let accord_target = $(".card-header");
    let accord_body = accord_target.next();
    for (let i = 0; i < accord_target.length; i++){
        $(accord_target[i]).on("click", function (){
        $(this).next().toggle();
        $(this).toggleClass("activeHomepageDrop")
    })
    }

</script>

</html>