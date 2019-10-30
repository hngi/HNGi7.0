<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/newContact.css">
    <link rel="stylesheet" href="css/faq.css">
    <style>
        myaccordion {
            box-shadow: 0 0 1px rgba(51, 8, 8, 0.1);
            margin: 0 auto;
            max-width: 750px;
        }
        
        .myaccordion .card,
        .myaccordion .card:last-child .card-header {
            border: none;
            
        }
        
        .myaccordion .card-header {
            border-bottom-color: #EDEFF0;
            background: transparent;
        }
        
        .myaccordion .fa-stack {
            font-size: 20px;
        }
        
        .myaccordion .btn {
            width: 100%;
            font-weight: bold;
            color: #00AEFF;
            padding: 0;
            font-weight: 600;
            font-size: 20px;
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
            padding: 20px;
        }
        
        .myaccordion .btn-link:hover,
        .myaccordion .btn-link:focus {
            text-decoration: none;
        }
        
        .myaccordion li+li {
            margin-top: 20px;
         
        }

        @media screen and (max-width:500px){
            .body-container {
                margin: 0;
            }
        }
    </style>

</head>

    <body>
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
    </div>
    <div class="col-md-12 text-black">
        <div class="container">
            <div id="accordion" class="myaccordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                When will the internship start?
                                <span class="fa-stack fa-sm">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-angle-down fa-stack-1x fa-inverse"></i>
                                </span>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <p class="text-muted"> The official date for HNGi7 will be communicated later when adequate preparations have been made.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                When will the internship start?
                                <span class="fa-stack fa-2x">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-angle-down fa-stack-1x fa-inverse"></i>
                                </span>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <p class="text-muted">
                                The official date for HNGi7 will be communicated later when adequate preparations have been made.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">  
                                When will the internship start?
                                <span class="fa-stack fa-2x">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-angle-down fa-stack-1x fa-inverse"></i>
                                </span>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <p class="text-muted">
                                The official date for HNGi7 will be communicated later when adequate preparations have been made.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                When will the internship start?
                                <span class="fa-stack fa-2x">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-angle-down fa-stack-1x fa-inverse"></i>
                                </span>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            <p class="text-muted">
                                The official date for HNGi7 will be communicated later when adequate preparations have been made.
                            </p>
                        </div>
                </div>
            
                    </div>
                </div>
            </div>
        </div>
    </div>
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
 


    </div>    
    <?php include('fragments/site_footer.php'); ?>

</body>
<!-- <script>
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
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
</html>
