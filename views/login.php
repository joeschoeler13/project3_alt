<?php
    session_start();

    $username = "ARCS1";
    $password = "password";

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        header("Location: arcsbase.php");
    }

    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
            $_SESSION['loggedin']= true;
            header("Location: arcsbase.php");
        }
    }
?>

<html>
    <head>

    </head>
    <body>
        <form method="post" action="login.php">
            Username: <br>
            <input type="text" name="Username"><br>
            Password: <br>
            <input type="password" name="Password"><br>
            <input type="submit" value="Log in!">
        </form>
    </body>
</html> 