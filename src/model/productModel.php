<?php
class ProductModel {
    private static $productDataFile = "../data/account.db";

    public function readProductData() {
        $productData = DataHandle::readToJson(Auth::$productDataFile);
    }
    
    public function searchProduct($productId) {
        if (array_key_exists($productId, $productData)) {
            return $productData[$productId];
        } else {
            return null;
        }
    }
}
?>