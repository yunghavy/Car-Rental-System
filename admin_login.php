<!DOCTYPE html>
<html>
<head>
	<title> Admin Side</title>
    <link rel="stylesheet" href="style_sign_in.css">
</head>
<body>
<div class="form-wrapper">
<div class="header">
	<h2>Admin Login Area</h2>
</div>  
			<form method='POST' action='admin_login.php'>
			<div class="form-item">
            <input type="text" name="uname" placeholder="Enter Username" required>	
			</div>
			<div class="form-item">
            <input type="password" name="pass" placeholder="Enter Password" required>
			</div>
			<input type="submit" name="login" value="LOGIN" class="btn-login"/>
		</form>
	    
        <?php
				if(isset($_POST['login'])){
					include 'includes/config.php';
					
					$uname = $_POST['uname'];
					$pass = $_POST['pass'];
					
					$query = "SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									alert(\"Welcome Admin.................\");
									window.location = (\"admin/index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"login.php\")
									</script>";
					}
				}
			?>
			
  </div>
  
</div>
</body>

</html>