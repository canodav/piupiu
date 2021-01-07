<?php

session_start();

include_once "db.inc.php";

if (!isset($_SESSION["id"])){
    header("location:../uppost.php?error=notLogged");
    exit();
}

$piuText = $_POST["piutext"];
$piuUser = $_SESSION["id"];

$imgDir = "/uploads";

if(!isset($conn)){
    header("location:../uppost.php?error=dbError");
    exit();
}

if(empty($piuText)){
    header("location:../uppost.php?error=emptyPiu");
    exit();
}

if (strcmp($_FILES["file"]["name"], "") != 0){

    $query = "INSERT INTO `piu` (`text`, `img`, `user`)";
    $fileName = $_FILES["file"]["name"];
    $fileTmpName = $_FILES["file"]["tmp_name"];

    $fileExp = explode(".", "$fileName");
    $fileExt = strtolower(end($fileExp));

    $validExtensions = array("jpg", "jpeg", "png");

    if(!in_array($fileExt, $validExtensions)){
        header("location:../uppost.php?error=invalidExtension");
        exit();
    }
    if ($_FILES["file"]["size"] > 1000000){
        header("location:../uppost.php?error=bigFile");
        exit();
    }
    explode('.', $_FILES["file"]["name"]);

    $newImgName = uniqid("", true) . "." . $fileExt;

    move_uploaded_file($fileTmpName, "..$imgDir/$newImgName");


    $query = "INSERT INTO `piu` (`text`, `user`, `img`) VALUES (?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sis", $piuText, $piuUser, $newImgName);
    $stmt->execute();

    header("location:../index.php?error=none");
    exit();

}
else{
    global $query;
    $query = "INSERT INTO `piu` (`text`, `user`) VALUES (?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $piuText, $piuUser);
    $stmt->execute();
    header("location:../index.php?error=none");
    exit();
}
