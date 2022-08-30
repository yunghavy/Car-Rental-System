<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Payment</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="fa fa-car"></span> <span class="title">CAR RENTAL SYSTEM</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php">Home</a></li>

							<li><a href="offer.php">Offers</a></li>

							<li><a href="fleet.php" class="active">Fleet</a></li>

							<li>
								<a href="#" class="dropdown-toggle">About</a>

								<ul>
									<li><a href="about.html">About Us</a></li>
									<li><a href="team.html">Team</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="testimonials.html">Testimonials</a></li>
									<li><a href="faq.html">FAQ</a></li>
									<li><a href="terms.html">Terms</a></li>
								</ul>
							</li>
							<li><a href="contact_us.php">Contact Us</a></li>
						</ul>
					</nav>
 <!-- Main -->
 <div id="main">
						<div class="inner">
							<h1>PAY VIA MPESA</h1>

							<div class="image main">
								<img src="images/banner-image-7-1920x500.jpg" class="img-fluid" alt="" />
							</div>
<body>
			
	<section class="search">
		<div class="form-wrapper">
			<form action="#" method="get">
				<input type="text" id="search" name="search" placeholder="What are you looking for?"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

		


	<section class="listings">
	<div class="form-wrapper">
<div class="header">
	<h2>Make Payment Here</h2>
	<h5>Paybill Number: 00000</h5>
				<h6>Business Number: ID Number Registered with.</h6>
</div>
			<form method='POST'>
			<div class="form-item">
			<input type="text" name="mpesa" placeholder="Enter Mpesa ID" required>	
			</div>
			<div class="form-item">
			<input type="text" name="id_no" placeholder="Enter National ID"required>
			</div>
			<h2>Enter Dates</h2>
			<div class="form-item">
			<input type="date" name="fromDate" placeholder="Enter From Date"required>
			</div>
			<div class="form-item">
			<input type="date" name="toDate" placeholder="Enter To Date"required>
			</div>
			<input type="submit" name="pay" value="Submit Details">
		</form>
		
				<?php
						if(isset($_POST['pay'])){
							include 'includes/config.php';
							$mpesa = $_POST['mpesa'];
							$id_no = $_POST['id_no'];
							$toDate = $_POST['toDate'];
							$fromDate = $_POST['fromDate'];
							
							$qry = "UPDATE client SET mpesa = '$mpesa' WHERE id_no = '$id_no'";
							$query ="INSERT INTO hire (id_no,hire_id,client_id,car_id,status,fromDate,toDate) 							
							VALUES('$_GET[hire_id]','$id_no','$_GET[client_id]','$_GET[car_id]','Pending','$toDate','$fromDate')";
							$result = $conn->query($qry);
							$result = $conn->query($query);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Payment Successfully Done. Wait for Admin Approval\");
											window.location = (\"wait.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\" Payment Failed. Try Again\");
											window.location = (\"pay.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
			<div class="more_listing">
				<a href="fleet.php" class="more_listing_btn">View More Listings</a>
			</div>
		</div>
	</section>	<!--  end listing section  -->
	</section>	<!--  end listing section  -->
	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

	