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
    <link rel="stylesheet" href="css/newContact.css">
    <link rel="stylesheet" href="css/faq.css">
    <link rel="icon" type="img/png" href="images/hng-favicon.png">


</head>

<body>
    <section class="container-fluid">
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
                <p id="Menu1" style="display: none;" class="paragraph">The official date for HNGi7 will be communicated later when adequate preparations have been made</p>
                <a href="##" onclick="toggleVisibility('Menu2');">Who can apply for the internship?</a>
                <p id="Menu2" style="display: none;" class="paragraph">Everyone is welcomed to participate (there is no entrance exam).You just have to register and get prepared for the internship. Each week tasks are given out and successful interns are promoted to next stages</p>
                <a href="##" onclick="toggleVisibility('Menu3');">Does the internship offers certificate?</a>
                <p id="Menu3" style="display: none;" class="paragraph">Yes, certificates are offerred to interns who successfully complete task to a certain stage on the internship .</p>
                <a href="##" onclick="toggleVisibility('Menu4');">How long will the internship last?</a>
                <p id="Menu4" style="display: none;" class="paragraph">The HNG Internship is a 3-months remote internship.</p>
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
    <?php include('fragments/site_footer.php'); ?>


    </section>
</body>
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
</html>