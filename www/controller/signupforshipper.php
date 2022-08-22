<?php
    class Signupforshipper extends Controller {
        static $accountFile = "../data/account.db";
        public function __construct () {
            if (isset($_COOKIE["user"])) {
                header("Location: /");
            }
            include_once('signup.php');
            // $this->view("signupforcustomer");
        }

        function handleSignup() {
            $data = array(
                "password" => $_POST["password"],
                "email" => $_POST["email"],
                "name" => $_POST["name"],
                "address" => $_POST["address"],
                "accountType" => "customer"
            );
            print_r($_SESSION);
            $signup = new Signup;
            $signup -> handleSignup($data);
        }
    }
?>