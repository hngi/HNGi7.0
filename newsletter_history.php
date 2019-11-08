<?php
require 'classControllers/init.php';
// check if session is set
if(!isset($_SESSION["role"])) {
    header('Location:login.php');
}


$newsletter = new Subscribers();

$all_news = $newsletter->fetch_newsletter();


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>News Update Archive</title>
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="css/dashboard.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/newsletter_history.css">

    <style type="text/css">
        .card {
            height: 150px;
            background: #f3f3f3;
            margin: 15px;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            font-size: 20px;
            box-shadow: 1px 0 4px rgba(0,0,0,0.3);

        }

        .card p{
            font-weight: bolder;
            font-size: 35px;
        }

        @media (max-width: 400px) {
   .heading {
    margin-top: 50px !important;
    font-size: 18px !important;
   }
  }
    </style>

</head>
<body>
<main>
    <section id="overview-section">
        <h1 class="heading">News Update Archive</h1>
        <p><a href="delete_newsletter.php" class="btn btn-danger">Delete News</a></p>
        <hr>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <?php
                            if(is_array($all_news)){
                                foreach ($all_news as $all_new){
                                    ?>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="cards">
                                            <div class="image">
                                                <img src = "uploads/newsletter/<?php echo $all_new['image'];?>" alt="image" class="image img-responsive">
                                            </div><br>
                                            <div class="heading">
                                                <h3 style="color: white"><strong><?php echo $all_new['title'];?></strong></h3>
                                                <p><?php echo substr(strip_tags($all_new['content']),0,100);?>... </p>
                                            </div>
                                            <div class="para">
                                                <p>Originally Published <?php echo $all_new['date_created'];?>, Updated <?php echo $all_new['date_updated'];?></p>
                                                <a href="read_news.php?id=<?php echo $all_new['id'];?>" class="button">READ MORE</a>
                                            </div>

                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>


    </section>
</main>

<input type="checkbox" id="mobile-bars-check" />
<label for="mobile-bars-check" id="mobile-bars">
    <div class="stix" id="stik1"></div>
    <div class="stix" id="stik2"></div>
    <div class="stix" id="stik3"></div>
</label>
<?php include('fragments/sidebar.php'); ?>

</body>
</html>
<script  type="text/javascript" src="js/sidebar.js"></script>
<script type="text/javascript" src="js/dashboard.js"></script>
