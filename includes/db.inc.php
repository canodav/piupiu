<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "piupiu";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn){
    die("Connection failed " . mysqli_connect_error());
}

?>

