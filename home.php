<?php
session_start();
if (!isset($_SESSION['loggedin'])){
  header('Location: ../loginform.php');
  exit;
}
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

<link rel="stylesheet" type="text/css" href="styles/topnav.css"/>
<title>Home</title>
</head>
<body>
  <div class="topnav">
    <a class="active" href="home.php">Home</a>
    <a href="news.php">News</a>
    <a href="achievements.php">Achievements</a>
    <a href="poll.php">Polls</a>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
    <a href="includes/signout.php">Sign Out</a>
    <a>Welcome <?=$_SESSION['name']?>!</a>
</div>


</body>

</html>
<?php include 'includes/footer.php' ?>
