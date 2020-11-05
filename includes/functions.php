<?php
function pdo_connect_mysql(){
    $database_host = 'localhost';
    $database_user = 'root';
    $database_pass = 'minister';
    $database_name = 'NamForum';
    try {
    return new PDO('mysql:host=' . $database_host . ';dbname=' . $database_name . ';charset=utf8', $database_user, $database_pass);
    } catch (PDOException $exception) {
    die ('Failed to connect to database!');
    }
}

function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="styles/poll.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Achievements Voting & Poll System</h1>
            <a href="poll.php"><i class="fas fa-poll-h"></i>Polls</a>
    	</div>
    </nav>
EOT;
}

function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
