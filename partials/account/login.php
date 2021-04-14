<div class="login-container">
    <div class="content">
        <img class="logo"
             src="/images/logo_trans_text-big.png"
             alt="15 Days Of Code Logo">
        <h1>Sign in</h1>
        <form class="login-form" method="POST" action="/inc/account/login.php">
            <div class="field">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <input type="submit" value="Sign in">
        </form>
</div>