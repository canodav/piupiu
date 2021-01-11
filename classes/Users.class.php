<?php


class Users{

    public function __construct(){

    }

    public static function getUserById($id){
        include_once 'includes/db.inc.php';

        if (!isset($conn)){
            header("location:uppost.php?error=dbErrorUserId");
            exit();
        }

        $query = "SELECT * FROM users WHERE id = $id";

        $result = $conn->query($query);


        $conn->close();

        return mysqli_fetch_array($result);

    }


}