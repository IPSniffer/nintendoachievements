<!DOCTYPE html>

<html>
<body>
<style>
div.a{
	text-align:center;
}
</style>
<title><?php echo Welcome?></title>


<?php
echo'
<body style= "background-color:#2b2a2a;"
'
?>

<?php
include 'includes/banner.php';
?>



<?php
echo' <span style="font-weight: bold; color: red; font-size: 30px";  <b><center> Welcome to the Nintendo Achievement Manager</center></b><br>
'?>
<div class="a" id = "Login">
			<form action="includes/signupverify.php" method="POST">
			Email:
			<input type="text" name="name" placeholder="Username/Email...">
			Password:
			<input type="password" name="pwd" placeholder="Password...">
			<button type="submit" name="submit">Log In</button>
			<span style="font-weight: bold; color: red; font-size: 20px"><br><a href="register.php">Create Account</a></br>
			<span style="font-weight: bold; color: red; font-size: 20px"><a href="#">Forgot Password?</a></br>
</div>



</body>
</html>
