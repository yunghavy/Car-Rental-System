<!DOCTYPE HTML>
<html>
	<head>
		<title>FLEET PAGE</title>
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
							<h1>Fleet</h1>

							<div class="image main">
								<img src="images/fleet.jpg" class="img-fluid" alt="" />
							</div>
                            <article class="style1">
                            <section class="tiles">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Kshs.'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Make:'.$rws['car_type'];?></a>
						</h1>
						<h2>Car Name/Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
		<div class="col-3">
										<div class="form-group">
				                            <h4>Latest News</h4>
				                        </div>

										<div class="form-group">
				                            <div class="input-group">
				                                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">

				                                <span class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a></span>
				                            </div>
				                        </div>

				                        <br>

				                         <p>
											<img src="images/forgive.jpg" class="img-fluid" alt="" />
											<a href="#">"I Won't Forgive you": Nairobi Woman in Pain as Best Friend Seduces Her Husband, Snatches Her Thursday</a></p>

				                        <p>
											<img src="images/notready.jpg" class="img-fluid" alt="" />
											<a href="#">'Not ready': Taiwan reservists stoic but unprepared for China threat Thursday</a></p>

				                        <p>
											<img src="images/france.jpg" class="img-fluid" alt="" />
											<a href="#">France's Macron looks to 'future' on Algeria trip to mend ties</a></p>

				                        <p>
											<img src="images/kobe.jpg" class="img-fluid" alt="" />
											<a href="#">Jury awards $31 mn damages over Kobe Bryant crash photos</a></p>
										<p>
											<img src="images/fossil.jpg" class="img-fluid" alt="" />
											<a href="#">California set to ban fossil fuel cars by 2035</a></p>

				                        <p>
											<img src="images/tuktuk.jpg" class="img-fluid" alt="" />
											<a href="#">TukTuk Owner Redesigns His Ride with Glass Doors and Windows, Leaves Many in Awe</a></p>

				                        <p>
											<img src="images/uhuru.jpg" class="img-fluid" alt="" />
											<a href="#">Uhuru Kenyatta Sets up Council to Boost Local Motor Vehicle Assembling.</a></p>

				                        <p>
											<img src="images/kra.jpg" class="img-fluid" alt="" />
											<a href="#">Fuel Taxes: KRA Collects Over KSh 134b in 6 Months as Pump Prices Rise.</a></p>
										<p>
											<img src="images/fuel.jpg" class="img-fluid" alt="" />
											<a href="#">EPRA Reviews: New Pipeline Tariffs Could Push Up Fuel Prices, Cost of Living</a></p>

				                        <p>
											<img src="images/safaricom.jpg" class="img-fluid" alt="" />
											<a href="#">Digital Race: Safaricom Hires 400 Developers as Competition Heats Up</a></p>

				                        <p>
											<img src="images/inflation.jpg" class="img-fluid" alt="" />
											<a href="#">Kenyan Manufacturers Warn of Job Losses as Cost of Living Bites: “Inflation is Our Biggest Challenge”</a></p>

				                        <p>
											<img src="images/mobius-3-759x500.jpg" class="img-fluid" alt="" />
											<a href="#">Rubis Energy Kenya is the official service and repair center for the Mobius 3</a></p>
									</div>
								</div>
	</section>	<!--  end listing section  -->
	<!-- Footer -->
	
	<footer id="footer">
						<div class="inner">
							<section>
								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>

								&nbsp;
							</section>

							<ul class="copyright">
								<li>Designed by Jaffer Kimutai</li>
								
							</ul>
						</div>
					</footer>
				

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>