<?php
    try{
    $m = new MongoClient();
    //echo "Connection to database Successfull!";echo"<br />";

    $db = $m->user;
    //echo "Database user selected";
    $collection = $db->userdata;
    //echo "collection userdata selected successfully";
    }
    catch (Exception $e){
        die("Error. Couldn't connect to the server. Please Check");
    }
?>
