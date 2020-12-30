<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PiuPiu</title>
</head>
<body>
    <div class="navbar">
        <div id="left-side">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a>Explore</a></li>

                <li><a href="upload.php">Piu</a></li>
            </ul>
        </div>
        <div id="right-side">
            <ul>
                <?php
                if (isset($_SESSION)){
                    echo "<li><a href='profile.php'>Profile</a></li>";
                    echo "<li><a href='logout.php'>Logout</a></li>";
                }
                else{
                    echo "<li><a href='login.php'>Login</a></li>";
                    echo "<li><a href='signup.php'>Signup</a></li>";
                }
                ?>
            </ul>

        </div>

    </div>