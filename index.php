<?php 
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
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Header -->
			<header id="header">          
				<nav>
				<?php
					if(!$_SESSION['email'] && (!$_SESSION['pass']))
					{
				?>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="trafficrules.html">Traffic Rules</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact_us.php">Contact Us</a></li>
							<li><a href="sign_in.php">Client Login</a></li>
							<li><a href="admin_login.php">Admin Login</a></li>
							<li><a href="#menu">Menu Bar</a></li>
						</ul>
				<?php
					} 
					else
					{
				?>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="status_view.php">View Status</a></li>
							<li><a href="msg_admin.php">Message Admin</a></li>
							<li><a href="admin/logout.php">Logout</a></li>
							<li><a href="#menu">Menu Bar</a></li>
						</ul>
				<?php
					}
				?>
				</nav>					
			</header>
 
			<h1 class="logo"> Car Rental<br> System</h1>

		

			<!-- Menu -->
			<nav id="menu">
				<h2>Menu</h2>
				<ul>
					<li><a href="index.php" class="active">Home</a></li>

					<li><a href="offer.php">Offers</a></li>

					<li><a href="fleet.php">Fleet</a></li>

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
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img class="d-block w-100" src="img/banner1 (2).jpg" alt="First slide">
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="images/slider-image-2-1920x700.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="images/slider-image-3-1920x700.jpg" alt="Third slide">
					</div>
			</div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>

				<br>
				<br>

				<div class="inner">
					<!-- About Us -->
					<header id="inner">
						<h1 class= "text-center">Rent a car at low prices</h1>
						<p>Welcome to Car Rental System. Making life easier for our customers with innovative products, extraordinary levels of service and our award winning loyalty programme, Gold Plus Rewards.We are the world's most global car rental company. A trusted provider of vehicles for hire. By the day, the week or the month.  And we've got you covered. We are here to get you there.</p>
					</header>

					<br>

					<h2 class="h2 text-center">Offers</h2>

					<!-- Offers -->					
					<section class="tiles">
					<?php
						$styl = 1;
						$getcars = mysqli_query($conn, "select * from cars where category = 'Offer'") or die(mysqli_error($conn));
						while($fcars = mysqli_fetch_array($getcars))
						{
					?>
							<article class="<?php echo 'style'.$styl; ?>">
								<span class="image">
									<img src="cars/<?php echo $fcars['image']; ?>" alt="<?php echo $fcars['car_name']; ?>" />
								</span>
								<a href="book_car.php?carid=<?php echo $fcars['car_id']; ?>">
									<h2><?php echo $fcars['car_name']; ?></h2>								
									<p>price from: <strong>Kshs. <?php echo number_format($fcars['hire_cost']); ?></strong> <?php echo $fcars['cost_unit']; ?></p>
									<?php
										if($fcars['status'] == "Unavailable")
										{
											echo'<h1> Booked </h1>';
										}
									?>
								</a>
							</article>
					<?php
							if($styl == 6)
							{
								$styl = 0;
							}
							else
							{
								$styl ++;
							}							
						}
					?>
					</section>

					<p class="text-center"><a href="#">View Offers &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

					<br>

					<h2 class="h2 text-center">Fleet</h2>

					<!-- Fleet -->
					<section class="tiles">
					<?php
						$styl = 1;
						$getcars = mysqli_query($conn, "select * from cars where category = 'Fleet'") or die(mysqli_error($conn));
						while($fcars = mysqli_fetch_array($getcars))
						{
					?>
							<article class="<?php echo 'style'.$styl; ?>">
								<span class="image">
									<img src="cars/<?php echo $fcars['image']; ?>" alt="<?php echo $fcars['car_name']; ?>" />
								</span>
								<a href="book_car.php?carid=<?php echo $fcars['car_id']; ?>">
									<h2><?php echo $fcars['car_name']; ?></h2>								
									<p>price from: <strong>Kshs. <?php echo number_format($fcars['hire_cost']); ?></strong> <?php echo $fcars['cost_unit']; ?></p>
								</a>
							</article>
					<?php
							if($styl == 6)
							{
								$styl = 0;
							}
							else
							{
								$styl ++;
							}							
						}
					?>
					</section>

					<p class="text-center"><a href="fleet.php">View Fleet &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

					<br>

					<h2 class="h2 text-center">Blog</h2>
					
					<div class="row">
						<div class="col-sm-4 text-center">
							<img src="images/nairobi.jfif" class="img-fluid" alt="" />

							<h2 class="m-n"><a href="nairobiplaces.html">Places to visit in Nairobi</a></h2>

							<p> VisitKenya &nbsp;|&nbsp; 12/07/2022 </p>
						</div>

						<div class="col-sm-4 text-center">
							<img src="images/uber.jfif" class="img-fluid" alt="" />

							<h2 class="m-n"><a href="uber.html">Uber driver interrupts ride to save people from burning building</a></h2>

							<p> Maanya Sachdeva  &nbsp;|&nbsp; 21/08/2022 </p>
						</div>

						<div class="col-sm-4 text-center">
							<img src="images/bravo-1-750x430.jpg" class="img-fluid" alt="" />

							<h2 class="m-n"><a href="dollardepreciates.html">United Cars Price Decreased After Dollar Depreciates</a></h2>

							<p> Omar Faruq &nbsp;|&nbsp; 18/08/2022 </p>
						</div>
					</div>

					<p class="text-center"><a href="blog.html">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

					<br>

					<h2 class="h2  text-center">Testimonials</h2>
					
					<div class="row">
						<div class="col-sm-6 text-center">
							<p class="m-n"><em>"I was very pleased with the service I received from this agency. The car was excellent too."</em></p>

							<p><strong> - Christian Wambugu</strong></p>
						</div>

						<div class="col-sm-6 text-center">
							<p class="m-n"><em>"Good experience from pick-up to return. Our quot was honored, and we were given an upgrade at no additional cost."</em></p>

							<p><strong>-Lizah Otieno</strong> </p>
						</div>
					</div>

					<p class="text-center"><a href="testimonials.html">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>
				</div>
			</div>
		</div>


					
		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>