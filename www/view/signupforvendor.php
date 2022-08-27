<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/signupforall.css">
    <title>Sign up for Vendor</title>
    <script src="js/changeImageHover.js" defer></script>
    <script src="js/signupClickable.js"></script>
    <script src="js/updateProfileImg.js"></script>
    <script src="js/passwordCheck.js" defer></script>
</head>
<body>
    <header>
    </header>
    <main class="signup" id="signup-for-vendor">
        <div class="login-signup-poster">
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
            <div class="signup-form-wrapper">
                <div class="signup-form-heading">
                    <h1>Sign up for Vendor</h1>
                </div>
                <div class="signup-form-body">
                    <form action="signup/handleSignup" name="signup" method="post"  enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="form-row avatar">
                                <input type="file" id="avtImg"
                                name="avatar"
                                onchange="loadFile(event)" style="display:none"/> 
                                <img class="avatar-image" id="avatar" 
                                src="assets/image/avatar/default.jpeg" alt="blank avatar" >
                                <div id="image-hover"  onclick="clickUpload()" >
                                    <img src="assets/image/avatar/icons8-compact-camera-ios/icons8-compact-camera-50.png" alt="edit-image icon">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-label">
                                    <label for="username"><b>Username:</b></label>
                                </div>
                                <div class="form-field">
                                    <input type="text" name="username" id="signupUsername"
                                    placeholder="Username"  
                                    class="input-field" required>
                                </div>
                                <div id="respond-message">
                                    <?php
                                    echo isset($_SESSION["signup_err"]) ? $_SESSION["signup_err"]: "";
                                    unset($_SESSION["signup_err"])
                                    ?>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-label">
                                    <label for="signupPassword"><b>Password:</b></label>
                                </div>
                                <div class="form-field" >
                                    <input type="password" name="password" id="signupPassword" placeholder="Password" class="input-field" 
                                    pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}" required>
                                    <div id="message">
                                        <h3>Password must contain the following:</h3>
                                        <p id="lowercasePassed">At least 1 lower case</p>
                                        <p id="uppercasePassed">At least 1 upper case</p>
                                        <p id="specialCharPassed">At least 1 special character</p>
                                        <p id="numberPassed">At least 1 number</p>
                                        <p id="lengthPassed">At least 8 characters</p>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-label">
                                    <label for="re-password"><b>Retype:</b></label>
                                </div>
                                <div class="form-field">
                                    <input type="password" name="confirmPassword" id="confirmPassword" 
                                    placeholder="Retype password" class="input-field">
                                </div>
                                <div id="confirm-message">
                                    <p>Password does not match</p>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-label">
                                    <label for="name"><b>Name:</b></label>
                                </div>
                                <div class="form-field">
                                    <input type="text" name="name" id="signupName" placeholder="Name" class="input-field">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-label">
                                    <label for="address"><b>Address:</b></label>
                                </div>
                                <div class="form-field">
                                    <input type="text" name="address" id="signupAddress" placeholder="Address" class="input-field">
                                </div>
                            </div>

                        </div>
                        
                        <div class="form-button-wrapper">
                            <div class="login-signup-wrap">
                                    <input type="submit" name="signupBtn" id="signup-btn" value="Signup" class="signup-button">
                            </div>
                            <div class="signup-login-link">
                                <a href="/login">
                                    <p>Already have an account ? Login now!</p>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>