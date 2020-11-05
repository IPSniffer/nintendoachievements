<?php
$server = 'localhost';
$username = 'root'
$password = 'minister'
$database = 'NamForum'

if(!mysqli_connect($server, $username, $password))
{
    exit('Error: could not establish database connection');
}
if(!mysqli_select_db($database))
{
    exit('Error: could not select the database');
}
?>
