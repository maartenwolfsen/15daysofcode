<?php $day = $_GET["day"] ?>
<form class="challenge" method="POST" action="/inc/challenge.php">
    <h1>Challenge 1: Variables in Strings</h1>
    <p>In this challenge, you get 3 strings, stored in 3 variables:</p>

    <div class="code-block">
        <code>$string1 = "Barry";</code><br/>
        <code>$string2 = "Milk";</code><br/>
        <code>$string3 = "Chocolate";</code>
    </div>

    <p>Create a line of PHP code, in which you add the strings in the following sentence:</p>

    <div class="code-block">
        <code>[PLACE $string1 HERE] is trying to make some [PLACE $string3 HERE] [PLACE $string2 HERE].</code>
    </div>

    <p>Also, in this line of PHP code, store the sentence you made in a variable called <code>$sentence</code>.<br/>Don't forget to end with a semicolon!</p>

    <div class="answer">
        <label for="answer">Your answer</label>
        <input id="answer" type="text" name="answer" placeholder="Type your line of code here">
        <input type="hidden" name="day" value="<?= $day ?>">
        <input type="submit" value="Send in answer">
    </div>
</form>
<div class="sources">
    <p>To help you, here are some relevant informational sources:</p>
    <ul>
        <li>
            <a href="https://www.w3schools.com/php/php_variables.asp" target="_blank" rel="nofollow">W3Schools: PHP Variables</a>
        </li>
        <li>
            <a href="https://www.w3schools.in/php/operators/concatenation-operators/" target="_blank" rel="nofollow">W3Schools: PHP Concatenation</a>
        </li>
    </ul>
</div>
