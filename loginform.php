<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="styles/loginform.css" />
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <form action="includes/authenticate.php" method="post">
      <label for="username">
        <i class="fa fa-user" style="font-size:36px"></i>
      </label>
      <input type="text" name="username" placeholder="Username" id="username" required>
      <label for="password">
        <i class="fa fa-lock" style="font-size:36px"></i>
      </label>
      <input type="password" name="password" placeholder="Password" id="password" required>
      <p><a href="register.php">Create Account?</a></p>
      <input type="submit" value="Login">
    </form>
  </div>
</body>
<?php
include 'includes/footer.php'
 ?>

</html>
