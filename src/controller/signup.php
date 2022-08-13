<?php
class Signup extends Controller {
    function __construct() {
        $this->view("signup");
    }

    function handleSignup() {
        if ($_POST["signupPassword"] != $_POST["confirmPassword"]) {
            $_SESSION["signup_err"] = "Password does not match";
            $this::setValueOnErr();
            header("Location: /signup");
        } else {
            $signUpRes = Auth::signUp($_POST["signupUsername"], $_POST["signupEmail"], $_POST["signupPassword"], "customer");
            if ($signUpRes == "successful"){
                setcookie("user", $_POST["username"], time() + (3600*24*30), "/");
                unset($_SESSION["signup_err"]);
                header("Location: /");
            } elseif ($_POST["signupPassword"] != $_POST["confirmPassword"]){
                Signup::setValueOnErr();
                $_SESSION["signup_err"] = "Username already exist";
            } elseif ($signUpRes == "username_exist"){
                Signup::setValueOnErr();
                $_SESSION["signup_err"] = "Username already exist";
                header("Location: /signup");
            } else {
                $_SESSION["signup_err"] = "Err";
                echo "err";
                header("Location: /signup");
            }
        }
    }

    private static function setValueOnErr(){
        $_SESSION["signupUsername"] = $_POST["signupUsername"];
        $_SESSION["signupEmail"] = $_POST["signupEmail"];
        $_SESSION["signupPassword"] = $_POST["signupPassword"];
    }
}
?>
