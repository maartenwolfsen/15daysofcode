<footer>
    <span>
        <a href="/" title="Home">15 Days of Code</a>
        <span class="footer-separator">&bull;</span>
        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) : ?>
            <a href="/inc/account/logout.php" title="Logout">Sign out</a>
        <?php endif; ?>
        <span class="footer-separator">&bull;</span>
        <a class="github-link" href="https://github.com/maartenwolfsen" target="_blank">
            <img src="/images/github.png" alt="Github">
        </a>
        Created by <a href="https://mwolfsen.nl" title="Author">Maarten Wolfsen</a>
        <span class="footer-separator">&bull;</span>
        a <a href="https://github.com/maartenwolfsen/15daysofcode"
             target="_blank"
             title="Github Repository">Open-Source Project</a>
        <form action="https://www.paypal.com/donate" method="post" target="_blank">
            <input type="hidden" name="hosted_button_id" value="8TF52SPHGU79E">
            <input type="image"
                   src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif"R
                   name="submit"
                   title="PayPal - The safer, easier way to pay online!"
                   alt="Donate with PayPal button">
            <img alt="" src="https://www.paypal.com/en_NL/i/scr/pixel.gif" width="1" height="1">
        </form>
    </span>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="/js/main.js"></script>
</footer>
