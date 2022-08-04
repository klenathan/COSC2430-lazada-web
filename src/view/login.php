<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/login.css">
    <title>Login</title>
</head>
<body>
    <div class="login-form-wrapper">
        <form action="login/handleLogin" name="login" method="post">
            <h1>Login</h1>
            <input type="text" name="username" 
            id="username" placeholder="Username"
            class="input-field"
            value="<?php
            echo isset($_SESSION["loginUsername"]) ? $_SESSION["loginUsername"]: "";
            unset($_SESSION["loginUsername"]);
            ?>"
            required>
            
            <input
            class="input-field" type="password" name="password" 
            id="password" placeholder="Password"
            required>

            <div class="login-signup-wrap">
                <input 
                type="submit" name="loginBtn" 
                id="loginBtn" value="Login" class="form-btn">
                <a href="/signup">
                    <p class="signup-link">Don't have an account? Sign up now!</p>
                </a>
            </div>
            
            <p id="respond-message">
                <?php
                echo isset($_SESSION["err_name"]) ? $_SESSION["err_name"]: "";
                unset($_SESSION["err_name"]);
                ?>
            </p>
        </form>
    </div>
    <div class="login-poster">
        hello
    </div>
</body>
</html>