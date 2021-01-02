<?php

include_once "logfuncs.inc.php";
include_once "db.inc.php";

if (!isset($conn)){
    header("location:../signup.php?error=dbError");
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];



if(emptyInput($username, $username, $password, $password, $username)){
    header("location:../signup.php?error=emptyInputs");
    exit();
}

login($conn, $username, $username ,$password);