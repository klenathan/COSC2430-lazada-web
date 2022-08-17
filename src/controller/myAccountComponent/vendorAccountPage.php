<?php
class VendorAccount {
    private static $productFile = '../data/product.db';

    function __construct() {
        
    }

    function renderAllProduct() {
        $productData = DataHandle::readToJson($this::$productFile);
        foreach ($productData as $key => $value) {
            if ($value["vendor"] == $_COOKIE["user"]) {
                ?>
                <div class="vendor-product-card">
                    <img class="product-img" src="assets/image/product/<?php echo $key;?>.jpg" alt="<?php echo $key;?>"r>
                    <div class="vendor-product-info">
                        <p class="vendor-product-name"><?php echo $value["name"]?></p>
                        <p>ID: <?php echo $key?></p>
                        <p class="vendor-product-price"><?php echo number_format($value["price"])?> VND</p>
                        <p class="vendor-product-category">Category: <?php echo $value["category"]?></p>
                        <p class="vendor-product-sold">Sold: <?php echo $value["sold"]?></p>
                        <p class="vendor-product-stock">Stock: <?php echo $value["stock"]?></p>
                    </div>
                </div>
                <?php
                // echo $value["desc"]."<br>";
            }
        }
    }
}
?>