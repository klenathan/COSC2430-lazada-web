<?php
class Product extends Controller {
    public static $productData;

    function __construct () {
        $model = new ProductModel();
        // $data = $model->readProductData();
        $this::$productData = $model->searchProduct($_GET["productid"]);
        
        // foreach ($productData as $key => $value) {
        //     echo "<p>".$key.":".$value."</p>";
        //     echo "\n \n";
        // }
    }
}
?>