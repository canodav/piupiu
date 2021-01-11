<?php

include "classes/Users.class.php";

class Posts{

    private $db;
    
    public function __construct(){

    }


    public static function getPosts(){

        include_once 'includes/db.inc.php';

        if (!isset($conn)){
            header("location:index.php?dbError");
            exit();
        }

        $query = "SELECT * FROM piu ORDER BY `date` DESC ";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $result = $stmt->get_result();


        while($row = mysqli_fetch_array($result)) {
            global $pius;
            $pius[] = $row;
        }
        $conn->close();
        return $pius;
    }


    public static function postsToHtml(){

        $posts = self::getPosts();
        echo "postToHtml <br>";
        $html = "";

//        Users::getUserById(6);

        foreach ($posts as $post){
            $html .=
                "<div class='piu'>
                    <h1>" . $post["user"] . "</h1>
                    <p>" . $post["text"] . "</p>
                    <img src=". "uploads/"  . $post["img"] . " width='300px' height='200px'>
                    <p>" . $post["date"] . "</p>
                </div> <br>";

        }

        return $html;
    }

}