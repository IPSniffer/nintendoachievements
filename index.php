<?php
session_start();
 ?>
<!DOCTYPE html>

<html>
<?php
	include 'includes/banner.php'
?>


<?php
echo'
<body style= "background-color:#2b2a2a;"
'
?>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="styles/button.css" />

</head>
<body>
<form method="post" action="home.php">
<center><button class="button"><span>Get Started</span></button></center>
</form>
</body>
</html>
<?php include 'includes/footer.php' ?>
