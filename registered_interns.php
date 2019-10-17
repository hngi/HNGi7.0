<?php
require_once 'dbh.php';

$rew = new Database;
$resul = $rew->saveRecords();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>List Of Registered Intern</title>
    <link rel="shortcut icon" href="https://res.cloudinary.com/dekillerj/image/upload/v1570648980/brand-logo.png"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="stylesheet" href="css/join-intern.css">

  </head>
  <body>
    <header>
    <a href="index.html"><img id="hng-logo" src="https://res.cloudinary.com/phiileo/image/upload/v1571147073/brand-logo_tx0mdt.png"></a>
    <input type="checkbox" id="mobile-bars-check" />
        <label for="mobile-bars-check" id="mobile-bars">
          <!--img src="images/bars-icon.png" height="23px"-->
    <div class="stix" id="stik1"></div>
    <div class="stix" id="stik2"></div>
    <div class="stix" id="stik3"></div>
        </label>
    <nav>
      <a href="index.html" class="header-links">Home</a>
      <a href="hng6.html" class="header-links">HNG 6</a>
      <a href="mentorpage.html" class="header-links">Mentors</a>
      <a href="contactform.html" class="header-links">Contact</a>
      <a href="registered_interns.php" id="join-hng" class="def-button">View Registered Interns</a>
    </nav>
  </header>
  <div class="table-responsive">

    <table class="table table-bordered table-condensed table-hover table-sm mr-2 ml-2 mt-1 mb-1">
      <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>PhoneNo</th>
        <th>Link To Portfolio</th>
        <th>Link to CV</th>
        <th>Years of Experience</th>
        <th>Interest</th>
        <th>Location</th>
        <th>Employment Status</th>
        <th>About</th>
        <th>Timestamp</th>
      </tr>
      </thead>
        <!-- Loop condition to view rigestered interns -->
    <?php while ($results = mysqli_fetch_assoc($resul)) :

      ?>
      <tbody>
        <tr>
          <td><?=$results['intern_id'];?></td>
          <td><?=$results['name'];?></td>
          <td><?=$results['email'];?></td>
          <td><?=$results['phone_no'];?></td>
          <td><?=$results['link_to_portfolio'];?></td>
          <td><?=$results['link_to_cv'];?></td>
          <td><?=$results['years_of_experience'];?></td>
          <td><?=$results['interest'];?></td>
          <td><?=$results['current_location'];?></td>
          <td><?=$results['employment_status'];?></td>
          <td><?=$results['about'];?></td>
          <td><?=$results['timestamp'];?></td>
        </tr>
        </tbody>
        <?php endwhile; ?>
    </table>
  </div>

  <footer>

    <p class="center-text darkblue-text">&copy 2019, HGN Internship. All rights reserved.</p>
  </footer>
  </body>
</html>
