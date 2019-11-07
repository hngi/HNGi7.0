<?php
require 'classControllers/init.php';

if(!isset($_GET['id'])){
    header("location:index.php");
}

$id = $_GET['id'];
$news = new Subscribers();
$the_news = $news->fetch_the_newsletter($id);

if(!is_array($the_news)){
    header("location:index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $the_news['title'];?> - Learn More</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="css/read_news.css">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
</head>
<body>    
    
<div class="container">
    <div class="header">
        <div class="image">
            <img src="uploads/newsletter/<?php echo $the_news['image'];?>" alt="<?php echo $the_news['title'];?> image">
        </div>
    </div>   
        <figure>
            <blockquote><strong><?php echo $the_news['title'];?></strong><br> on <?php echo $the_news['date_created'];?></blockquote>
        </figure>
    <div class="para"> 
        <p>
            <?php echo $the_news['content'];?>
        </p>

    </div>
    <hr>
</div>
</body>
</html>