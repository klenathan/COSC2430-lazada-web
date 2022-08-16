<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/signupDemo.css">
    <script src="js/signupClickable.js"></script>
    <title>Document</title>
</head>
<body>
    <main id="signup">
        <section id="intro">
            <section class="description">
                <img src="assets/image/signupimage/lazada-background.jpg" alt="lazada background">
                <div class="description-wrapper" id="customer">
                    <h2>Customer</h2>
                    <div class="see-more" id="customer-button" onclick="SeeMoreCustomer()">Click to see more</div>
                </div>
                <a class="intro-signup-button" href="/signupforcustomer">Join with us now</a>
            </section>
            <section class="description">
                <!-- <img src="" alt=""> -->
                <div class="description-wrapper" id="vendor">
                    <h2>Vendor</h2>
                    <div class="see-more" id="vendor-button" onclick="SeeMoreVendor()">Click to see more</div>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> -->
                </div>
                
                <a class="intro-signup-button" href="">Join with us now</a>
            </section>
            <section class="description">
                <img src="assets/image/signupimage/lazada-background.jpg" alt="lazada background">
                <div class="description-wrapper" id="shipper">
                    <h2>Shipper</h2>
                    <div class="see-more" id="shipper-button" onclick="SeeMoreShipper()">Click to see more</div>
                </div>
                <a class="intro-signup-button" href="">Join with us now</a>
            </section>
        </section>
        
        <section id="option">
            <section class="option-wrapper">
                <div class="tab">
                    <img src="assets/image/signupimage/handshake.png" alt="icon">
                    <h2>Vendor</h2>
                    <a class= "signup-button" href="">
                        Join us now!
                    </a>
                </div>
                <div class="tab">
                    <img src="assets/image/signupimage/client.png" alt="icon">
                    <h2>Client</h2>
                    <a class= "signup-button" href="">
                        Join us now!
                    </a>
                </div>
                <div class="tab">
                    <img src="assets/image/signupimage/delivery_person.png" alt="icon">
                    <h2>Shipper</h2>
                    <a class= "signup-button" href="">
                        Join us now!
                    </a>
                </div>
            </section>
        </section>
    </main>
</body>
</html>