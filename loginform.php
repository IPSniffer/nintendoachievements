<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles/loginform.css" />
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <form action="includes/authenticate.php" method="post">
      <label for="username">
        <i class="fas fa-user"></i>
      </label>
      <input type="text" name="username" placeholder="Username" id="username" required>
      <label for="password">
        <i class="fas fa-lock"></i>
      </label>
      <input type="password" name="password" placeholder="Password" id="password" required>
      <input type="submit" value="Login">
    </form>
  </div>
</body>
<?php
include 'includes/footer.php'
 ?>

</html>
