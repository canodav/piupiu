<?php


/**
 * @param $name
 * @param $username
 * @param $email
 * @param $password
 * @param $rptpassword
 * @return bool: Returns true if there is a empty input
 */
function emptyInput($name, $username, $email, $password, $rptpassword){
    if(!isset($name) || !isset($username) || !isset($email) || !isset($password) || !isset($rptpassword)){
        return true;
    }
    return false;
}


/**
 * ctype_alnum returns true if all characters of a string are digits or letters
 * @param $username
 * @return bool: returns true if all characters of a string are digits or letters.
 */
function invalidUsername($username){
    return !ctype_alnum($username);
}

/**
 * @param $email
 * @return bool: Checks if an email is correct "name@domain.es"
 */
function invalidEmail($email){
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}

function invalidPassword($password, $rptpassword){

    if(strcmp($password, $rptpassword) != 0){
        return true;
    }
    return false;
}

function userExists($conn, $username, $email){

    $query = "SELECT * FROM `users` WHERE `username` = ? OR `email` = ?;";

    $stmt = $conn->prepare($query);

    $stmt->bind_param("ss", $username, $email);

    $stmt->execute();

    $result = $stmt->get_result();

    print_r($result);

    if ($row = mysqli_fetch_array($result)) {
        return $row;
    } else {
        return false;
    }

}


function createUser($conn ,$name, $username, $email, $password){

    $query = "INSERT INTO `users`(`name`, `username`, `email`, `password`) VALUES (?,?,?,?)";

    $stmt = $conn->prepare($query);

    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

    $stmt-> bind_param("ssss", $name, $username, $email, $hashedPass);

    $stmt->execute();
    $stmt->close();

    header("location:../login.php?error=none");
    exit();


}

function login($conn, $username, $email, $password){

    $row = userExists($conn, $username, $email);

    if($row === false){
        header("location:../signup.php?error=userNotFound");
        exit();
    }

    $hashedPassword = $row["password"];


    $checkPass = password_verify($password, $hashedPassword);

    if ($checkPass == false){
        header("location:../signup.php?error=incorrectPassword");
        exit();
    }
    else if ($checkPass == true){
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["id"] = $row["id"];


        header("location:../index.php?error=none");
        exit();
    }



}
