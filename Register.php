<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    
    <title>Register</title>
    <link rel="stylesheet" href="style_register.css">
</head>

<body>

<div class="container">
<div class="row">
<div class="col-md-4 offset-md-4">
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="Register.php">
	
	<div class="input-group">
		<label>Full Name:</label>
		<input type="text" name="fname" required>
	</div>
    <div class="input-group">
		<label>Phone Number:</label>
		<input type="text" name="phone" required>
	</div>
	<div class="input-group">
		<label>Email Address:</label>
		<input type="email" name="email" required >
	</div>
    <div class="input-group">
		<label>National ID:</label>
		<input type="text" name="id_no" required>
	</div>
    <div class="input-group">
				<label for="gender">Choose Gender</label>
                <select id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
                </select>
	</div>
	<div class="input-group">
		<label>Location</label>
		<input type="text" name="location">
	</div>
	
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="sign_in.php">Sign in</a>
	</p>
    <?php
						if(isset($_POST['register_btn'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','Available')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"sign_in.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"#\")
											</script>";
							}
						}
						
					  ?>			
</form>

</div>
</div>
</div>

</body>
</html>