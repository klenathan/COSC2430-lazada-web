<?php
class Signup extends Controller {
    static $accountFile = "../data/account.db";

    function __construct() {
        if (isset($_COOKIE["user"])) {
            header("Location: /");
        }
    }

    function view($view) {
        echo '<link rel="shortcut icon" href="assets/image/favicon.png" type="image/png">';
        include_once("view/signupdemo.php");

    }

    function signupCustomer() {
        $data = array(
            "password"=>hash("sha256", $_POST["password"]),
            "name"=>$_POST["name"],
            "email"=>$_POST["email"],
            "address"=>$_POST["address"],
            "accountType"=>"customer",
            "page" => "signupforcustomer"
        );
        $this->handleSignup($data);
    }

    function handleSignUpVendor() {
        $data = array(
            "password"=>hash("sha256", $_POST["password"]),
            "name"=>$_POST["name"],
            "email"=>$_POST["email"],
            "address"=>$_POST["address"],
            "accountType"=>"vendor",
            "page" => "signupforvendor"
        );
        if ($this::validVendorInfo($_POST["name"], $_POST["address"])) {
            Signup::setValueOnErr();
            $_SESSION["signup_err"] = "Vendor name or address existed";
            header("Location: /". $data["page"]);
        } else {
            $this->handleSignup($data);
        }
        
    }

    function handleSignUpShipper() {
        $data = array(
            "password"=>hash("sha256", $_POST["password"]),
            "name"=>$_POST["name"],
            // "email"=>$_POST["email"],
            "hub"=>$_POST["hub"],
            "accountType"=>"shipper",
            "page" => "signupforshipper"
        );
        $this->handleSignup($data);
    }    

    function handleSignup($data) {
        $inputUsername = $_POST["username"];

        if ($_POST["confirmPassword"] != $_POST["password"]){
            Signup::setValueOnErr();
            $_SESSION["signup_err"] = "Password does not match";
            header("Location: /". $data["page"]);
        } else if ($this::checkUserExist($inputUsername)) {
            Signup::setValueOnErr();
            $_SESSION["signup_err"] = "Username existed";
            header("Location: /". $data["page"]);
        } else if (!$this::checkUserExist($inputUsername)){
            $currentData = json_decode(DataHandle::readData($this::$accountFile), true);
            $currentData[$_POST["username"]] = $data;

            setcookie("user", $_POST["username"], time() + (3600*24*30), "/");
            unset($_SESSION["signup_err"]);
            // Write to database
            Signup::uploadProfileAvatar($_POST["username"]);
            // uploadProfileImg($_POST["username"]);
            DataHandle::writeData($this::$accountFile, json_encode($currentData));
            header("Location: /");
        } else {
            Signup::setValueOnErr();
            $_SESSION["signup_err"] = "undefined error";
            header("Location: /". $data["page"]);
        }
    }

    private static function setValueOnErr(){
        $_SESSION["signupUsername"] = $_POST["username"];
        $_SESSION["signupName"] = $_POST["name"];
        $_SESSION["signupEmail"] = $_POST["email"];
        $_SESSION["signupPassword"] = $_POST["password"];
        $_SESSION["signupConfirmPassword"] = $_POST["confirmPassword"];
    }

    private static function checkUserExist($username){
        $userData = DataHandle::readToJson(Signup::$accountFile);
        return array_key_exists($username, $userData) ? True : False;
    }

    private static function validVendorInfo($name, $address){
        $userData = DataHandle::readToJson(Signup::$accountFile);
        foreach ($userData as $key => $value) {
            if (($value["name"] == $name || $value["address"] == $address) && ($value["accountType"] == "vendor")) {
                return true;
            }
        }
        return false;
    }

    private static function uploadProfileAvatar($userid) {
        $target_dir = "assets/image/avatar/";
        $target_file = $target_dir . $userid . ".jpg";
        // $target_file = $userid . ".jpg";
        $imageFile = "assets/image/avatar/";
        $check = False;

        if (!$_FILES["avatar"]["name"] == ""){
            $check = True;
        } else {
            $check = False;
        }
        echo $imageFile = $_FILES["avatar"]["tmp_name"];

        if($check !== false) {
            $imageFile = $_FILES["avatar"]["tmp_name"];
            // echo $
            move_uploaded_file($imageFile, $target_file);
            return $target_file;
        } 
        else {
            $imageFile = "assets/image/avatar/default.jpeg";
            copy($imageFile, $target_file);
            return $target_file;
        }
    }
}
?>
