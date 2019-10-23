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
  <style>
  footer {
    width: 100% !important;
  }
  </style>

</head>

<body>
  <div class="container-fluid" style="max-width: 1800px;">
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
        <div id="countdown-circles-container">
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
          <h3 class="subheading text__dark-blue" style="font-weight: bold">
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
        <h3 id="main-fourth-row_text">How Does It Work ?</h3>
        <div class="">
          <div class="section1">
            <div class="myhalf-a-row">
              <h4 class="apply">Apply To Become An Intern</h4>
              <p class="content">The HNG internship is a 3-month remote internship designed to find and
                develop
                the most talented software developers. Everyone is welcomed to participate (there is no
                entrance exam).
                Anyone can log into the internship using their laptop. Each week we give tasks.
              </p>
              <button class="cta-button button--midBlue" id="buttt">
              <a href="join-intern.php" id="butt">Get Started</a>
            </button>
            </div>
            <div class="half-a-row h222">
              <table >
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

          <div class="section2">
            <div class="half-a-row">
              <img class="intern-meet"
                src="https://res.cloudinary.com/chux/image/upload/v1570646194/Rectangle_4.6_vfbtwb.png" alt="interns" />
            </div>
            <div class="half-a-row">
              <h4 class="" style="color: darkblue; padding-bottom: 20px">Onboard And Connect With Teammates</h4>
              <p class="content">The HNG internship is a 3-month remote internship designed to find and
                develop
                the most talented software developers. Everyone is welcomed to participate (there is no
                entrance exam).
                Anyone can log into the internship using their laptop. Each week we give tasks.</p>
              <button class="cta-button button--midBlue" id="buttt">
                <a href="join-intern.php" id="butt">Get Started</a>
              </button>
            </div>
          </div>

        </div>
      </div>


      <div class="main-fifth-row text-align">
        <div class="row">
          <div class="text-center text-md-left col-12 col-md-6 col" style="padding-top: 35px;">
            <h4 style="color: darkblue; padding-bottom: 20px">Build Scalable Products & Grow</h4>
            <p class="content">The HNG Internship is a 3-months remote
              internship designed to find and develop the most talented software developers.
              Everyone is welcoming to participate(there is no entrance exam). Anyone can log into
              the internship using their laptop. Each week, we give tasks.</p>


            <button class="cta-button button--midBlue" id="buttt">
              <a href="join-intern.php" id="butt">Get Started</a>
            </button>
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
                        <img
                          src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/frontend_hzyzio.png"
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
                        <img
                          src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/backend_orn4az.png"
                          width="50px" class="img-fluid">
                      </div>
                      <div class="col-10">
                        <h5>BACK END</h5>
                        <P>Put your backenend skills to test and sharpen it by building scalable, logic driven
                          applications
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
                        <img
                          src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/ui-ux_xq64bx.png"
                          width="50px" class="img-fluid">
                      </div>
                      <div class="col-10">
                        <h5>UI / UX DESIGN</h5>
                        <P>Put your UX/UI Design skills to test and sharpen it as you design exciting User Interfaces
                          for
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
                        <P>Put your UX/UI Design skills to test and sharpen it as you design exciting User Interfaces
                          for
                          great User Experience.</P>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 col-sm-12 mb-5 mt-5 table_accord">
                    <div class="accordion" id="accordionExample">
                      <div class="card" id="card0">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <img onclick="activeDropDown('headingOne')" class="btn" data-toggle="collapse" data-target="#collapseOne"
                              aria-expanded="true" aria-controls="collapseOne"
                              src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png"
                              class="arrow1">
                            <button onclick="activeDropDown('headingOne')" class="btn btn-link collapsed buttonTwo" type="button" data-toggle="collapse"
                              data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Frontend
                              Development </button>
                          </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                        >
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

                      <div class="card" id="card1">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <img onclick="activeDropDown('headingTwo')" class="btn collapsed buttonTwo" data-toggle="collapse" data-target="#collapseTwo"
                              aria-expanded="false" aria-controls="collapseTwo"
                              src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png">
                            <button onclick="activeDropDown('headingTwo')" class="btn btn-link collapsed buttonTwo" type="button" data-toggle="collapse"
                              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Backend
                              Development </button>
                          </h2>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                          >
                          <div class="card-body">
                            <ul class="list-unstyled text-dark accordion_tab">
                              <li>PHP</li>
                              <li>Python</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card" id="card2">
                        <div class="card-header" id="headingThree">
                          <h2 class="mb-0">
                            <img onclick="activeDropDown('headingThree')" class="btn collapsed buttonThree" data-toggle="collapse" data-target="#collapseThree"
                              aria-expanded="false" aria-controls="collapseThree"
                              src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png">
                            <button onclick="activeDropDown('headingThree')" class="btn btn-link collapsed buttonThree" type="button" data-toggle="collapse"
                              data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Machine
                              Learning </button>
                          </h2>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        >
                          <div class="card-body">
                            <ul class="list-unstyled text-dark accordion_tab">
                              <li>Java</li>
                              <li>Python</li>
                              <li>C++</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card" id="card3">
                        <div class="card-header" id="headingFour">
                          <h2 class="mb-0 ">
                            <img onclick="activeDropDown('headingFour')" class="btn collapsed buttonFour" data-toggle="collapse" data-target="#collapseFour"
                              aria-expanded="false" aria-controls="collapseFour"
                              src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png">
                            <button onclick="activeDropDown('headingFour')" class="btn btn-link collapsed buttonFour" type="button" data-toggle="collapse"
                              data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> UI/UX
                              Design
                            </button>
                          </h2>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                        >
                          <div class="card-body">
                            <ul class="list-unstyled text-dark accordion_tab">
                              <li>FIGMA</li>

                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card" id="card4">
                        <div class="card-header" id="headingFive">
                          <h2 class="mb-0">
                            <img onclick="activeDropDown('headingFive')" class="btn collapsed buttonFive" data-toggle="collapse" data-target="#collapseFive"
                              aria-expanded="false" aria-controls="collapseFive"
                              src="https://res.cloudinary.com/oderinde5/image/upload/v1570573242/samples/arrow_lmoyy2.png">
                            <button onclick="activeDropDown('headingFive')" class="btn btn-link collapsed buttonFive" type="button" data-toggle="collapse"
                              data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> Digital
                              Marketing </button>
                          </h2>
                        </div>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
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
              Internship commenced 9th
        September, 2019 and ended 17th November, 2019.</p>

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

                <i class="fa fa-angle-right px-1"
                  style="color:#00AEFF; border:1px solid #00AEFF; background-color: white; border-radius: 50%; "></i>Learn
                more</a></div>

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
      <!-- sponsor section by hayjay -->
      <section>
		<h2 class="center-text blue-text">HNG 6.0 Internship Sponsors</h2>
		<div id="sponsor-flex-top">
			<a href="#"><img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722782/hotels-logo_x3icbw.svg"></a>
			<a href="#"><img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722780/akwa-ibom-logo_yzz8ny.svg"></a>
			<a href="#"><img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722785/imo-logo_rvxpil.svg"></a>
			<a href="#"><img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722788/verifi-logo_nfckrw.svg"></a>
		</div>
		<div id="sponsor-flex-bottom">
			<a href="#"><img src="https://res.cloudinary.com/jaycodist/image/upload/v1570723653/figma-logo_iexfvh.png"></a>
			<a href="#"><img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722855/bluechip-logo_rw62cu.svg"></a>
			<a href="#"><img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722784/flutterwave-logo_nyv9ue.svg"></a>
		</div>
		<p class="center-text"><a href="donate.html" class="def-button shadowed center">Become a Sponsor</a></p>
	</section>
    </main>
    

  </div>
  </div>
  <?php include('fragments/site_footer.php'); ?>
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
  <script src="js/main.js"></script>
  <div id="jumptotop"><span></span></div>
                <script src="./js/scroll-to-top.js"></script>
</body>


</html>
