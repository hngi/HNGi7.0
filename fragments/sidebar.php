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
	<div class="menu">
		<li class="item" id="dashboard">
			<a href="dashboard.php" class="btns menu-headings"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
		</li>
		<li class="item" id="users">
			<a href="#users" class="btns menu-headings"><i class="fas fa-users"></i>Users<span class="chevron"></span></a>
			<div class="submenu">
				<a href="admins.php"><i class="fas fa-user-shield"></i>Admins</a>
				<a href="registered_interns.php"> <i class="fas fa-user-graduate"></i>Interns</a>
				<a href="registered_mentors.php"><i class="fas fa-hands-helping"></i>Mentors</a>
				<a href="registered_sponsors.php"><i class="fas fa-hand-holding-usd"></i>Sponsors</a>
			</div>
		</li>

		<li class="item" id="features">
			<a href="#features" class="btns menu-headings"><i class="fas fa-tools"></i>Features<span class="chevron"></span></a>
			<div class="submenu">
				<a href="internreview.php"><i class="fas fa-history"></i>Reviews</a>
				<a href="updateCountdown.php"><i class="far fa-clock"></i>CountDown</a>
				<a class="news" href="news_update.php" ><i class="far fa-newspaper"></i>News Update</a>
			</div>
		</li>
        <?php
			if($_SESSION["role"] == 1) {
			    '<a href="admins.php">Admins</a>';

			}
		?>

		
		<li class="item">
			<a href="./logout.php" class="btns"><i class="fas fa-sign-out-alt"></i>Logout</a>
		</li>
     </div>
	
		
       
    
		
</section>
