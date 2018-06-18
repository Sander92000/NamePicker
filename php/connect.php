<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "root";
$dbName = "Name";

$dbcon = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

if(!$dbcon){
    die("Could not connect to database");
}

?>
