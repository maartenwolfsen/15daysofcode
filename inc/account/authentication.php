<?php

session_start();

require_once '../db/connect.php';

$con = getConnection();

if (mysqli_connect_errno()) {
    header('Location: /game.php?e=1');
    exit;
}

if (!isset($_POST['username'], $_POST['password'])) {
    header('Location: /game.php?e=2');
    exit;
}

if ($stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows <= 0) {
        header('Location: /game.php?e=2');
        exit;
    }

    $stmt->bind_result($id, $password);
    $stmt->fetch();

    if (!password_verify($_POST['password'], $password)) {
        header('Location: /game.php?e=2');
        exit;
    }

    session_regenerate_id();
    $_SESSION['loggedIn'] = true;
    $_SESSION['name'] = $_POST['username'];
    $_SESSION['id'] = $id;

    $stmt->close();

    header('Location: /game.php');
    exit;
}
