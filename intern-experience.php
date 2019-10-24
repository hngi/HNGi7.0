<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="stylesheet" href="css/intern-experience.css">
    <title>Experience Page</title>
</head>

<body>

    <?php
          include('fragments/site_header.php');
        ?>
    <div class="jumbotron" id="landing-page">
        <div class="">
            <h2>Experience Recap From Past Interns</h2>
            <p class="lead">Testimonies From Ex HNG Internship Finalists</p>
            <a href="#modal-id" data-toggle="modal" class="btn btn-primary">Submit Experience</a> <!--button to add experience-->
        </div>

    </div>

    <!--modal here-->
    <div class="modal fade" id="modal-id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Submit Your HNG Internship Experience</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="submit-experience.php" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Full name</label>
                            <input type="text" name="names" class="form-control" required placeholder="Full Name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="stack">Your Stack</label>
                            <input type="text" name="stack" class="form-control" required placeholder="Your Stack" id="stack">
                        </div>
                        <div class="form-group">
                            <label for="exp">Your Experience</label>
                            <textarea name="experience" class="form-control" required placeholder="Your Experience" id="exp" maxlength="300"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Your Picture(Optional)</label>
                            <input type="file" name="image" accept="image/*">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="ok" class="btn btn-success" value="Submit Experience">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <main>
        <section>
            <section class="mentors-section">
                <div class="wrapper">
                    <div class="wrapper-child"  >
                        <img class="image" src="./Experience_files/Capture03_ynye5x.jpg">
                        <h4>Stephen Azubuike</h4>
                        <p>UI/UX Designer</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis illo vero facilis
                            quaerat eaque dolor? Praesentium, necessitatibus. Aut ratione dolorum ab voluptas
                            doloremque, atque obcaecati?
                        </p>
                    </div>
                    <div class="wrapper-child"  >
                        <img class="image"
                            src="https://res.cloudinary.com/theblvcksamurai/image/upload/v1571787484/phblnnglnch1gzsmgyas.png">
                        <h4>Oluwatoni Atunrase</h4>
                        <p>Web Developer</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis illo vero facilis
                            quaerat eaque dolor? Praesentium, necessitatibus. Aut ratione dolorum ab voluptas
                            doloremque, atque obcaecati?
                        </p>
                    </div>
                    <div class="wrapper-child"  >
                        <img class="image" src="./Experience_files/Capture03_ynye5x.jpg">
                        <h4>Aboagye</h4>
                        <p>Web Developer</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis illo vero facilis
                            quaerat eaque dolor? Praesentium, necessitatibus. Aut ratione dolorum ab voluptas
                            doloremque, atque obcaecati?</p>
                    </div>
                    <div class="wrapper-child"  >
                        <img class="image" src="./Experience_files/Capture01_c3eyb9.jpg">
                        <h4>John Ademoye</h4>
                        <p>Web Developer</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis illo vero facilis
                            quaerat eaque dolor? Praesentium, necessitatibus. Aut ratione dolorum ab voluptas
                            doloremque, atque obcaecati?</p>
                    </div>
                    <div class="wrapper-child"  >
                        <img class="image" src="./Experience_files/Capture02_psr3n9.jpg">
                        <h4>Adeyefa Oluwatoba</h4>
                        <p>Web Developer</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis illo vero facilis
                            quaerat eaque dolor? Praesentium, necessitatibus. Aut ratione dolorum ab voluptas
                            doloremque, atque obcaecati?</p>
                    </div>
                    <div class="wrapper-child"  >
                        <img class="image" src="./Experience_files/Capture03_ynye5x.jpg">
                        <h4>Adolphus Chris</h4>
                        <p>Web Developer</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis illo vero facilis
                            quaerat eaque dolor? Praesentium, necessitatibus. Aut ratione dolorum ab voluptas
                            doloremque, atque obcaecati?</p>
                    </div>
                    <div class="wrapper-child"  >
                        <img class="image" src="./Experience_files/Capture01_c3eyb9.jpg">
                        <h4>Ogundiji Bolade</h4>
                        <p>Web Developer</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis illo vero facilis
                            quaerat eaque dolor? Praesentium, necessitatibus. Aut ratione dolorum ab voluptas
                            doloremque, atque obcaecati?</p>
                    </div>
                    <div class="wrapper-child"  >
                        <img class="image" src="./Experience_files/Capture02_psr3n9.jpg">
                        <h4>Ajayi Jeremiah</h4>
                        <p>Backend Developer</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis illo vero facilis
                            quaerat eaque dolor? Praesentium, necessitatibus. Aut ratione dolorum ab voluptas
                            doloremque, atque obcaecati?</p>
                    </div>
                    <div class="wrapper-child"  >
                        <img class="image" src="./Experience_files/Capture02_psr3n9.jpg">
                        <h4>Patrick Aziken</h4>
                        <p>Software Tester</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis illo vero facilis
                            quaerat eaque dolor? Praesentium, necessitatibus. Aut ratione dolorum ab voluptas
                            doloremque, atque obcaecati?</p>
                    </div>
                    <div class="wrapper-child"  >
                        <img class="image" src="./Experience_files/Capture01_c3eyb9.jpg">
                        <h4>Everitus Olumese</h4>
                        <p>Developer</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis illo vero facilis
                            quaerat eaque dolor? Praesentium, necessitatibus. Aut ratione dolorum ab voluptas
                            doloremque, atque obcaecati?</p>
                    </div>
                    <div class="wrapper-child"  >
                        <img class="image" src="./Experience_files/Capture03_ynye5x.jpg">
                        <h4>Albert Oboh</h4>
                        <p>Web Developer</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis illo vero facilis
                            quaerat eaque dolor? Praesentium, necessitatibus. Aut ratione dolorum ab voluptas
                            doloremque, atque obcaecati?</p>
                    </div>
                    <div class="wrapper-child"  >
                        <img class="image" src="./Experience_files/Capture02_psr3n9.jpg">
                        <h4>Osumgha Chiamaka</h4>
                        <p>Web Developer</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis illo vero facilis
                            quaerat eaque dolor? Praesentium, necessitatibus. Aut ratione dolorum ab voluptas
                            doloremque, atque obcaecati?</p>
                    </div>
            </section>
        </section>
        <?php include('fragments/site_footer.php'); ?>

    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="js/intern-experience.js"></script>
</body>

</html>