<?php
class ProductModel {
    private static $productDataFile = "../data/product.db";
    private static $accountDataFile = "../data/account.db";
    
    public function readProductData() {
        // print_r(DataHandle::readToJson("../data/product.db"));
        return DataHandle::readToJson($this::$productDataFile);
    }
    
    public function searchProduct($productId) {
        $productData = $this->readProductData();

        if (array_key_exists($productId, $productData)) {
            return $productData[$productId];
        } else {
            return null;
        }
    }

    public function getVendorName($vendorId) {
        $data = DataHandle::readToJson($this::$accountDataFile);
        if (array_key_exists($vendorId, $data)) {
            return $data[$vendorId]["name"];
        } else {
            return null;
        }
        
    }
}
?>