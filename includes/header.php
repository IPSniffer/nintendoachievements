<!DOCTYPE html>

<html>
<head>
    <title>Nintendo Achievements</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css">
</head>
<body>
<h1>Achievement Forum</h1>
    <div id="wrapper">
    <div id="menu">
        <span style="font-weight: bold; color: red; font-size: 20px"; ><center><a class="item" href="index.php">Home</a> -
        <a class="item" href="/forum/create_topic.php">Create a topic</a> -
        <a class="item" href="/forum/category.php">Create a category</a>
        

        <div id="userbar">

        <div id="userbar">
          <?php
            if($_SESSION['signed_in']){
                echo 'Hello' . $_SESSION['user_name'] . '. Not you? <a href="signout.php">Sign Out</a>';
            }
            else{
                echo '<a href="signin.php">sign in</a> or <a href="register.php">Create an account</a>.';
            }
            ?>
        </div>

      </div>
    </div>
        <div id="content">
</html>
