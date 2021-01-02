<?php

include_once "db.inc.php";
include_once "logfuncs.inc.php";

// Initialize variables with form inputs using macro $_POST[].
$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$rptpassword = $_POST["rptpassword"];

if(!isset($conn)){
    header("location:signup.php?error=dbError");
    exit();
}

if (emptyInput($name, $username, $email, $password, $rptpassword)){
    header("location:signup.php?error=emptyInput");
    exit();
}

if (invalidUsername($username)){
    header("location:signup.php?error=invalidUsername");
    exit();
}

if(invalidEmail($email)){
    header("location:signup.php?error=invalidEmail");
    exit();
}

if (invalidPassword($password, $rptpassword)){
    header("location:signup.php?error=invalidPassword");
    exit();
}

if (userExists( $conn, $username, $email)){
    header("location:signup.php?error=userExists");
    exit();
}

createUser($conn, $name, $username, $email, $password);





