<?php
session_start();
$database_host = 'localhost';
$database_user = 'root';
$database_pass = 'minister';
$database_name = 'NamForum';

$con = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
if (mysqli_connect_errno()) {

	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {

	exit('Please complete the registration form!');
}

if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {

	exit('Please complete the registration form');
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email is not valid!');
}

if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
    exit('Username is not valid!');
}

if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	exit('Password must be between 5 and 20 characters long!');
}


if ($stmt = $con->prepare('SELECT user_id, user_pass FROM users WHERE user_name = ?')) {

	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();

	if ($stmt->num_rows > 0) {

		echo 'Username exists, please choose another!';
	} else {

if ($stmt = $con->prepare('INSERT INTO users (user_name, user_pass, user_email) VALUES (?, ?, ?)')) {

	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
	$stmt->execute();
	header('Location: ../home.php');
//	echo 'You have successfully registered, you can now login!';
} else {

	echo 'Could not prepare statement!';
}
	}
	$stmt->close();
} else {

}
$con->close();
?>
