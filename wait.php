<<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>WAIT PAGE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="style_msg_admin.css">
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="form-wrapper">

				<!-- Header -->
					<header id="header">
                   
          
            				<h1>Car Rental System</h1>
				
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
								<li><a href="locations.html">Pickup Locations </a></li>
								<li><a href="contact_us.php">Contact Us</a></li>
							</ul>
					<a href="admin/logout.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>
	


	<section class="listings">
		<div class="form-wrapper">
			<ul class="properties_list">
				<h2 style="text-align:center; color:#FF0000; font-family: 'Courier New', Courier, monospace">Thank you for booking with us 
				We will get back to you once we verify your payment.<br>
				An Email will be sent to you regarding the pickup location of your vehicle</h2>
			</ul>
			
		</div>
	</section>	<!--  end listing section  -->
           
	</div>
</body>
</html>
	