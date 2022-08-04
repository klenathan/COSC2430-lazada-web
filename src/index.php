<?php 
    if (!isset($_COOKIE["darkmode"])){
        $_COOKIE["darkmode"] = "darkmode";
    }
    $lightmode = isset($_COOKIE["darkmode"])? $_COOKIE["darkmode"] : "lightmode"
?>

<link rel="shortcut icon" href="assets/image/favicon.jpg" type="image/jpg">
<link rel="stylesheet" href="CSS/<?php echo $lightmode?>/style.css">
<link rel="stylesheet" href="CSS/<?php echo $lightmode?>/header.css">
<?php
    session_start();
    include("core/controller.php");
    include("core/dataHandle.php");
    

    include("core/routing.php");
    #null for default page
    $reservedUrl = array("home", "login", "signup", "user", "admin", "post", null); 
    $route = new Route($reservedUrl, "home");
?>

