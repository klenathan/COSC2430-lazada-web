<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/about.css">
    

    <title>About Us</title>
</head>

<body>
    <header>
        <?php
        include_once("view/component/header.php");
        ?>
    </header>
    <main>
        <div class = "whole-page"> 
            <img class="background" src="assets/image/signupimage/lazada-background.jpg">
            <div class="introduction"> 
                <h2>Lazada is the leading e-commerce platform in Southeast Asia and Taiwan.</h2>
                <p> The Lazada commerce platform, introduced in 2015, was created to offer consumers a simple, secure, and quick online buying experience with a robust payment support and operating system.
                    We firmly think that an online purchasing experience ought to be straightforward, uncomplicated, and emotionally satisfying. At Lazada, this conviction motivates and inspires us every day.</p>
                <button><a href="/"> Know more about Lazada</a></button>      
            </div>

            <div class="content-box">
                <div class="top-box">
                    <div class="left-box"><h4>Our Goal</h4><br>
                        <p class="goal">By establishing a platform for e-commerce that links the community of consumers and sellers, we hope to make the world a better place because we believe in the transformative potential of technology.</p>
                    </div>
                    <div class="right-box"><h4>Our Scope</h4><br>
                        <p class="goal">Lazada provides customers in the area with a comprehensive online shopping experience that includes a large selection of items, a vibrant user community, and a smooth service chain.</p>
                    </div>
                </div>
                <div class="bottom-box"><h4> Characteristics of our people</h4> <br>
                        <p>In many different situations, our words or actions may be used to describe who we are. In essence, we are Close, Happy, and Agreed. These are Lazada's primary and most notable characteristics at each stage of growth.</p>
                    <div class="characteristics">
                    
                    </div>
                </div>
            </div>

            <div class="core-value"> <h4>Core Values</h4>
                <img class="first-image" src = "assets/image/corevalues.webp">
                
            </div>

            <div class="offices">
                <h4>Our Offices</h4>
                <div class="icons">
                    <div class="specific"> 
                        <img src ="assets/image/vietnam.png"> <br>
                        <p>Viet Nam</p>
                    </div>
                    <div class="specific"> 
                        <img src ="assets/image/vietnam.png"> <br>
                        <p>Viet Nam</p>
                    </div>
                    <div class="specific"> 
                        <img src ="assets/image/vietnam.png"> <br>
                        <p>Viet Nam</p>
                    </div>
                    <div class="specific"> 
                        <img src ="assets/image/vietnam.png"> <br>
                        <p>Viet Nam</p>
                    </div>
                    <div class="specific"> 
                        <img src ="assets/image/vietnam.png"> <br>
                        <p>Viet Nam</p>
                    </div>
                 
                </div>
            </div>

            <div class="follow">

            </div>
         </div>
        </main>


    <footer>
        <?php
        include_once("view/component/footer.php");
        ?>
    </footer>
</body>
</html>