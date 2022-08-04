<?php 
class Post extends Controller {
    
    protected $postDataFile = "data/post.json";

    function renderPost(){
        $postData = DataHandle::readToJson($this->postDataFile);
        foreach ($postData as $key => $value) {

            if ($postData[$key]["visible"] == "public") {
                $postImgPath = $value["imgPath"];
                $userAvatar = "data/userAvatar/".$value["author"].".jpg";
                $author = $value["author"];
                $status = $value["status"];
                $postVis = $value["visible"];
                echo 
                '<div class="post">
                    <div class="post-detail-wrapper">
                        <img src="'.$userAvatar.'"
                        class="post-avatar" 
                        alt="avatar">
                
                        <a class="post-username" href="'.$author.'">
                            <p>'.$author.'</p>
                        </a>
                
                        <p class="post-visibility">'.$postVis.'</p>
                    </div>
                
                    <div class="status">
                        <p>'.$status.'</p>
                    </div>
                
                    <div class="img-wrapper">
                        <img src="'.$postImgPath.'" 
                        class="post-img"
                        alt="">
                    </div>
                </div>';
            }
        }
    }

    function uploadPost() {
        $postData = Datahandle::readData("data/post.json");
        $postJsonData = json_decode($postData, true);
        $postId = uniqid();

        $target_dir = "data/postImage/";
        $target_file = $target_dir . $postId . ".jpg";

        $author = $_COOKIE["user"];
        $status = $_POST["status"];
        $visible = $_POST["visible"];;

        
        $newPost = array( $postId => array(
            "author"=> $author,
            "status"=>$status,
            "imgPath"=>$target_file,
            "visible"=>$visible,
            "time"=>time()
        ));

        $postJsonData = $newPost + $postJsonData;

        $imageFile = $_FILES["postFile"]["tmp_name"];

        DataHandle::writeData("data/post.json", json_encode($postJsonData));
        move_uploaded_file($imageFile, $target_file);

        header("Location: /");
    }
}
?>