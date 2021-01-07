<?php
include_once "partials/header.php";
include_once "classes/Posts.class.php";
include_once "classes/Users.class.php";

$result = Users::getUserById(6);
echo $result["name"];

?>

<section class="pius-links">
    <div class="wrapper">
        <h1>Pius</h1>
        <?php
        $a = Posts::postsToHtml();
        print_r($a);
        ?>
    </div>

</section>



<?php



include_once "partials/footer.php";
?>
