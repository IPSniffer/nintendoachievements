<?php
session_start();
$database_host = 'localhost';
$database_user = 'root';
$database_pass = 'minister';
$database_name = 'NamForum';

$con = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
if (mysqli_connect_error()){
  exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if (!isset($_POST['username'], $_POST['password'])){
  exit('Please fill both the username and password fields!');
}
if ($stmt = $con->prepare('SELECT user_id, user_pass FROM users WHERE user_name = ?')){
  $stmt->bind_param('s', $_POST['username']);
  $stmt->execute();

  $stmt->store_result();
if ($stmt->num_rows > 0) {
    $stmt->bind_result($user_id, $user_pass);
    $stmt->fetch();

    if (password_verify($_POST['password'], $user_pass)){

      session_regenerate_id();
      $_SESSION['loggedin'] = TRUE;
      $_SESSION['name'] = $_POST['username'];
      $_SESSION['user_id'] = $user_id;
      header('Location: ../home.php');
    }
    else{
      echo 'Incorrect username and/or password!';
    }
}
else {
  echo 'Incorrect username and/or password';
}

  $stmt->close();
}
 ?>
