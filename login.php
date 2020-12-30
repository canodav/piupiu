<?php
include_once "partials/header.php";
include "includes/db.inc.php";
?>

    <div class="login-form">
        <h1>Signup</h1>
        <form action="includes/login.inc.php" method="post" >
            <label for="username">Username or Email</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <br>
            <input type="submit" value="submit">
        </form>
    </div>



<?php
include_once "partials/footer.php";
?>