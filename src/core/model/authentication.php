<?php
class Auth {

    // function __construct() {
    //     // echo $this::uploadAvt($_COOKIE["user"])."<br>";
    //     $this::signUp("testusername", "mail", "123", "customer");
    // }
    
    private static $userDataFile = "../data/account.db";

    public static function login($username, $password){
        $inputUsername = $username;
        $inputPasswordhHash = hash("sha256", $password);
        $userData = DataHandle::readToJson(Auth::$userDataFile);

        if (array_key_exists($inputUsername, $userData)){
            if ($inputPasswordhHash == $userData[$inputUsername]["password"]){
                return "successful";
            } else {
                return "wrong_password";
            }
        } else {
            return "wrong_username";
        }
    }
    public static function signUp($inputUsername, $inputEmail, $inputPassword, $accountType){
        $inputPasswordhHash = hash("sha256", $inputPassword);

        if (!Auth::checkUserExist($inputUsername)){
            $userData = DataHandle::readToJson(Auth::$userDataFile);
            $imgDir = Auth::uploadAvt($inputUsername);
            
            $userData[$inputUsername] = array(
            "password"=>$inputPasswordhHash,
            "email"=>$inputEmail,
            "accountType"=>$accountType);
            
            DataHandle::writeData(Auth::$userDataFile, json_encode($userData));
            return "successful";
        } else {
            return "username_exist";
        }
    }

    private static function checkUserExist($username){
        $userData = DataHandle::readToJson(Auth::$userDataFile);
        return array_key_exists($username, $userData) ? True : False;
    }

    private static function uploadAvt($username){

        $target_dir = "assets/image/avatar/";
        $target_file = $target_dir . $username . ".jpg";
        $imageFile = "assets/image/avatar/";
        $check = False;
        $err = "err";

        if (!$_FILES["avtImg"]["name"] == ""){
            $check = True;
        } else {
            $check = False;
        }

        if($check !== false) {
            $imageFile = $_FILES["avtImg"]["tmp_name"];
            move_uploaded_file($imageFile, $target_file);
            return $target_file;
        } else {
            // $testDir = "../../assets/image/avatar/default.jpg";
            $imageFile = "assets/image/avatar/default.jpg";
            copy($imageFile, $target_file);
            return $target_file;
        }
    }

    public static function renewCookie(){
        if (isset($_COOKIE["user"])){
            setcookie("user", $_COOKIE["user"], time() + (3600*24*30), "/");
        } 
    }
}
?>