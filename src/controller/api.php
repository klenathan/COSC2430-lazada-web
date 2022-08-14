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
    function testWriteData() {
        echo '{"test": "'.$_POST["test"].'"}';
    }

    function newOrder(){
        // $this->addNewData($this::$orderFile, "O", $_POST["data"]);
        // header("Location: /myaccount");
    }

    function newProduct(){
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
        $this->addNewData($this::$productFile, "P", $data);
        header("Location: /myaccount");
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
    }
}
?>