<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ2</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/newContact.css"> -->
    <link rel="stylesheet" href="css/faq.css">
    <style>
        .accordions {
            margin: 0 auto;
            margin-top: 50px;
             padding-left: 10%;
            width: 90%;
        }
        .accordion {
                /* background-color: #eee; */
                cursor: pointer;
                /* width: 100%;                */
                text-align: left;
                outline: none;
                transition: 0.4s;
                color: #00AEFF;
                font-weight: 600;
                font-size: 20px;
                display: inline-block;
                margin-right: 20px;
                vertical-align: middle;
                padding: 20px;
            

             }

              [class*="fa-angle"] {
                color: #00AEFF;
                 font-size: 30px;
                 vertical-align: middle;
                 font-weight: 600;
             }
        .active, .accordion:hover {
            color: #00AEFF; 
}
        .panel {
        /* padding: 0 18px; */
        display: none;
        background-color: white;
        overflow: hidden;
        width: 60%;
        padding-left: 20px;
        padding-right: 20px;
        }
    </style>

</head>

<body class="">
    <div class="containers-fluid ">
   <div class="header_container">
   <?php include('fragments/site_header.php'); ?>
    <section class="hero pt-4">
        <div class="container">
            <div class="wrap my-5">
                <h1>Frequently Asked Questions
                </h1>
                <p>Here are some of the most frequently asked questions on HNG 7.0</p>
            </div>
        </div>
    </section>
    </div>
    <div class="accordions">
       
    <span class="accordion">When will the internship start? </span>
     <i class="fa fa-angle-down"></i>
   
                 <div class="panel">
                <p>The official date for HNGi7 will be communicated later when adequate preparations have been made</p>
                </div>
       <div class="d-block mb-1"></div>
    <span class="accordion">When will the internship start?</span>
    <i class="fa fa-angle-down"></i>
                <div class="panel">
                <p>Everyone is welcomed to participate (there is no entrance exam).You just have to register and get prepared for the internship. Each week tasks are given out and successful interns are promoted to next stages</p>
                </div>
                <div class="d-block mb-1"></div>
    <span class="accordion">When will the internship start?</span>  <i class="fa fa-angle-down"></i>
                <div class="panel">
                <p>Yes, certificates are offerred to interns who successfully complete task to a certain stage on the internship.</p>
                </div>
                <div class="d-block mb-1"></div>
    <span class="accordion">When will the internship start?</span>  <i class="fa fa-angle-down"></i>
                <div class="panel">
                <p>The HNG Internship is a 3-months remote internship.</p>
                </div>
                
    </div>
    <section class="freq-n">
        <div class="container">
            <div class="wrap" style="width: 100%;">
                <div class="header mb-5">
                    <h1>not a frequently asked question?<br />
                        contact us below
                    </h1>
                </div>
                <form class="inputs-wrap">
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <input type="text" placeholder="Subject">
                    <textarea name="text" id="" cols="" rows="10"></textarea>
                    <input type="submit" id="submit" value="SEND MESSAGE" class="btn btn-block">

                </form>
            </div>
        </div>
    </section>
 
    <?php include('fragments/site_footer.php'); ?>


    </div>
</body>
<script>
        // var acc = document.getElementsByClassName("accordion");
        // var i;

        // for (i = 0; i < acc.length; i++) {
        // acc[i].addEventListener("click", function() {
        //     this.classList.toggle("active");
        //     var panel = this.nextElementSibling;
        //     if (panel.style.display === "block") {
        //     panel.style.display = "none";
        //     } else {
        //     panel.style.display = "block";
        //     }
        // });
        // }

        function eventListener(){
            //get element
            let accordions = document.querySelector('.accordions');

            //add click event to element
            accordions.addEventListener('click' , toggleAccordion)
        }

            function toggleAccordion(e) {
                //get dom element
                let target = e.target;
          
                    if(target.classList.contains('fa-angle-down')){
                     let panel = target.nextElementSibling; 
                    panel.style.display = "block";
                    target.classList.add('fa-angle-up');
                   target.classList.remove('fa-angle-down');
                    }else{ 
                        let panel = target.nextElementSibling;
                    panel.style.display = "none";
                    target.classList.add('fa-angle-down');
                   target.classList.remove('fa-angle-up');
                    }
            }

        
            //call function
            eventListener();
    </script>
</html>