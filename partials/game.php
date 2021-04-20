<div class="game-container">
    <?php if (isset($_GET["day"])) : ?>
        <?php include "days/day" . $_GET["day"] . ".php" ?>
        <a class="back-to-selector"
           href="/game.php"
           title="Back to Selector"><span class="arrow">&#x276E;</span>Back to Day Selector</a>
    <?php else : ?>
        <?php include "selector.php" ?>
    <?php endif; ?>
</div>
