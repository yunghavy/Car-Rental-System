<!DOCTYPE html>
<html>
<head>
	<title> Change Password</title>
    <link rel="stylesheet" href="style_change_pass.css">
</head>
<body>
<div class="form-wrapper">
<div class="header">
	<h2>Update Password Form</h2>
    <p> Enter the email address you signed up with</p>

			<form id="forgetForm" method="POST">
				<div id="errorMessge" class="alert hidden">                            
				</div>
				<div id="inputSection">
			                   					
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email address..." required />
					</div>
					<div class="form-group">
						<input type="hidden" name="action"  value="forgetPassword" />
						<input type="submit" name="submit" class="btnSubmit" value="Reset Password" />
					</div>
					<div>
					<button type="button" class="btn btn-default" onclick="javascript:history.go(-1)">Back</button>
					</div> 
				</div>
                
             </form>
			 <?php
				if(isset($_POST['submit'])){
					include 'includes/config.php';
					
					$uname = $_POST['email'];
					
					
					$qy = "SELECT * FROM client WHERE email = '$uname'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						
						echo "<script type = \"text/javascript\">
									alert(\"Password request change successful.................\");
									window.location = (\"newpass.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Please enter correct email................\");
									window.location = (\"change_pass.php\")
									</script>";
					}
				}
			?>
            
		</div>
	</div>
</div>
</body>
</html>