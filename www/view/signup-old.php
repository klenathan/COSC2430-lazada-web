<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/signup.css">
    <title>Sign up</title>
</head>
<body>
    <div class="signup-poster">
        <a href="/">Home</a>
    </div>

    <div class="signup-form-wrapper">
        
        <form action="signu p/signupCustomer" name="login" method="post"
        enctype="multipart/form-data">
            
            <h1>SIGN UP</h1> 

            <input class="input-field"  type="text" name="signupUsername" 
            id="signupUsername" placeholder="Username"
            value="<?php
            echo isset($_SESSION["signupUsername"]) ? $_SESSION["signupUsername"]: "";
            ?>"
            required>

            <input class="input-field"  type="email" name="signupEmail" 
            id="signupEmail" placeholder="Email"
            required>

            <input 
            class="input-field" placeholder="Password" 
            type="password" 
            name="signupPassword" 
            id="signupPassword" 
            pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}"
            required>

            <input 
            class="input-field" placeholder="Confirm Password" 
            type="password" 
            name="confirmPassword" 
            id="confirmPassword"
            required>
            
            <div class="password-check-wrap">
                <h2 class="password-check" id="lowercasePassed">Lowercase character</h2>
                <h2 class="password-check" id="uppercasePassed">Uppercase character</h2>
                <h2 class="password-check" id="numberPassed">Number</h2>
                <h2 class="password-check" id="specialCharPassed">Special character</h2>
                <h2 class="password-check" id="lengthPassed">At least 8 characters</h2>
            </div>

            <input type="file" name="avtImg" id="avtImg">

            <input type="submit" name="signupBtn" 
            id="signupBtn" value="Sign Up">


            <p id="respond-message">
                <?php
                echo isset($_SESSION["signup_err"]) ? $_SESSION["signup_err"]: ""; 
                unset($_SESSION["signup_err"]);
                ?>
            </p>
        </form> 
    </div>

    <script src="js/passwordCheck.js"></script>
</body>
</html>

