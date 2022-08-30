<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo"> Car Rental System</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="trafficrules.html">Traffic Rules</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contact_us.php">Contact Us</a></li>
					</ul>
					<a href="sign_in.php">Client Login</a>
					<span>|</span>
					<a href="admin_login.php">Admin Login</a>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status_view.php">View Status</a></li>
								<li><a href="msg_admin.php">Message Admin</a></li>
							</ul>
					<a href="">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>