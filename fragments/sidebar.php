<section id="sidebar">
<div class="badger">
			<h5 id="admin-badge">ADMINISTRATOR</h5>
		</div>
		<div class="nav">
<div id="upper">
		
		<?php
		    if($_SESSION["hasPic"] == "no") {
		        // admin has NO picture, show default
		        echo '<img src="images/uploads/admin/default.jpg" height="90px" width="90px"/>';
		    } else if($_SESSION["hasPic"] == "yes"){
		        // admin has picture
		        echo '<img src="images/uploads/admin/'.$_SESSION["admin_id"].'.jpg" class="img-circle img-responsive" height="90px" width="90px" />';
		    }
		?>


		<!-- <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722683/mentors-first_qlquq9.png" height="110px"> -->
		<div id="username"><?php echo $_SESSION["fullname"]; ?></div>
	</div>
	<div class="menu">
		<li class="item" id="dashboard">
			<a href="dashboard" class="btns menu-headings"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
		</li>
		<li class="item" id="users">
			<a href="#users" class="btns menu-headings"><i class="fas fa-users"></i>Users<span class="chevron"></span></a>
			<div class="submenu">
				<a href="admins"><i class="fas fa-user-shield"></i>Admins</a>
				<a href="registered_interns"> <i class="fas fa-user-graduate"></i>Interns</a>
				<a href="registered_mentors"><i class="fas fa-hands-helping"></i>Mentors</a>
				<a href="registered_sponsors"><i class="fas fa-hand-holding-usd"></i>Sponsors</a>
			</div>
			
		</li>

		<li class="item" id="features">
			<a href="#features" class="btns menu-headings"><i class="fas fa-tools"></i>Features<span class="chevron"></span></a>
			<div class="submenu">
				<a href="internreview"><i class="fas fa-history"></i>Reviews</a>
				<a href="updateCountdown"><i class="far fa-clock"></i>CountDown</a>
				<a href="pending_request"><i class="fas fa-certificate"></i>Certificate</a>
                <a href="incoming_donations"><i class="fas fa-donate"></i>Donations</a>
			</div>
		</li>
		<li class="item" id="news">
			<a href="#news" class="btns menu-headings"><i class="far fa-newspaper""></i>News<span class="chevron"></span></a>
			<div class="submenu">
				<a class="news" href="news_update" ><i class="fas fa-rss-square"></i>Update</a>
				<a class="news" href="newsletter_history" ><i class="far fa-file-archive"></i></i>History</a>
                <a class="news" href="delete_newsletter" ><i class="far fa-trash-alt"></i>Delete</a>
			</div>
			
		</li>
		
        <?php
			if($_SESSION["role"] == 1) {
			    '<a href="admins">Admins</a>';

			}
		?>

		
		<li class="item">
			<a href="./logout" class="btns"><i class="fas fa-sign-out-alt"></i>Logout</a>
		</li>
     </div>
	
		
       
    
		
</section>
