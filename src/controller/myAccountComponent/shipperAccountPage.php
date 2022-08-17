<?php
class ShipperAccount {
    private static $orderFile = '../data/order.db';

    function __construct($hub) {
        $this->getCurrentShipperOrders($hub);
    }
    
    public function getCurrentShipperOrders($hub) {
        $orderData = DataHandle::readToJson($this::$orderFile);
        foreach ($orderData as $key => $value) {
            if ($value["hub"] == $hub && $value["order_status"] == "hub") {
                echo '<p>'.'total bill: '.$value["total_bill"].'</p>';
                foreach ($value["cart"] as $k => $v) {
                    echo '<p>'.$k.' | '.'quantity: '.$v.'</p>';
                } 
            }
        }
    }

}
?>