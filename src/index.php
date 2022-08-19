<?php
    session_start();
    // Core files
    include("core/controller.php");
    include("core/model/dataHandle.php");
    include("core/model/authentication.php");

    include("model/productModel.php");

    // Controller
    include("controller/category.php");
    // Model
    

    // Routing

    include("core/routing.php");
    #null for default page

    $reservedUrl = array("home", "myaccount", 
    "cart", "product", "signupdemo", "login", 
    "signupforcustomer", "signupforvendor", "signupforshipper", "signup", "allproduct",
    "search", "api", null);

    $route = new Route($reservedUrl, "home");
?>