<?php
class CustomerAccount {
    private static $orderFile = '../data/order.db';
    
    public function __construct() {
        $this->getCurrentCustomerOrders();
    }

    public function getCurrentCustomerOrders() {
        $orderData = DataHandle::readToJson($this::$orderFile);
        foreach ($orderData as $key => $value) {
            if($value["customer"] == $_COOKIE["user"]) {
                echo '<p>'.'total bill: '.$value["total_bill"].'</p>';
                foreach ($value["cart"] as $k => $v) {
                    echo '<p>'.$k.' | '.'quantity: '.$v.'</p>';
                }
            }
        }
    }
}
?>