
<head>
<style>

.dynamic {
    top: 0;
    position: fixed; 
    background: white !important;
    width: 100%;
    padding-right: 10px !important;
    box-shadow: none !important;
}
.navbg {
    background: #ffffff !important;
    transition: background 1s;
    z-index: 5;
}
.navbg2 {
    transition: background 1s;
    z-index: 0;
}
@media screen and (max-width: 960px){
    /* header {
    margin: 0em !important;
} */
header .header-links {
    margin-right: 0px !important;
}

}


</style>
</head>


<header id="header">
    <a href="index.php"><img id="hng-logo"
            src="https://res.cloudinary.com/phiileo/image/upload/v1571147073/brand-logo_tx0mdt.png"
            style="width: 50%" ></a>
    <input type="checkbox" id="mobile-bars-check" />
    <label for="mobile-bars-check" id="mobile-bars">
        <!--img src="images/bars-icon.png" height="23px"-->
        <div class="stix" id="stik1"></div>
        <div class="stix" id="stik2"></div>
        <div class="stix" id="stik3"></div>
    </label>
    <nav  style="height: auto">
        <a href="index.php" class="header-links">Home</a>
        <a href="hng6.php" class="header-links">HNGi 6.0</a>
        <a href="mentorpage.php" class="header-links">Mentors</a>
        <a href="contactform.php" class="header-links">Contact</a>
        <a href="admin_login.php" class="header-links">Login</a>
        <a href="join-intern.php" id="join-hng" class="def-button">Join HNGi7.0</a>
    </nav>
</header>

<script>
 function grabHeight() {
    var D = document;
    return Math.max(
        D.body.scrollHeight, D.documentElement.scrollHeight,
        D.body.offsetHeight, D.documentElement.offsetHeight,
        D.body.clientHeight, D.documentElement.clientHeight
    )
}

 let prev = 0;
 function mainfunc(){
    //prev = pctScrolled;
    var winheight= window.innerHeight || (document.documentElement || document.body).clientHeight;
    var docheight = grabHeight();
    var scrollTop = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop;
    var trackLength = docheight - winheight;
    var pctScrolled = scrollTop/trackLength * 100; 

    if (scrollTop > prev ) {
        document.getElementById("header").classList.add("navbg2");
        document.getElementById("header").classList.remove("navbg");
        document.getElementById("header").classList.remove("dynamic");
        
    } else  {
    
        document.getElementById("header").classList.add("navbg");
        document.getElementById("header").classList.remove("navbg2");
        document.getElementById("header").classList.add("dynamic");

    }
    if(pctScrolled < 0.3) {
        document.getElementById("header").classList.add("navbg2");
        document.getElementById("header").classList.remove("navbg");
        document.getElementById("header").classList.remove("dynamic");
        
    }

    return prev = scrollTop <= 0 ? 0 : scrollTop;
    

 }
 window.addEventListener("scroll", function(){
    mainfunc();

 });

</script>