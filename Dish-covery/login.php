<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISH-COVERY - Login</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="login-container">
        <h2>DISH-COVERY</h2>
        <form id="signupForm" method="POST" action="userdash.php">
            <label for="username">LOGIN</label>
            <input type="text" id="username" name="username" required placeholder="Email">
            <input type="password" id="password" name="password" required placeholder="Password">
            <div class="g-recaptcha" data-sitekey="6Lf7EmMqAAAAAHMqBjFN_tnKRfRihEqnWA8Hmitz"></div>
            <button type="submit">Login</button>
        </form>

        <div class="links">
            <a href="recover.php" class="signup-link">Recover Password</a>
            <br>
            <a href="signup.php" class="signup-link">Don't have an account? <span class="blue-text">Sign up </span> here</a>
        </div>
    </div>
</body>
</html>
