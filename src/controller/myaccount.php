<?php
class MyAccount extends Controller {
    
    private static $accountDetail;
    private static $accountFile = '../data/account.db';
    private static $orderFile = '../data/order.db';

    function __construct() {
        $this->getAccountDetail();
    }

    function renderPage(){
        $accountType = $this::$accountDetail["accountType"];
        if ($accountType == "customer") {
            $this->renderCustomerPage();

        } else if ($accountType == "vendor") {
            $this->renderVendorPage();
        } else if ($accountType == "shipper") {
            $this->renderShipperPage();
        } else {
            echo "unknown account type";
        }
    }

    private function renderCustomerPage() {
        foreach ($this::$accountDetail as $key => $value) {
            echo '<p>'.$key." ".$value.'</p>';
        }

        $this->getCurrentCustomerOrders();

    }
    // TODO: query data for vendor;
    // update hub data structure => hubid: {name: name; add: add}
    // add order status to order data structure
    
    private function renderVendorPage(){

    }

    // TODO: shipper add feature of update order status
    private function renderShipperPage(){
        $this->getCurrentShipperOrders("name3");
    }

    private function getAccountDetail() {
        $accountData = DataHandle::readToJson($this::$accountFile);
        foreach ($accountData as $key => $value) {
            if ($key == $_COOKIE["user"]) {
                $this::$accountDetail = $value;
            }
        }
    }

    private function getCurrentCustomerOrders() {
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

    private function getCurrentShipperOrders($hub) {
        $orderData = DataHandle::readToJson($this::$orderFile);
        foreach ($orderData as $key => $value) {
            if ($value["hub"] == $hub) {
                echo '<p>'.'total bill: '.$value["total_bill"].'</p>';
                foreach ($value["cart"] as $k => $v) {
                    echo '<p>'.$k.' | '.'quantity: '.$v.'</p>';
                } 
            }
        }
    }
}
?>