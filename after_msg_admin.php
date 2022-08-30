<<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>HomePage</title>
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
								<li><a href="status_view.php">View Status</a></li>
								<li><a href="fleet.php">View Fleet</a></li>
							</ul>
					<a href="admin/logout.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>
 
<body>
<section class="">
	

			

<section class="listings">
		<div class="form-wrapper">
		<h2 style="font-size:25px; text-align:center; color:#CC0000">Thank you for contacting us. We will give you a call shortly.</h2>
			<ul class="properties_list">
			
			</ul>
		</div>
	</section>	<!--  end listing section  -->

           
</div>
</body>
</html>