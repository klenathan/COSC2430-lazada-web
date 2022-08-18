<?php
class Product extends Controller {
    public static $productData;
    public static $name, $vendor;


    function __construct () {
        $model = new ProductModel();
        // $data = $model->readProductData();
        if (isset($_GET["productid"])) {
            $this::$productData = $model->searchProduct($_GET["productid"]);
            
        }
        $this::$name = $this::$productData["name"];
        $this::$vendor = $model->getVendorName($this::$productData["vendor"]);
    }

    
}
?>