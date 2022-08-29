<?php
class ShipperAccount
{
    private static $orderFile = '../data/order.db';
    private static $productFile = '../data/product.db';
    private $hub;

    function __construct($hub)
    {
        $this->hub = $hub;
    }

    public function getCurrentShipperOrders()
    {
        $orderData = DataHandle::readToJson($this::$orderFile);
        foreach ($orderData as $key => $value) {
            if ($value["hub"] == $this->hub && $value["order_status"] == "active") {
?>
                <a href="#<?php echo $key; ?>" onclick='displayOrder("<?php echo $key; ?>")' class="order">
                    <h2><b>Order ID:</b> <?php echo $key; ?></h2>
                    <p><b>Customer:</b> <?php echo $value["customer"]; ?></p>
                    <p><b>Address:</b> <?php echo $value["address"]; ?></p>
                    <p><b>Total bill</b> <?php echo number_format($value["total_bill"]); ?> VND</p>
                    <p><b>Order Status:</b> <?php echo $value["order_status"]; ?></p>
                </a>
        
                <div  class="shipper-order-wrapper" id="<?php echo $key; ?>">
 
                    <div class="order-info">
                        <h2 class="order-id" id="order_<?php echo $key; ?>">Order ID: <?php echo $key; ?></h2>
                        <p><b>Customer:</b> <?php echo $value["customer"]; ?></p>
                        <p><b>Address:</b> <?php echo $value["address"]; ?></p>
                        <p><b>Total bill</b> <?php echo number_format($value["total_bill"]); ?> VND</p>
                        <div class="shipper-button-wrapper">
                            <button onclick='updateOrderStatus("<?php echo $key ?>", "cancel")'>Cancel</button>
                            <button onclick='updateOrderStatus("<?php echo $key ?>", "delivered")'>Delivered</button>
                        </div>
                    </div>

                    <div class="product-info">
                    <?php
                    foreach ($value["cart"] as $k => $v) {
                    ?>
                        <div class="shipper-product">
                            <img class="shipper-product-img" src="assets/image/product/<?php echo $k; ?>.jpg" alt="<?php echo $k; ?>" srcset="">
                            <div class="shipper-product-info">
                                <p class="shipper-product-title"><?php echo $this->getProductInfo($k)["name"] ?></p>
                                <p>Quantity: <?php echo $v; ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    </div>
                    <div id="exit">
                        <img onclick='exit("<?php echo $key;?>")'   src="../../assets/exit.jpg" alt="exit">
                    </div>
                   


                </div>
<?php
            }
        }
    }

    private function getProductInfo($pid)
    {
        $productData = DataHandle::readToJson($this::$productFile);

        foreach ($productData as $key => $value) {
            if ($key == $pid) {
                return $value;
            }
        }
    }
}
?>