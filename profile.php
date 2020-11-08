<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../loginform.php');
	exit;
}
$database_host = 'localhost';
$database_user = 'root';
$database_pass = 'minister';
$database_name = 'NamForum';

$con = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $con->prepare('SELECT user_pass, user_email FROM users WHERE user_id = ?');

$stmt->bind_param('i', $_SESSION['user_id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="styles/profile.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Nintendo Achievements</h1>
				<a href="profile.php"><i class="fa fa-user-circle"></i>Profile</a>
				<a href="includes/signout.php"><i class="fa fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>
