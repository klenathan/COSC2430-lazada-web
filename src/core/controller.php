<?php

class Controller {

    function hi () {
        echo "error page";
    }
    function view ($view) {
        include_once("view/".$view.".php");
    }
}
?>