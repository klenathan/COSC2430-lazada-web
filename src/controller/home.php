<?php
    class Home extends Controller {
        
        function __construct () {
            $this->view("home");
        }

        public static function displayFeed(){
            $post = new Post();
            $post->renderPost();
        }
    }
?>


