<!DOCTYPE html>
<html>
<head>
	<title> New Password</title>
    <link rel="stylesheet" href="style_new_pass.css">
</head>
<body>
<div class="form-wrapper">
<div class="header">
	<h2>Change Password Form</h2>
    <p> Enter a new password </p>

    <form name="chngpwd" action="" method="post" onSubmit="return valid();">
<table align="center">
<tr height="50">
<td>Old Password :</td>
<td><input type="password" name="pass" id="opwd"></td>
</tr>
<tr height="50">
<td>New Passowrd :</td>
<td><input type="password" name="npwd" id="npwd"></td>
</tr>
<tr height="50">
<td>Confirm Password :</td>
<td><input type="password" name="cpwd" id="cpwd"></td>
</tr>
<tr>
<td><a href="sign_in.php">Back to login Page</a></td>
<td><input type="submit" name="Submit" value="Change Password" /></td>
</tr>
 </table>
</form>
             <script type="text/javascript">
function valid()
{
if(document.chngpwd.opwd.value=="")
{
alert("Old Password Filed is Empty !!");
document.chngpwd.opwd.focus();
return false;
}
else if(document.chngpwd.npwd.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npwd.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}
</script>
<?php
session_start();
include 'includes/config.php';
if(isset($_POST['Submit']))
{
 $oldpass=($_POST['pass']);
 $uname=$_SESSION['email'];
 $newpassword=($_POST['npwd']);
$sql=mysqli_query($conn,"SELECT id_no FROM client where id_no='$pass' && email='$uname'");
$num=mysqli_fetch_array($sql);
print_r($num);
if($num>0)
{
 $conn=mysqli_query($conn,"UPDATE  client set password ='$newpassword' where id_no='$pass'");
$_SESSION['msg1']="Password Changed Successfully !!" ;

}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>
            
		</div>
	</div>
</div>
</body>
</html>