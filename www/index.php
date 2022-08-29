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
    "cart", "product", "signupdemo", "login", "allproduct", "category",
    "signupforcustomer", "signupforvendor", "signupforshipper", "signup",
    "search", "api","aboutus" ,"privacy",null);

    $route = new Route($reservedUrl, "home");
?>