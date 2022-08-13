<?php
class MyOrder extends Controller {
    static $orderFile = '../data/order.db';
    static $orderData;
    function __construct() {
        $this::$orderData = DataHandle::readToJson($this::$orderFile);
    }

    function getCurrentUserOrders(){
        foreach ($this::$orderData as $key => $value) {
            if ($value["customer"]) {
                print_r($value);
            }
        }
    }
}
?>