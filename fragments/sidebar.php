<section id="sidebar">
		<div id="upper">
			<img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722683/mentors-first_qlquq9.png" height="100px">
			<div id="username"><?php echo $_SESSION["fullname"]; ?></div>
			<em>Admin</em>
		</div>
		<nav id="lower">
			<a href="index.php">Home </a>
            <a href="dashboard.php">Dashboard</a>
			<a href="registered_mentors.php">Mentors</a>
			<a href="registered_interns.php">Interns</a>
			<?php 
				if($_SESSION["role"] == 1) {
				?>
					<a href="admins.php">Admins</a>
				<?php
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
	</section>
