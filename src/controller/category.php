<?php
class Category extends Controller {

    public $data;
    private static $productFile = "../data/product.db";

    function __construct() {
        
    }


    static function getAllCategory(){
        $res = array();
        $data = dataHandle::readToJson(Category::$productFile);
        foreach ($data as $key => $value) {
            array_push($res, $value["category"]);
        }
        $res = array_unique($res);
        foreach($res as $categoryField){
            echo '<a href="#">'.$categoryField.'</a>';
        }
    }

}
?>