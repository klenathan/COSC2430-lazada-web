<?php 

    class SignupBackend extends Controller {
        static $accountFile = "../data/account.db";
 
        public function __construct () {
            if (isset($_COOKIE["user"])) {
                header("Location: /");
            }
        }
        
        public function handleSignup($data) {
            $inputUsername = $_POST["username"];
            if ($_POST["password"] != $_POST["password"]){
                SignupBackend::setValueOnErr();
                $_SESSION["signup_err"] = "Password does not match";
                header("Location: /test.php");
            }
            else if ($this::checkUserExist($inputUsername)) {
                SignupBackend::setValueOnErr();
                $_SESSION["signup_err"] = "Username existed";
                header("Location: /");
            } else if (!$this::checkUserExist($inputUsername)) {
                $currentData = json_decode(DataHandle::readData($this::$accountFile), true);
                $currentData[$_POST["username"]] = $data;

                setcookie("user", $_POST["username"], time() + (3600*24*30), "/");
                unset($_SESSION["signup_err"]);

                $this::uploadProfileImage($_POST["username"]);
                DataHandle::writeData($this::$accountFile, json_encode($currentData));
                header("Location: /");
            } else {
                SignupBackend::setValueOnErr();
                $_SESSION["signup_err"] = "undefined error";
                header("Location: /");
            }
        }


        private static function checkUserExist($inputUsername) { 
            $userData  =  DataHandle::readToJson(SignupBackend::$accountFile);
            return array_key_exists($inputUsername, $userData) ? True : False;
        }
        
        private static function setValueOnErr() {
            $_SESSION["signupUsername"] = $_POST["username"];
            $_SESSION["signupName"] = $_POST["name"];
            $_SESSION["signupPassword"] = $_POST["password"];
            $_SESSION["signupEmail"] = $_POST["email"];
            $_SESSION["signupAddress"] = $_POST["address"];
        }

        private static function uploadProfileImage($userid) {
            $target_direction = "assets/image/avatar/";
            $target_file = $target_direction . $userid . "png";
            $imageFile = "assets/image/avatar/";
            $check = False;

            if (!$_FILES["pImg"]["name"] == "") {
                $check = True;
            } else {
                $check = False;
            }
            echo $imageFile = $_FILES["avatar"]["tmp_name"];

            if ($check !== false) {
                $imageFile = $_FILES["avatar"]["tmp_name"];

                move_uploaded_file($imageFile, $target_file);
                return $target_file;
            } else {
                $imageFile = "assets/image/signupimage/avatar.png";
                copy($imageFile, $target_file);
                return $target_file;
            }
        }
        private static function uploadProfileAvatar($userid) {
            $target_dir = "assets/image/avatar/";
            $target_file = $target_dir . $userid . ".jpg";
            // $target_file = $userid . ".jpg";
            $imageFile = "assets/image/avatar/";
            $check = False;
            if (!$_FILES["pImg"]["name"] == ""){
                $check = True;
            } else {
                $check = False;
            }
            echo $imageFile = $_FILES["avatar"]["tmp_name"];
    
            if($check !== false) {
                $imageFile = $_FILES["avatar"]["tmp_name"];
    
                move_uploaded_file($imageFile, $target_file);
                return $target_file;
            } else {
                $imageFile = "assets/image/avatar/default.jpg";
                copy($imageFile, $target_file);
                return $target_file;
            }
        }
    }
?>