<?php
class Category extends Controller {

    public $data;
    private static $productFile = "../data/product.db";

    function __construct() {
        
    }


    static function getAllCategory(){
        $data = dataHandle::readToJson(Category::$productFile);
        $arr = array();
        foreach ($data as $value){
            array_push($arr, $value["category"]);
        }
        foreach($arr as $categoryField){
            if($categoryField == next($arr)){
                continue;
            }
            echo '<a href="#">'.$categoryField.'</a>';
        }
    }

}
?>