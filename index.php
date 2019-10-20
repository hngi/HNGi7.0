<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The HNG Internship</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <style>
        @media screen and (max-width: 700px){
          .main-first-row, .main-fourth-row {
            margin: 0 auto;
          }

          .main-third-row .card1-container {
            display : block;
          }

          .main-third-row .card1-container .card1 {
            margin : 10px auto;
          }

          .main-fourth-row {
          width: 85%;
          padding-right: 0px;

          }
        }
    </style>
</head>

<body class="container-fluid">
    <div id="scroll-down-arrow" class="animated bounceInUp" onclick="scrollWin()">
        <i class="fas fa-arrow-down"></i>
    </div>
    <img src="https://bit.ly/2OC3tWo" id="corner-circle" alt="Graphic at the top right corner">
    <div class="containerGrid">
        <?php
          include('fragments/site_header.php');
        ?>
         <main>
            <div class="main-first-row">
                <div class="welcome-column">
                    <h1 id="welcome-text" class="text__dark-blue">
                        Welcome to <br> HNG 7.0 Internship
                    </h1>
                    <p id="welcome-story">
                        The HNG Internship is an ambitious attempt to change the way education is done in Africa. It’s
                        the bridge between learning to code, and becoming the best in the world.
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
                <div class="dee" id="countdown-circles-container">
                    <div class="countdown__item">
                        <p class="countdown__number" id="days"></p>
                        <p class="text_center countdown__subText">DAYS</p>
                    </div>
                    <div class="countdown__item">
                        <p class="countdown__number" id="hours">23</p>
                        <p class="text_center countdown__subText">HOURS</p>
                    </div>
                    <div class="countdown__item">
                        <p class="countdown__number" id="minutes">52</p>
                        <p class="text_center countdown__subText">MINUTES</p>
                    </div>
                    <div class="countdown__item">
                        <p class="countdown__number" id="seconds">41</p>
                        <p class="text_center countdown__subText">SECONDS</p>
                    </div>
                </div>

            </div>

            <div class="main-third-row text_center">
                <div class="">
                    <h3 class="subheading text__dark-blue" style = "font-weight: bold">
                        Unleash Your Creativity
                    </h3>
                </div>
                <div class="card1-container">
                    <div class="card1">
                        <img class="card1-image" src="https://bit.ly/33gP99W" alt="">
                        <h5 class="card1-heading text__dark-blue">Remote Learning</h5>
                        <p class="card1-text">
                            The HNG internship is a 3-month remote internship designed to find and develop the most
                            talented software developers.
                        </p>
                    </div>
                    <div class="card1">
                        <img class="card1-image" src="https://bit.ly/2IAGSFN" alt="">
                        <h5 class="card1-heading text__dark-blue">Collaborate with Creatives</h5>
                        <p class="card1-text" id="tess">
                            The HNG internship is a 3-month remote internship designed to find and develop the most
                            talented software developers.
                        </p>
                    </div>
                    <div class="card1">
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
                <h3 id="how-it-works">How Does It Work ?</h3>
                <div class="section-2">
                    <div class="section-2-sections-container">
                        <div class="half-a-row">
                            <h4 class="mh4" style="color: darkblue; padding-bottom: 20px">Apply To Become An Intern</h4>
                            <p class="content">The HNG internship is a 3-month remote internship designed to find and
                                develop
                                the most talented software developers. Everyone is welcomed to participate (there is no
                                entrance exam).
                                Anyone can log into the internship using their laptop. Each week we give tasks.
                          
            
                                <button class="cta-button-4 button--midBlue" onclick="location.href='join-intern.php'" type="button">Get Started</button>
                        </div>
                        <div class="half-a-row">
                            <table>
                                <thead>
                                    <tr style="padding: 0">
                                        <th style="padding: 1.5em 1.5em" colspan="2">Event Calendar</th>
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

                    <div class="section-2-sections-container">
                        <div class="half-a-row">
                            <img class="intern-meet"
                                src="https://res.cloudinary.com/chux/image/upload/v1570646194/Rectangle_4.6_vfbtwb.png"
                                alt="interns" />
                        </div>
                        <div class="half-a-row">
                            <h4 class="" style="color: darkblue; padding-bottom: 20px">Onboard And Connect With Teammates</h4>
                            <p class="content">The HNG internship is a 3-month remote internship designed to find and
                                develop
                                the most talented software developers. Everyone is welcomed to participate (there is no
                                entrance exam).
                                Anyone can log into the internship using their laptop. Each week we give tasks.</p>
                            <button class="cta-button-4 button--midBlue" type="button"><a href="join-intern.php">Get
                                    Started</a></button>
                        </div>
                    </div>

                </div>
            </div>

            
            <div class="main-fifth-row">
                <div class="row">
                    <div class="text-center text-md-left col-12 col-md-6 col" style="padding-top: 35px;">
                        <h4 style="color: darkblue; padding-bottom: 20px">Build Scalable Products & Grow</h4>
                        <p class="content">The HNG Internship is a 3-months remote
                            internship designed to find and develop the most talented software developers.
                            Everyone is welcoming to participate(there is no entrance exam). Anyone can log into
                            the internship using their laptop. Each week, we give tasks.</p>


                        <button class="button--midBlue cta-button">
                            <a href="join-intern.php">Get Started</a></button>
                    </div>

                    <div class="col-12 mt-md-5 mt-lg-0 col-md-6 ">
                        <div class="row">
                            <div class="col-12 myImage" style="padding-bottom: 6em; padding-top: 12px">
                                <img style="width:100%;"
                                    src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730626/img1_cpa8nj.png">
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="container-fluid mt-2" id="wrapper">
                <div class="row">
                  <div class="col-12">
                    <h4 class="text-center mt-5">One of the Best Learning Curriculums in the World</h4>
                    <section>
                      <div class="container">
                        <div class="row">
                          <div class="col-md-6 col-sm-12 mt-5 mb-5">
                            <div class="row">
                              <div class="col-2">
                                <img src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/frontend_hzyzio.png"
                                  width="50px" class="img-fluid">
                              </div>
                              <div class="col-10">
                                <h5>FRONT END</h5>
                                <P>Put your Frontend skills to test and sharpen it further as you turn exciting UI Designs into
                                  stunning web pages.</P>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-2">
                                <img src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/backend_orn4az.png"
                                  width="50px" class="img-fluid">
                              </div>
                              <div class="col-10">
                                <h5>BACK END</h5>
                                <P>Put your backenend skills to test and sharpen it by building scalable, logic driven applications
                                  with world class technologies.</P>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-2">
                                <img src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/ml_sdviij.png"
                                  width="30px" class="img-fluid ml-2">
                              </div>
                              <div class="col-10">
                                <h5>MACHINE LEARNING</h5>
                                <P>Develop programs that can access data and utilize it to automatically learn and improve from
                                  experience</P>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-2">
                                <img src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/ui-ux_xq64bx.png"
                                  width="50px" class="img-fluid">
                              </div>
                              <div class="col-10">
                                <h5>UI / UX DESIGN</h5>
                                <P>Put your UX/UI Design skills to test and sharpen it as you design exciting User Interfaces for
                                  great User Experience.</P>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-2">
                                <img src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/dm_bxzzr2.png"
                                  width="50px" class="img-fluid">
                              </div>
                              <div class="col-10">
                                <h5>DIGITAL MARKETING</h5>
                                <P>Put your UX/UI Design skills to test and sharpen it as you design exciting User Interfaces for
                                  great User Experience.</P>
                              </div>
                            </div>
            
                          </div>
                          <div class="col-md-6 col-sm-12 mb-5 mt-5">
                            <div class="accordion" id="accordionExample">
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                    <img class="btn btn-link"  data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne"
                                      src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png"
                                      class="arrow1">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                      aria-expanded="true" aria-controls="collapseOne"> Frontend Development </button>
                                  </h2>
                                </div>
            
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                  data-parent="#accordionExample">
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
                              </div>
            
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h2 class="mb-0">
                                    <img class="btn btn-link collapsed buttonTwo"  data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                      src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png">
                                    <button class="btn btn-link collapsed buttonTwo" type="button" data-toggle="collapse"
                                      data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Backend
                                      Development </button>
                                  </h2>
                                </div>
            
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <ul class="list-unstyled text-dark accordion_tab">
                                        <li>PHP</li>
                                        <li>Python</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingThree">
                                  <h2 class="mb-0">
                                    <img class="btn btn-link collapsed buttonThree"  data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                                      src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png">
                                    <button class="btn btn-link collapsed buttonThree" type="button" data-toggle="collapse"
                                      data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Machine
                                      Learning </button>
                                  </h2>
                                </div>
            
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                  data-parent="#accordionExample">
                                  <div class="card-body">
                                    <ul class="list-unstyled text-dark accordion_tab">
                                        <li>Java</li>
                                        <li>Python</li>
                                        <li>C++</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingFour">
                                  <h2 class="mb-0 ">
                                    <img class="btn btn-link collapsed buttonFour"  data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"
                                      src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png">
                                    <button class="btn btn-link collapsed buttonFour" type="button" data-toggle="collapse"
                                      data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> UI/UX Design
                                    </button>
                                  </h2>
                                </div>
            
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                  data-parent="#accordionExample">
                                  <div class="card-body">
                                      <ul class="list-unstyled text-dark accordion_tab">
                                    <li>FIGMA</li>
                                      
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingFive">
                                  <h2 class="mb-0">
                                    <img class="btn btn-link collapsed buttonFive"  data-toggle="collapse"
                                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"
                                      src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png">
                                    <button class="btn btn-link collapsed buttonFive" type="button" data-toggle="collapse"
                                      data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> Digital
                                      Marketing </button>
                                  </h2>
                                </div>
            
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                  data-parent="#accordionExample">
                                  <div class="card-body">
                                    <ul class="list-unstyled text-dark accordion_tab">
                                    <li>Social Media</li>
                                    <li>Content Writing</li>                                      
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </section>
                  </div>
                </div>
              </div>


            <div class="container">
                <h4 class="bass" style="padding-top: 4em; text-align: center; color: darkblue; font-size: 24px;">Our Dedicated
                    Mentors</h4>
                <div class="row" style="padding-top: 6em; text-align: center;">
                    <div class="col-6 col-lg-3">
                        <img style="width: 150px; height: 150px; border-radius: 50%;"
                            src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730807/IMG2_uiu3fj.png">
                        <p style=" color: #8898AA;">Ryan Thompson
                            <br>web Developer</p>
                    </div>
                    <div class="col-6 col-lg-3">
                        <img style="width: 150px; height: 150px; border-radius: 50%;"
                            src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730833/IMG4_kvttgt.png">
                        <p style=" color: #8898AA;">Romina Hadid
                            <br>Marketing Strategist</p>
                    </div>
                    <div class="col-6 col-lg-3">
                        <img style="width: 150px; height: 150px; border-radius: 50%;"
                            src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730816/IMG3_cerrem.png">
                        <p style=" color: #8898AA;">Alexander Smith
                            <br>UI/UX Designer</p>
                    </div>
                    <div class="col-6 col-lg-3">
                        <img style="width: 150px; height: 150px; border-radius: 50%;"
                            src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730816/IMG3_cerrem.png">
                        <p style="color: #8898AA;">John Doe
                            <br>Founder and CEO</p>
                    </div>
                </div>
                <div style="text-align: center; padding-top: 20px;">
                    <button class="button--midBlue cta-button" style="margin: 0 auto">
                        <a href="mentorpage.php">See more</a>
                    </button>
                </div>
            </div>


            <div id="leash" class="container-fluid mb-4 px-4">
                <div class="row" style="padding-top: 4em;">
                    <div class="col-12 text-center text-md-left  col-md-6" style="padding-top: 5em;">
                        <h4 style="color: darkblue;letter-spacing: 1.2px; font-weight: bold; font-size: 24px;">HNG 6.0
                            Internship</h4>
                        <p class="lee" style="line-height: 0.4px; color: #8898AA;"><i>.....the journey so far</i></p>
                        <p style="color: #333333; font-style: normal; letter-spacing: 1.1px; padding-top: 20px;">The HNG
                            6.0
                            Internship commenced 23rd
                            April, 2019 and ended 5th October, 2020.</p>

                        <p
                            style="color: #333333; font-style: normal; letter-spacing: 1.1px;text-align: justify; padding-top: 20px;">
                            A well-planned, coordinated event where young
                            talented folks from across the globe
                            participated remotely and were involved in
                            learning key skills needed to
                            becoming the best globally in programming,
                            design thinking, machine learning and digital
                            marketing.</p>

                        <div class="mb-3" style="padding-top: 35px;">
                        <a style="color:#00AEFF;" href="hng6.php">

                        <i class="fa fa-angle-right px-1" style="color:#00AEFF; border:1px solid #00AEFF; background-color: white; border-radius: 50%; "></i>Learn more</a></div>

                    </div>

                    <div class="col-12 col-lg-6">
                        <img style="width: 100%;"
                            src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730841/IMG5_prmueb.png">
                    </div>
                </div>
            </div>

            <section id="support" class="support">
                <div class="support__header">
                    <h3 class="support__header-text text-light">Support the Movement</h3>
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
                                <a href="donate.html" class="text-light">Get Started</a>
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
                                <a href="donate.html" class="text-light">Get Started</a>
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
                                <a href="donate.html" class="text-light">Get Started</a>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="sponsors">
                <h3 class="sponsors__header">HNG 6.0 Internship Sponsors</h3>
                <div class="sponsors_images_container">
                    <div class="sponsors__images">                       
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730789/hostelPic_u2oqax.png" class=" hng_logo" alt="HNG Logo">
                              </div>
                              <div class="carousel-item">
                                <img src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730696/akwa-ibom_crs3gb.png" class=" akwa_logo" alt="Government of Akwa Ibom logo">
                              </div>
                              <div class="carousel-item">
                                <img src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730861/imo-logo_xepy5p.png" class=" akwa_logo" alt="Government of Imo logo">
                              </div>
                              <div class="carousel-item">
                                <img src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730875/VerifiPic_dhgplz.png" class=" verifi_logo" alt="Verifi logo">
                              </div>
                              <div class="carousel-item">
                                <h4 class="figma_logo">Figma</h4>
                              </div>
                              <div class="carousel-item">
                                <img src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730716/flutterwave_fkjzd7.png" class=" flutter_logo" alt="Flutterwave logo">
                              </div>
                              <div class="carousel-item">
                                <img src="https://res.cloudinary.com/chibuogwu/image/upload/v1570730701/BluePic_ujoey7.png" class=" bluechip_logo" alt="Bluechip logo">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>

                    </div>
                </div>

                <div class="sponsors_button">
                    <button class="cta-button button--midBlue">
                        <a href="donate.html">
                          Become a Sponsor
                        </a>
                    </button>
                </div>
            </section>
            <?php include('fragments/site_footer.php'); ?>
        </main>

    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"
    crossorigin="anonymous"></script>
    <script>
        var scrollArrow = document.querySelector('#scroll-down-arrow');
        function scrollWin() {
            window.scrollBy(0, 500);
            console.log(window.scrollY)
            if (window.scrollY >= 5000) {
                scrollArrow.style.display = "none";
            }
        }
        const hideArrow = (event) => {
            if (window.scrollY >= 5000) {
                scrollArrow.style.display = "none";
            }
        }
        window.addEventListener('scroll', (event) => hideArrow(event))
    
        const displayArrow = (event) => {
            if (window.scrollY < 5000) {
                scrollArrow.classList.add('bounceInDown')
                scrollArrow.style.display = "block";
            }
        }
        window.addEventListener('scroll', (event) => displayArrow(event))
    </script>
    <script>
    const hamburger = document.getElementById("hamburger");
    const aside = document.getElementsByTagName("aside")[0];
    const hide_aside = document.getElementsByClassName("hide-aside")[0];
    var mediaQuery = window.matchMedia("(max-width: 960px)");
    var slideIndex = 0;

    showSlides(mediaQuery);
    mediaQuery.addListener(showSlides);


    //const cards = document.getElementsByClassName("card1");
    function showSlides(mediaQueryx) {
        var i;

        var cards = document.getElementsByClassName("card1");
        if (mediaQuery.matches) {

            //var dots = document.getElementsByClassName("dot");
            for (i = 0; i < cards.length; i++) {
                cards[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > cards.length) { slideIndex = 1 }

                cards[i].style.display = "block";
            }

        }

    }
    //handle sroll to top arrow
