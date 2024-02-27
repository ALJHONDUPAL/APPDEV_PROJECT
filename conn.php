<?php
    $host = "127.0.0.1";
    $user = "root";                     
    $pass = "";                                  
    $db = "appdev_db";
    $port = 3306;
    $con = mysqli_connect($host, $user, $pass, $db, $port) or die(mysqli_connect_error());
?>