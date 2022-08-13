<?php

class Controller {

    function hi () {
        echo "error page";
    }
    function view ($view) {
        echo '<link rel="shortcut icon" href="assets/image/favicon.png" type="image/png">';
        include_once("view/".$view.".php");
    }
}
?>