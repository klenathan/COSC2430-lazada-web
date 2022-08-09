<?php
class ProductModel {
    private static $productDataFile = "../data/product.db";
    
    public function readProductData() {
        // print_r(DataHandle::readToJson("../data/product.db"));
        return DataHandle::readToJson("../data/product.db");
    }
    
    public function searchProduct($productId) {
        $productData = $this->readProductData();

        if (array_key_exists($productId, $productData)) {
            return $productData[$productId];
        } else {
            return null;
        }
    }
}
?>