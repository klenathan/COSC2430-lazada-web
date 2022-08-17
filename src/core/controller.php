<?php

class Controller {
    function __construct() {
        if (isset($_COOKIE["user"])) {
            Auth::setUserDetailSession($_COOKIE["user"]);
        }
    }
    
    function view ($view) {
        echo '<link rel="shortcut icon" href="assets/image/favicon.png" type="image/png">';
        
        include_once("view/".$view.".php");
    }
}
?>