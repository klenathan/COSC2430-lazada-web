<?php

class Controller {
    // static $userDetail;
    function __construct() {
        if (isset($_COOKIE["user"])) {
            Auth::setUserDetailSession($_COOKIE["user"]);
            // $this::$userDetail = Auth::getUserDetail($_COOKIE["user"]);
        }
    }

    function hi () {
        echo "error page";
    }
    function view ($view) {
        echo '<link rel="shortcut icon" href="assets/image/favicon.png" type="image/png">';
        
        include_once("view/".$view.".php");
    }
}
?>