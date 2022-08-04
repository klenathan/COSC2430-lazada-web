<?php
class Auth {
    private static $userDataFile = "data/user.json";

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
    public static function signUp($inputUsername, $inputEmail, $inputPassword){

        $inputPasswordhHash = hash("sha256", $inputPassword);

        if (!Auth::checkUserExist($inputUsername)){

            $userData = DataHandle::readToJson(Auth::$userDataFile);
            $userData[$inputUsername] = array(
            "password"=>$inputPasswordhHash,
            "email"=>$inputEmail);
            
            Auth::uploadAvt($inputUsername);
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

        $target_dir = "data/userAvatar/";
        $target_file = $target_dir . $username . ".jpg";
        $imageFile = "data/userAvatar/";
        $check = False;

        if (!isset($_FILES["avtImg"]["name"])){
            $check = False;
        } else {
            $check = True;
        }

        if($check !== false) {
            echo (isset($_FILES["avtImg"]["tmp_name"]));
            echo "file is an image";
            $imageFile = $_FILES["avtImg"]["tmp_name"];
            move_uploaded_file($imageFile, $target_file);
        } else {
            $imageFile = "data/userAvatar/default.jpg";
            echo "File is not an image.";
            copy($imageFile, $target_file);
        }
    }

    public static function renewCookie(){
        if (isset($_COOKIE["user"])){
            setcookie("user", $_COOKIE["user"], time() + (3600*24*30), "/");
        } 
    }
}
?>