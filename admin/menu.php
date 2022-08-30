<?php
	error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../admin_login.php");
	}
?>
<div id="top">
			<h1><a href="index.php">CarRentalSystem</a></h1>
			<div id="top-navigation">
				Welcome <a href="index.php"><strong>Administrator</strong></a>
				<span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
<div id="navigation">
			<ul>
			    <li><a href="index.php"><span>Dashboard</span></a></li>
			    <li><a href="add_vehicles.php"><span>Vehicle Management</span></a></li>
			    <li><a href="client_requests.php"><span>Hire Requests</span></a></li>
			    <li><a href="index.php"><span>Messages</span></a></li>
				<li><a href="indexx.php"><span>Articles</span></a></li>
			    </ul>
		</div>