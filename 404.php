<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/header-footer.css">
        <link rel="icon" type="img/png" href="images/hng-favicon.png">
        <title>404:Page Not Found</title>
        <style>
            /*navbar styles*/
            header{
                background-color:#D1F0F6;
                padding-bottom: 2rem;
            };
            .navbar-brand img{
                 width: 100%;
                 height: 100;
                 margin: 0 auto;
            }
            .error-container{
                margin-top: 100px;
                align-items: center;
                border: 1px purple;
                flex-grow: 1;
                display: flex;
                flex-direction: column;
            }
            button{
                color: white;
                border-radius: 3px;
                padding: 0.5rem 1rem;
                background-color: #00AEFF;
                outline: none;
                border: none;
                transition: 0.4s ease-out;
                font-size: 20px;
                text-decoration: none;
            }
            a{
                color: #fff;
                
            }
            h1{
                margin-bottom: 20px;
                font-size: 100px;
            }
            p{
                font-size: 20px;
                font-weight: 400px;
            }
        </style>
    </head>
    <body>
        <section class="container-fluid">
        <?php include "fragments/site_header.php"?>

        <div class="error-container">
            <h1>4&#128562;4 </h1>
            <h3> 404 - PAGE NOT FOUND</h3>
            <P> <i>The page you are looking for is currently <br> under maintenance. Please come back later.</i> </P>
            <button><a href="index" id="join-hng" class="def-button">HOME</a></button>
        </div>
        </section>
    </body>
</html>
