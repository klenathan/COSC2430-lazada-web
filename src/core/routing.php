<?php
    class Route {

        protected $controller = "notfound";
        protected $method;
        protected $param;


        public function __construct ($reservedUrl, $defaultPage) {
            $url_array = $this->UrlProcess();
            unset($url_array[0]);
            
            ################
            if(in_array(strtolower($url_array[1]), $reservedUrl)){
                if(file_exists("controller/" . $url_array[1] . ".php")){
                    // include_once("controller/" . $url_array[1] . ".php");
                    $this->controller = $url_array[1];
                } elseif ($url_array[1] == null ) {
                    // Homepage case
                    $this->controller = $defaultPage;
                } else {
                    echo $url_array[1]." is in reserved list but source file cannot be found.";
                    echo "<br>";
                }
            } else {
                $this->controller = "user";
            }
            unset($url_array[1]);
            ######Process method###########
            if (isset($url_array[2])) {
                // echo method_exists("login", "hehe");
                include_once("controller/".$this->controller.".php");
                $target = new $this->controller;
                if(method_exists($target, $url_array[2])){
                    $this->method = $url_array[2];
                }
                unset($url_array[2]);
            }
            
            $this->param = $url_array?array_values($url_array) : [];
            if (isset($this->controller) && isset($this->method)) {
                
                call_user_func_array([new $this->controller, $this->method], $this->param);
            } else {
                include_once("controller/".$this->controller.".php");
                $control = new $this->controller;
                $control->view($this->controller);
                
            }
        }

        private function UrlProcess() {
            if(isset($_SERVER['REQUEST_URI'])) {
                return  explode("/", $_SERVER['REQUEST_URI']);
            }
        } 

    }
?>