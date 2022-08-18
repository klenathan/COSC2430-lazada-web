<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/signupforall.css">
    <title>Sign up for customer</title>
    <script src="js/signupClickable.js"></script>
    <script src="js/updateProfileImg.js"></script>
</head>
<body>
    <header>

    </header>
    <main id="signup-for-customer">
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
            <h2>Sign up for Customer</h2>
            <form action="signup/handleSignup" name="signup" method="get">
                <div class="form-row avatar">
                    <input type="file" id="imgupload"
                    onchange="loadFile(event)" style="display:none"/> 
                    <img class="avatar-image" id="customer-img" 
                    src="assets/image/signupimage/Ellipse 2.png" alt="blank avatar" onclick="chooseFile()">
                </div>
                <div class="form-row">
                    <div class="form-label">
                        <label for="username"><b>Username:</b></label>
                    </div>
                    <div class="form-field">
                        <input type="text" name="username" id="customer-signup-username" placeholder="Username" class="input-field">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-label">
                        <label for="email"><b>Email:</b></label>
                    </div>
                    <div class="form-field">
                        <input type="email" name="email" id="customer-signup-email" placeholder="Email" class="input-field">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">
                        <label for="password"><b>Password:</b></label>
                    </div>
                    <div class="form-field">
                        <input type="password" name="password" id="customer-signup-password" placeholder="Password" class="input-field">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">
                        <label for="re-password"><b>Retype password:</b></label>
                    </div>
                    <div class="form-field">
                        <input type="password" name="re-password" id="customer-signup-re-password" placeholder="Retype password" class="input-field">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">
                        <label for="name"><b>Name:</b></label>
                    </div>
                    <div class="form-field">
                        <input type="text" name="name" id="customer-signup-name" placeholder="Name" class="input-field">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">
                        <label for="address"><b>Addess:</b></label>
                    </div>
                    <div class="form-field">
                        <input type="text" name="address" id="customer-signup-address" placeholder="Address" class="input-field">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">
                        <label for="Phone"><b>Phone:</b></label>
                    </div>
                    <div class="form-field">
                        <input type="phone" name="phone" id="customer-signup-phone" placeholder="Phone" class="input-field">
                    </div>
                </div>
            </form>
            <div class="login-signup-wrap">
                    <input type="submit" name="signupBtn" id="customer-signup-btn" value="Signup" class="signup-button">
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