<?php if (isset($_GET["day"])) : ?>
    <?php include "days/day" . $_GET["day"] . ".php" ?>
<?php else : ?>
    <?php include "selector.php" ?>
<?php endif; ?>
