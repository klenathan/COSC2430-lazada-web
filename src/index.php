<?php 
    if (!isset($_COOKIE["darkmode"])){
        $_COOKIE["darkmode"] = "darkmode";
    }
    $lightmode = isset($_COOKIE["darkmode"])? $_COOKIE["darkmode"] : "lightmode"
?>

<link rel="shortcut icon" href="./assets/image/favicon.png" type="image/png">
<!-- <link rel="stylesheet" href="CSS/<?php echo $lightmode?>/style.css">
<link rel="stylesheet" href="CSS/<?php echo $lightmode?>/header.css"> -->

<?php
    session_start();
    // Core files
    include("core/controller.php");
    include("core/dataHandle.php");
    include("core/model/authentication.php");
    include("model/productModel.php");

    // Controller
    include("controller/home.php");

    // Model
    

    // Routing
    include("core/routing.php");
    #null for default page
    $reservedUrl = array("home", "login", "myaccount", "cart", "product", "signupdemo", "signupforcustomer", "signup", "vendor", null); 
    $route = new Route($reservedUrl, "home");
?>

