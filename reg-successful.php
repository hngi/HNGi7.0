<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="icon" type="img/png" href="images/hng-favicon.png">

    <style>
        main {
            padding: 50px 15%;
            text-align: center;
        }

        main h3 {
            background-color: green;
            color: white;
            width: auto;
            display: inline-block;
            padding: 13px 40px;
            margin: 30px 10px;
            border-radius: 5px;
        }

        main p {
            font-size: 18px;
        }

        @media screen and (max-width: 560px) {
            main h3 {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <?php include 'fragments/site_header.php';?>

    <main>

    </main>

    <?php include "fragments/site_footer.php";?>

</body>

<script>
    const regStatus = sessionStorage.hng_reg;
    let successText = document.querySelector("main");

    if (regStatus) {
        if (JSON.parse(regStatus)) {
            successText.innerHTML = 
                `<h3>Your registration was successful</h3>
                <p>A mail will be sent to the provided email address once your registration is approved.</p>
                <p><a href="join-intern">Go back</a></p>`
          
        }
    }
    else {
       successText.innerHTML = 
       `<p style="color:red">No Registration has been done</p>
       <a href="join-intern">Go back</a>`
    }
</script>

</html>