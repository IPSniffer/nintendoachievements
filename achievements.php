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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<title>Home</title>
</head>
<body>
  <div class="topnav">
    <a href="home.php">Home</a>
    <a href="news.php">News</a>
    <a class="active" href="achievements.php">Achievements</a>
    <a href="poll.php">Polls</a>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
    <a href="includes/signout.php">Sign Out</a>
    <a>Welcome <?=$_SESSION['name']?>!</a>
</div>

<div class="w3-row-padding w3-padding-16 w3-center" id="games">
    <div class="w3-quarter">
      <img src="img/earthbound.jpg" alt="Earthbound" style="width:100%">
      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="img/supermetroid.jpg" alt="Super Metroid" style="width:100%">
      <h3>Let Me Tell You About This Steak</h3>
      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="img/a-link-to-the-past-4.jpg" alt="The Legend of Zelda: A Link to the Past" style="width:100%">
      <h3>Cherries, interrupted</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      <p>What else?</p>
    </div>
    <div class="w3-quarter">
      <img src="img/mariobros3.jpg" alt="Super Mario Bros.3" style="width:100%">
      <h3>Once Again, Robust Wine and Vegetable Pasta</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
  </div>




</body>

</html>
<?php include 'includes/footer.php' ?>
