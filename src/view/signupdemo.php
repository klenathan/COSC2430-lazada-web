<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/signupDemo.css">
    <link rel="stylesheet" href="style/style.css">
    <!-- <link rel="stylesheet" href="style/home.css"> -->
    <script src="js/signupClickable.js"></script>
    <title>Signup</title>
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
        <section id="option">
            <div class="tab">
                <div class="main-content"  id = "vendor-tab" onclick="seeMore(this)">
                    <h2 class="tab-title">Vendor</h2>
                    <img src="assets/image/signupimage/handshake.png" alt="icon" class="tab-img">
                    <ul class="tab-body">
                        <li>
                            <img src="assets/image/signupimage/tick_box.png" alt="" class="tick">
                            <p>Lorem ip sum</p>
                        </li>
                        <li>
                            <img src="assets/image/signupimage/tick_box.png" alt="" class="tick">
                            <p>Lorem ip sum</p>
                        </li>
                        <li>
                            <img src="assets/image/signupimage/tick_box.png" alt="" class="tick">
                            <p>Lorem ip sum</p>
                        </li>
                        <li>
                            <img src="assets/image/signupimage/tick_box.png" alt="" class="tick">
                            <p>Lorem ip sum</p>
                        </li>
                    </ul>
                </div>
        
                <a class= "signup-button" href="/signupforvendor">
                    Join us now!
                </a>
                <!-- <div class="hidden-tab" id="vendor-tab"></div> -->
            </div>
            <div class="tab">
                <div class="main-content"  id="customer-tab" onclick="seeMore(this)">
                    <h2 class="tab-title">Customer</h2>
                    <img src="assets/image/signupimage/client.png" alt="icon" class="tab-img">
                    <ul class="tab-body">
                        <li>
                            <img src="assets/image/signupimage/tick_box.png" alt="" class="tick">
                            <p>Lorem ip sum</p>
                        </li>
                        <li>
                            <img src="assets/image/signupimage/tick_box.png" alt="" class="tick">
                            <p>Lorem ip sum</p>
                        </li>
                        <li>
                            <img src="assets/image/signupimage/tick_box.png" alt="" class="tick">
                            <p>Lorem ip sum</p>
                        </li>
                        <li>
                            <img src="assets/image/signupimage/tick_box.png" alt="" class="tick">
                            <p>Lorem ip sum</p>
                        </li>
                    </ul>
                </div>
                
                <a class= "signup-button" href="/signupforcustomer">
                    Join us now!
                </a>
                <!-- <div class="hidden-tab" id="customer-tab"></div> -->
            </div>
            <div class="tab">
                <div class="main-content"  id="shipper-tab" onclick="seeMore(this)">
                    <h2 class="tab-title">Shipper</h2>
                    <img src="assets/image/signupimage/delivery_person.png" alt="icon" class="tab-img">
                    <ul class= "tab-body">
                        <li>
                            <img src="assets/image/signupimage/tick_box.png" alt="" class="tick">
                            <p>Lorem ip sum</p>
                        </li>
                        <li>
                            <img src="assets/image/signupimage/tick_box.png" alt="" class="tick">
                            <p>Lorem ip sum</p>
                        </li>
                        <li>
                            <img src="assets/image/signupimage/tick_box.png" alt="" class="tick">
                            <p>Lorem ip sum</p>
                        </li>
                        <li>
                            <img src="assets/image/signupimage/tick_box.png" alt="" class="tick">
                            <p>Lorem ip sum</p>
                        </li>
                    </ul>
                </div>
                <a class= "signup-button" href="/signupforshipper">
                    Join us now!
                </a>
            </div>
        </section>
    </main>
</body>
</html>