<h1 class="selector-heading">Select the challenge you want to tackle!</h1>
<div id="selector">
    <?php for ($i = 0; $i < DAYS; $i++) : ?>
        <?php $day = $i + 1 ?>
        <a class="select-day" href="/game.php?day=<?= $day ?>" data-day="<?= $day ?>">
            <div class="inner">
                <h3>Day <?= $day ?></h3>
            </div>
        </a>
    <?php endfor; ?>
</div>