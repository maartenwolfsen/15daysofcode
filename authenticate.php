<?php

if (isset($_GET["e"])) {
    $errors = (int) trim(htmlspecialchars($_GET["e"]));

    if ($errors > 0) {
        header('Location: /login.php?e=' . $errors);
        exit;
    }
}

session_start();

if (isset($_SESSION['loggedin'])) {
    header('Location: /game.php');
} else {
    header('Location: /login.php');
}

exit;
