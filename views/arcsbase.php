<?php
    session_start();

    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
        header("Location: login.php");
    }
?>

<html>
    <head>

    </head>
    <body>
        <h1>You successfully logged in!</h1>
    </body>
</html>