$('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
     target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { 
            return false;
          } else {
            $target.attr('tabindex','-1'); 
            $target.focus(); 
          };
        });
      }
    }
  });

</script>
<script>
        //darkangel cc.
        const daysElem = document.querySelector('#days'), //Edit this selector to pick the days element in your HTML.
    hoursElem = document.querySelector('#hours'),
    minutesElem = document.querySelector('#minutes'),
    secondsElem = document.querySelector('#seconds'),
    countDownWrapper = document.querySelector('.countdown'); //This is the counter that wraps all 4 numbers.

// Set the date we're counting down to
var countDownDate = new Date("Jan 1, 2020 22:0:0").getTime();

function updateClock() {
  // Get today's date and time
  var now = new Date().getTime();
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
  // Time calculations for days, hours, minutes and seconds
  var daysLeft = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hoursLeft = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutesLeft = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var secondsLeft = Math.floor((distance % (1000 * 60)) / 1000);
    // Display the results.
    daysElem.innerText = daysLeft;
    hoursElem.innerText = hoursLeft;
    minutesElem.innerText = minutesLeft;
    secondsElem.innerText = secondsLeft;
  // If the count down is finished, write some text
  if (distance < 0) {
    document.getElementById("demo").innerHTML = "EXPIRED";
    return;
  }
  setTimeout(updateClock, 1000);
}
updateClock();
</script>
</body>

</html>

