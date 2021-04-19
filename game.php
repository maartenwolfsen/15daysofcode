<?php session_start(); ?>
<?php include "bootstrap.php" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>15 Days Of Code - Learn code, day by day</title>
        <?php include "./partials/head.php" ?>
    </head>
    <body class="default-layout">
        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) : ?>
            <?php include "./partials/game.php" ?>
        <?php else: ?>
            <?php include "./partials/account/login.php" ?>
        <?php endif; ?>
        <?php include "./partials/footer.php" ?>
    </body>
</html>