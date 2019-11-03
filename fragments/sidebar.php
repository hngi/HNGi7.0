<section id="sidebar">

<div class="badger">
			<h5 id="admin-badge">ADMINISTRATOR</h5>
		</div>
		<div class="nav">
<div id="upper">
		
		<?php
		    if($_SESSION["hasPic"] == "no") {
		        // admin has NO picture, show default
		        echo '<img src="adminProfilePics/default.jpg" height="90px" width="90px"/>';
		    } else if($_SESSION["hasPic"] == "yes"){
		        // admin has picture
		        echo '<img src="adminProfilePics/'.$_SESSION["admin_id"].'.jpg" class="img-circle img-responsive" height="90px" width="90px" />';
		    }
		?>


		<!-- <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722683/mentors-first_qlquq9.png" height="110px"> -->
		<div id="username"><?php echo $_SESSION["fullname"]; ?></div>
	</div>
	<hr id="hr1">
	<nav id="lower">
		<a class="active" href="dashboard.php">Dashboard</a>
		
		<a href="admins.php">Admins</a>
		
		<a href="registered_mentors.php">Mentors</a>
		
		<a href="registered_interns.php">Interns</a>
		
		<a href="internreview.php">Reviews</a>
    
    <a href="news_update.php">News Update</a> <!--Added news update to admin menu-->
		
		<a href="updateCountdown.php">Countdown</a>
		
		<a href="registered_sponsors.php">Sponsors</a>
		
        <?php
			if($_SESSION["role"] == 1) {
			    '<a href="admins.php">Admins</a>';

			}
		?>

		<!-- <select>
			<option selected="selected" disabled="disabled">Overview</option>
			<option value="0">Mentors</option>
			<option value="1">Users</option>
		</select>
		<a href="#">Advanced</a> -->
		
		<a href="./logout.php">Logout</a>
	</nav>
		</div>
	
		
</section>
