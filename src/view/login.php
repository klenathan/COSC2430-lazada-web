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
    <div class="login-poster">
        <div class="homepage">
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;">
                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                        <path d="M0,172v-172h172v172z" fill="none"></path>
                        <g fill="#ffffff">
                            <path d="M86,15.0472l-78.83333,70.9528h21.5v64.5h50.16667v-43h14.33333v43h50.16667v-64.5h21.5zM86,34.33561l43,38.7028v5.79492v57.33333h-21.5v-43h-43v43h-21.5v-63.12826z"></path>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
        <div class="login-form-wrapper">
            <div class="form-wrapper">
                <form action="login/handleLogin" name="login" method="post">
                    <h2>Login</h2>
                    <div class="form-row">
                        <div class="form-label">
                            <label for="username"><b>Username:</b></label>
                        </div>
                        <div class="form-field">
                            <input type="text" name="username" id="username" placeholder="Username" class="input-field" value="<?php
                                                                                                                                echo isset($_SESSION["loginUsername"]) ? $_SESSION["loginUsername"] : "";
                                                                                                                                unset($_SESSION["loginUsername"]);
                                                                                                                                ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">
                            <label for="password"><b>Password:</b></label>
                        </div>
                        <div class="form-field">
                            <input class="input-field" type="password" name="password" id="password" placeholder="Password" required>
                        </div>
                        <div class="login-signup-wrap">
                            <input type="submit" name="loginBtn" id="login-btn" value="Login" class="form-btn">
                        </div>
                        <p id="respond-message">
                            <?php
                            echo isset($_SESSION["err_name"]) ? $_SESSION["err_name"] : "";
                            unset($_SESSION["err_name"]);
                            ?>
                        </p>
                </form>
                <div class="signup-login-link">
                    <a href="/signupdemo">
                        <p>Don't have an account? Sign up now!</p>
                    </a>
                </div>

            </div>

        </div>
</body>

</html>