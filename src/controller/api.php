<?php
class Api {
    private $result;

    private static $accountFile = '../data/account.db';
    private static $orderFile = '../data/order.db';
    private static $productFile = '../data/product.db';

    function __construct() {
        header("Content-Type: application/json; charset=UTF-8");
    }

    function view() {
        echo $_SERVER["REQUEST_METHOD"]."<br>";
    }

    //POST
    function test() {
        echo '{"test": "'.$_POST["test"].'"}';
    }

    function newProduct(){
        echo "HELP";
        $data = array(
            "name"=>$_POST["name"],
            "price"=>(int) $_POST["price"],
            "category"=>$_POST["category"],
            "sold"=>0,
            "stock"=>999,
            "desc"=>$_POST["desc"],
            "vendor"=>$_COOKIE["user"],
            "rating"=>0,
        );
        
        $newId = $this->addNewData($this::$productFile, "P", $data);
        echo $newId;
        $this->uploadProductImg($newId);
        header("Location: /");
    }

    function updateOrderStatus(){
        $orderid = $_POST["order_id"];
        $status = $_POST["status"];
        $orderData = DataHandle::readToJson($this::$orderFile);
        foreach ($orderData as $key => $value) {
            if ($key == $orderid) {
                $orderData[$key]["order_status"] = $status;
            }
        }
        DataHandle::writeData($this::$orderFile, json_encode($orderData));
        header("Location: /");
    }

    // GET 

    function getLoginStatus() {
        if(isset($_COOKIE["user"])) {
            echo '{"status": "true"}';
        } else {
            echo '{"status": "false"}';
        }
    }

    private function addNewData($file, $prefix, $newData){
        $currentData = json_decode(DataHandle::readData($file), true);
        if (count(array_keys($currentData)) == 0) {
            $newId = $prefix . 0;
        } else {
            $currentKeyArr = array_keys($currentData);
            $lastestId = (int) substr(end($currentKeyArr), 1);
            $newId = $prefix . ($lastestId + 1);
        }
        $currentData[$newId] = $newData;
        DataHandle::writeData($file, json_encode($currentData));
        return $newId;
    }

    private static function uploadProductImg($name){

        $target_dir = "assets/image/product/";
        $target_file = $target_dir . $name . ".jpg";
        $imageFile = "assets/image/product/";
        $check = False;

        if (!$_FILES["pImg"]["name"] == ""){
            $check = True;
        } else {
            $check = False;
        }
        echo $imageFile = $_FILES["pImg"]["tmp_name"];

        if($check !== false) {
            $imageFile = $_FILES["pImg"]["tmp_name"];

            move_uploaded_file($imageFile, $target_file);
            return $target_file;
        } else {
            // $testDir = "../../assets/image/avatar/default.jpg";
            $imageFile = "assets/image/avatar/default.jpg";
            copy($imageFile, $target_file);
            return $target_file;
        }
    }
}
?>