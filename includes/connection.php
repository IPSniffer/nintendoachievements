<?php
$server = 'localhost';
$username = 'binary'
$password = 'minister'
$database = 'NamForum'

if(!mysql_connect($server, $username, $password))
{
    exit('Error: could not establish database connection');
}
if(!mysql_select_db($database))
{
    exit('Error: could not select the database');
}
?>
