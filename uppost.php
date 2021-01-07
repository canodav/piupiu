<?php
include_once "partials/header.php";
?>

<div class="login-form">
        <h1>Piu</h1>
        <form action="includes/uppost.inc.php" method="POST" enctype="multipart/form-data">
            <input type="text" id="piutext" name="piutext">
            <br>
            <input type="file" id="file" name="file">
            <br>
            <button type="submit" name="submit">Upload</button>
        </form>
    </div>

<?php
include_once "partials/footer.php";
?>
