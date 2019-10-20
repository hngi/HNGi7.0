<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ2</title>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="stylesheet" href="css/faq.css">

    <style>
    
    #socials a {
        display: inline-block;
        margin-top: 10px;   
    }</style>
</head>
<body class="container-fluid">
        <!--header>
            <div class="container">
             <div class="wrap">
                <div class="logo">
                    <img src="images/brand-logo.png" alt="brand">
                </div>
                <div class="nav">
                    <a href="index.html">Home</a>
                    <a href="hng6.html">HNG6</a>
                    <a href="mentorpage.html">Mentors</a>
                    <a href="contactform.html">Contact</a>
                    <a href="join-intern.html" class="nav-btn">
                        Join HNG
                    </a>
                 </div>
             </div>
            </div>
        </header-->

    <!--    <header>-->
    <!--    <a href="index.html"><img id="hng-logo" src="https://res.cloudinary.com/phiileo/image/upload/v1571147073/brand-logo_tx0mdt.png"></a>-->
    <!--    <input type="checkbox" id="mobile-bars-check" />-->
    <!--    <label for="mobile-bars-check" id="mobile-bars">-->
          <!--img src="images/bars-icon.png" height="23px"-->
    <!--    <div class="stix" id="stik1"></div>-->
    <!--    <div class="stix" id="stik2"></div>-->
    <!--    <div class="stix" id="stik3"></div>-->
    <!--    </label>-->
    <!--    <nav>-->
    <!--        <a href="index.html" class="header-links">Home</a>-->
    <!--        <a href="hng6.html" class="header-links">HNG 6</a>-->
    <!--        <a href="mentorpage.html" class="header-links">Mentors</a>-->
    <!--        <a href="contactform.html" class="header-links">Contact</a>-->
    <!--        <a href="join-intern.html" id="join-hng" class="def-button">Join HNG</a>-->
    <!--    </nav>-->
    <!--</header>-->
    
    <?php include('fragments/site_header.php'); ?>
        <section class="hero">
            <div class="container">
                <div class="wrap">
                    <h1>frequently asked questions
                    </h1>
                    <p>Here are some of the most frequently asked questions on HNG 7.0</p>
                </div>
            </div>
        </section>
        <section class="freq">
            <div class="container">
                <div class="wrap">          
                        <a href="##" onclick="toggleVisibility('Menu1');">When will the internship start?</a>
                        <p id="Menu1" style="display: none;" class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                        essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing .</p>
                    <a href="##" onclick="toggleVisibility('Menu2');">Where will the internship start?</a>
                        <p id="Menu2" style="display: none;" class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                        essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing .</p>
                    <a href="##" onclick="toggleVisibility('Menu3');">How will the internship start?</a>
                        <p id="Menu3" style="display: none;" class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                        essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing .</p>
                    <a href="##" onclick="toggleVisibility('Menu4');">Why will the internship start?</a>
                        <p id="Menu4" style="display: none;" class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                        essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing .</p>
                </div>
            </div>
        </section>
        <section class="freq-n">
            <div class="container">
                <div class="wrap" style="width: 100%;">
                    <div class="header">
                        <h1>not a frequently asked question?
                            contact us below
                        </h1>
                    </div>
                    <form class="inputs-wrap">
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Email">
                        <input type="text" placeholder="Subject">
                        <textarea name="text" id="" cols="" rows="10"></textarea>
                        <input type="submit" id="submit" value="SEND MESSAGE">
                        
                    </form>
                </div>
            </div>
        </section>
    <footer>
                <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722444/hng-brand-logo_gnplmq.svg">
            <nav>
            <section>
            <h2 class="skyblue-text">Quick Links</h2>
            <div id="link-list">
          <a href="join-intern.php" class="skyblue-text">Join HNG</a>
          <a href="index.php" class="skyblue-text">About HNG</a>
          <a href="MentorSetUpPage2.php" class="skyblue-text">Become a Sponsor</a>
          <a href="MentorSetUpPage2.php" class="skyblue-text">Sign up as Mentor</a>
          <a href="faq.php" class="skyblue-text">FAQ</a>
          
            </div>
            </section>
            <section id="contact-section">
            <h2 class="skyblue-text">Contact Us</h2>
             <div>
          <a href="tel:+2348123456789">
            <strong>
              Phone: <br />
            </strong>
            +234 812 345 6789
          </a>
          <br />
          <a href="mailto:interns@hng.tech">
            <strong>
              Email: <br />
            </strong>
            interns@hng.tech
          </a>
        ``</div>
            </section>
        <section>
        <h2 class="skyblue-text">Office Address</h2>
        <p id="address">
          3 Birrel Avenue <br /> Sabo, Yaba, <br /> Lagos state
        </p>
            </section>
            <section>
        <h2 class="skyblue-text">Follow Us</h2>
        <div id="socials">
          <a href="https://twitter.com" title="Follow on Twitter!"><img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722900/twitter-logo_m1mgzi.svg"></a>
          <a href="https://facebook.com"><img title="Follow on Facebook!" src="https://res.cloudinary.com/jaycodist/image/upload/v1570722900/facebook-logo_bw1hal.svg"></a>
          <a href="https://dribble.com"><img title="Follow on Dribble!" src="https://res.cloudinary.com/jaycodist/image/upload/v1570722900/dribble-logo_w4vwuz.svg"></a>
        </div>
        </section>
        </nav>
        <p class="center-text darkblue-text">&copy 2019, HNG Internship. All rights reserved.</p>
    </footer>
        
<script>
    var divs = ["Menu1", "Menu2", "Menu3", "Menu4"];
        var visibleDivId = null;
        function toggleVisibility(divId) {
            if (visibleDivId === divId) {
                
            } else {
                visibleDivId = divId;
            }
            hideNonVisibleDivs();
        }
        function hideNonVisibleDivs() {
            var i, divId, div;
            for (i = 0; i < divs.length; i++) {
                divId = divs[i];
                div = document.getElementById(divId);
                if (visibleDivId === divId) {
                    div.style.display = "block";
                } else {
                    div.style.display = "none";
                }
            }
        }
</script>
</body>
</html>
