<?php
	session_start();
	//error_reporting("E-NOTICE");
	include('includes/config.php');
	$carid = $_GET['carid'];
	$getcar = mysqli_query($conn, "select * from cars where car_id = '$carid'") or die(mysqli_error($conn));
	$fcar = mysqli_fetch_array($getcar);
	
	if(isset($_POST['save']))
	{
		$fnm = $_POST['fname'];
		$phn = $_POST['phone'];
		$eml = $_POST['email'];
		$idn = $_POST['id_no'];
		$gdr = $_POST['gender'];
		$loc = $_POST['location'];
		$cid = $_POST['carid'];
		$clid = $_SESSION['user']['client_id'];
		
		mysqli_query($conn, "update cars set status='Unavailable' where car_id='$cid'") or die(mysqli_error($conn));
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>BOOK PAGE</title>
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
					<div style="width:50%;float:left;">
						<img src="cars/<?php echo $fcar['image']; ?>" style="min-width:90%;max-width:98%;" alt="<?php echo $fcar['car_name']; ?>" />
					</div>
					<div style="width:50%;float:right;">
						<h1><?php echo $fcar['car_name']; ?></h1>	
						<?php
							if($fcar['status'] == "Unavailable")
							{
								echo'<h2> This car has been Booked </h2>';
							}
							else
							{
						?>
								<form method="post" action="">
									<table>
										<tr>
											<td>Full Name:</td>
											<td><input type="text" name="fname" required></td>
										</tr>
										<tr>
											<td>Phone Number:</td>
											<td><input type="text" name="phone" required></td>
										</tr>
										<tr>
											<td>Email Address:</td>
											<td><input type="email" name="email" required></td>
										</tr>
										<tr>
											<td>ID Number:</td>
											<td><input type="text" name="id_no" required></td>
										</tr>
										<tr>
											<td>Gender:</td>
											<td>
												<select name="gender">
													<option> Select Gender </option>
													<option> Male </option>
													<option> Female </option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Location:</td>
											<td><input type="text" name="location" required></td>
										</tr>
										
										<tr>
											<td colspan="2" style="text-align:right">
												<input type="hidden" name="carid" value="<?php echo $fcar['car_id']; ?>">
												<input type="submit" name="save" onsubmit="pay.php" value="Submit Details">
												</td>
										</tr>
									</table>
								</form>	
								
							<?php
						
							{
								?>
									<a href="pay.php">Click to Book</a>
								<?php
							}
					
							if(isset($_POST['save'])){
								include 'includes/config.php';
								$fname = $_POST['fname'];
								$id_no = $_POST['id_no'];
								$gender = $_POST['gender'];
								$email = $_POST['email'];
								$phone = $_POST['phone'];
								$location = $_POST['location'];
								
								
								
								$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,car_id,status)
								VALUES('$fname','$id_no','$gender','$email','$phone','$location','$_GET[id]','Pending')";
									
								
								$result = $conn->query($qry);
								if($result == TRUE){
									echo "<script type = \"text/javascript\">
												alert(\"Successfully Registered. Proceed to pay\");
												window.location = (\"pay.php\")
												</script>";
								} else{
									echo "<script type = \"text/javascript\">
												alert(\"Registration Failed. Try Again\");
												window.location = (\"book_car.php\")
												</script>";
								}
							}
						}
						  ?>
						
						
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

	