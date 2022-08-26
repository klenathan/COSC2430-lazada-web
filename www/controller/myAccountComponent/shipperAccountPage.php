<?php
class ShipperAccount {
    private static $orderFile = '../data/order.db';
    private static $productFile = '../data/product.db';
    private $hub;

    function __construct($hub) {
        $this->hub = $hub;
    }
    
    public function getCurrentShipperOrders() {
        $orderData = DataHandle::readToJson($this::$orderFile);
        

        foreach ($orderData as $key => $value) {
            if ($value["hub"] == $this->hub && $value["order_status"] == "hub") {
                ?>
                <div class="shipper-order-wrapper">
                    <h2 class="order-id" id="order_<?php echo $key;?>">Order ID: <?php echo $key;?></h2>
                    <p class="order-total-bill">Total Price: <?php echo number_format($value["total_bill"]);?> VND</p>
                    
                    <?php
                    foreach ($value["cart"] as $k => $v) {
                        ?>
                        <div class="shipper-product">
                            <img class="shipper-product-img"
                            src="assets/image/product/<?php echo $k;?>.jpg" alt="<?php echo $k;?>" srcset="">
                            <div class="shipper-product-info">
                                <p class="shipper-product-title"><?php echo $this->getProductInfo($k)["name"]?></p>
                                <p>Quantity: <?php echo $v;?></p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="shipper-button-wrapper">
                        <button onclick='updateOrderStatus("<?php echo $key?>", "cancel")'>Cancel</button>
                        <button onclick='updateOrderStatus("<?php echo $key?>", "delivered")'>Delivered</button>
                    </div>
                </div>
                <?php
            }
        }
    }

    private function getProductInfo($pid) {
        $productData = DataHandle::readToJson($this::$productFile);

        foreach ($productData as $key => $value) {
            if ($key == $pid) {
                return $value;
            }
        }
    }
}
?>