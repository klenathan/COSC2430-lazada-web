<?php
class MyOrder extends Controller {
    static $orderFile = '../data/order.db';
    static $orderData;
    function __construct() {
        $this::$orderData = DataHandle::readToJson($this::$orderFile);
    }

    function getCurrentUserOrders(){
        foreach ($this::$orderData as $key => $value) {
            if ($value["customer"] == $_COOKIE["user"]) {
                ?>
                <p> <?php echo $key;?></p>
                <p> <?php echo $value["total_bill"];?></p>
                <?php
                foreach ($value["cart"] as $pId => $quantity) {
                    ?>
                    <p> <?php echo $pId." ".$quantity;?></p>
                    <?php
                }
            }
        }
    }
}
?>