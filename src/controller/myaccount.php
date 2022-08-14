<?php
class MyAccount extends Controller {
    
    private static $accountDetail;
    private static $accountFile = '../data/account.db';
    private static $orderFile = '../data/order.db';
    private static $productFile = '../data/product.db';

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
        include("controller/myAccountComponent/customerAccountPage.php");
        // Testing purpose
        foreach ($this::$accountDetail as $key => $value) {
            echo '<p>'.$key." ".$value.'</p>';
        }
        //
        new CustomerAccount();
    }

    // TODO: query data for vendor;
    private function renderVendorPage(){
        include("controller/myAccountComponent/vendorAccountPage.php");
        new VendorAccount();
    }

    // TODO: shipper add feature of update order status
    private function renderShipperPage(){
        include("controller/myAccountComponent/shipperAccountPage.php");
        new ShipperAccount("name3");

    }

    private function getAccountDetail() {
        $accountData = DataHandle::readToJson($this::$accountFile);
        foreach ($accountData as $key => $value) {
            if ($key == $_COOKIE["user"]) {
                $_SESSION["user_detail"] = json_encode($value);
                $this::$accountDetail = $value;
            }
        }
    }

    // APIs


    
}
?>