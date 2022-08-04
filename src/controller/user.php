<?php
class User extends Controller{

    public function __construct(){
        $username = explode("/", $_SERVER['REQUEST_URI'])[1];
        $userData = UserModel::getUserInfo($username);
        $userEmail = $userData[$username]["email"];
        $userPosts = "";

        $posts = UserModel::getUserPost($username);
        if (count($posts) != 0) {
            foreach ($posts as $key => $value) {
                // print_r($posts);
                $userPosts .= '
                <div class="user-post">
                    <img src="'.$posts[$key]["imgPath"].'" 
                    class="post-img" alt="62b94bb65e084">
                </div>
                ';
            }
        }

        include_once("view/user.php");
    }

}
?>