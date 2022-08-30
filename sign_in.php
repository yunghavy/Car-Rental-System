<!DOCTYPE html>
<html>
<head>
	<title> Client sign in</title>
    <link rel="stylesheet" href="style_sign_in.css">
</head>
<body>
<div class="form-wrapper">
<div class="header">
	<h2>Sign in</h2>
</div>  
			<form method='POST' action='sign_in.php'>
			<div class="form-item">
				<input type="email" name="email"  placeholder="Enter the User Name/Email" required/>	
			</div>
			<div class="form-item">
				<input type="password" name="pass" placeholder="National ID" required/>
			</div>
			<center>
				<input type="submit" name="login" value="LOGIN" class="btn-login"/>
			</center>
		</form>
	    
    <?php
		session_start();
				if(isset($_POST['login'])){
					include 'includes/config.php';
					
					$uname = $_POST['email'];
					$pass = $_POST['pass'];
					
					$qy = "SELECT * FROM client WHERE email = '$uname' AND id_no = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						$_SESSION['user'] = $row;
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['id_no'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"sign_in.php\")
									</script>";
					}
				}
			?>
            <div class="reminder">
    <p>Not a client? <a href="Register.php">Sign up now</a></p>
    <p><a href="change_pass.php">Update password?</a></p>
  </div>
  
</div>
</body>
</html>