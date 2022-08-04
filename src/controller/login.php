<?php
class Login extends Controller {
    public function __construct () {
        $this->view("login");
    }
    function handleLogin(){
        $loginStatus = Auth::login($_POST["username"], $_POST["password"]);

        if ($loginStatus == "successful") {
            setcookie("user", $_POST["username"], time() + (3600*24*30), "/");
            unset($_SESSION["err_name"]);
            header("location: /");
        } elseif ($loginStatus == "wrong_password"){
            $_SESSION["loginUsername"] = $_POST["username"];
            $_SESSION["err_name"] = "Wrong password";
            header("location: /login");
        } elseif ($loginStatus == "wrong_username"){
            $_SESSION["loginUsername"] = $_POST["username"];
            $_SESSION["err_name"] = "Username does not exist";
            header("location: /login");
        } else {
            $_SESSION["err_name"] = "unknown error, please contact @klenathan for more information";
            header("location: /login");
        }
    }
    function signOut(){
        setcookie("user", null, -1, "/");
        header("location: /");
    }
}
?>