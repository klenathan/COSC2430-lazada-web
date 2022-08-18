<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/signupforall.css">
    <title>Sign up for shipper</title>
    <script src="js/signupClickable.js"></script>
    <script src="js/updateProfileImg.js"></script>
</head>
<body>
    <header>

    </header>
    <main id="signup">
        <img class="background-image" src="assets/image/signupimage/lazada-background.jpg" alt="">
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
        <div class="form-wrapper">
            <h2>Sign up for Shipper</h2>
            <form action="signup/handleSignup" name="signup" method="get">
                <div class="form-row avatar">
                    <input type="file" id="imgupload"
                    onchange="loadFile(event)" style="display:none"/> 
                    <img class="avatar-image" id="shipper-img" 
                    src="assets/image/signupimage/Ellipse 2.png" alt="blank avatar" onclick="chooseFile()">
                </div>
                <div class="form-row">
                    <div class="form-label">
                        <label for="username"><b>Username:</b></label>
                    </div>
                    <div class="form-field">
                        <input type="text" name="username" id="shipper-signup-username" placeholder="Username" class="input-field">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-label">
                        <label for="password"><b>Password:</b></label>
                    </div>
                    <div class="form-field">
                        <input type="password" name="password" id="shipper-signup-password" placeholder="Password" class="input-field">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">
                        <label for="re-password"><b>Retype password:</b></label>
                    </div>
                    <div class="form-field">
                        <input type="password" name="re-password" id="shipper-signup-re-password" placeholder="Retype password" class="input-field">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">
                        <label for="re-password"><b>Distribution hub:</b></label>
                    </div>
                    <div class="form-field">
                        <!-- <input type="password" name="re-password" id="shipper-signup-re-password" placeholder="Retype password" class="input-field"> -->
                        <select name="distribution-hub" id="distribution-hub" class="input-field">
                            <option value="hub_1">Hub 1</option>
                            <option value="hub_2">Hub 2</option>
                            <option value="hub_3">Hub 3</option>
                        </select>
                    </div>
                </div>
            </form>
            <div class="login-signup-wrap">
                    <input type="submit" name="signupBtn" id="shipper-signup-btn" value="Signup" class="signup-button">
            </div>
            <div class="signup-login-link">
                <a href="/login">
                    <p>Already have an account ? Login now!</p>
                </a>
            </div>
        </div>
    </main>
</body>
</html>