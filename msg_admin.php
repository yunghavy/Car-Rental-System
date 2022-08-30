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
						<li><a href="HomePage.php">Home</a></li>
						<li><a href="rules.php">Traffic Rules</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact_us.php">Contact Us</a></li>
					</ul>
					<a href="sign_in.php">Client Login</a>
					<span>|</span>
					<a href="admin_login.php">Admin Login</a>
					<?php
						} else{
					?>
							<ul>
								<li><a href="HomePage.php">Home</a></li>
								<li><a href="offer.php">Offers</a></li>
								<li><a href="fleet.php">View Fleet</a></li>
							</ul>
					<a href="HomePage.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>
<body>
<div class="form-wrapper">

<div class="header">
	<h2>Message Admin</h2>
</div>  
			<form method='POST' action='msg_admin.php'>
			<div class="form-item">
            <textarea name="message" placeholder="Enter Message Here" class="txt"></textarea>	
			</div>
			<div class="form-item">
            <td><input type="submit" name="send" value="Send Message"></td>
			</div>
			</form>
            <?php
					if(isset($_POST['send'])){
						include 'includes/config.php';
						
						$message = $_POST['message'];
						
						$qry = "INSERT INTO message (message,client_id,time,status)
							VALUES('$message','$_SESSION[email]',NOW(),'Unread')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Message Successfully Send\");
											window.location = (\"after_msg_admin.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Message Not Send. Try Again\");
											window.location = (\"msg_ad,.php\")
											</script>";
							}
					}
				?>
</div>
</body>
</html>