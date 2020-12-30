<?php
include_once "partials/header.php";
include "includes/db.inc.php";
?>

    <div class="login-form">
        <h1>Signup</h1>
        <form action="includes/signup.inc.php" method="post" >
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
            <br>
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
            <br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <br>
            <label for="rptpassword">Repeat Password</label>
            <input type="password" id="rptpassword" name="rptpassword">
            <br>
            <input type="submit" value="submit">
        </form>
    </div>



<?php
include_once "partials/footer.php";
?>