<?php
class Cart extends Controller {
    public static $cart;
    public static $test = "test";
    static $productFile = "../data/product.db";
    static $orderFile = "../data/order.db";
    static $hubFile = "../data/distributionHub.db";

    function checkout() {
        $order;
        if (isset($_POST["cart"])) {
            $cart = $_POST["cart"];
            
            $order["cart"] = json_decode($cart);
            $order["total_bill"] = (int) $_POST["bill"];
            $order["customer"] = $_COOKIE["user"];
            $order["hub"] = $this->getHub();
            $order["order_status"] = "hub";
            echo '<p>'.$_POST["bill"].'</p>';
            if ($cart == null) {
                header("Location: /cart");
            } else {
                $this->addNewOrder($order);
                header("Location: /");
            }
        } else {
            echo "Error";
        }
    }

    function getCurrentCartData() {
        header("Content-type: application/json; charset=UTF-8");
        http_response_code(200);
        if(isset($_GET["productId"])) {
            echo json_encode($this->searchProductDetail($_GET["productId"]));
        }else {
            echo json_encode(
                array("test"=>"not get",
                "test2" => 2)
            );
        }
    }

    function searchProductDetail($productId){
        $data = dataHandle::readToJson($this::$productFile);
        foreach ($data as $key => $value) {
            if ($key == $productId) {
                return array(
                    "productId"=>$productId,
                    "name"=>$value["name"],
                    "price"=>$value["price"]);
            }
        }
    }

    private function getHub() {
        $hubData = DataHandle::readToJson($this::$hubFile);
        return array_rand($hubData, 1);
    }

    private function addNewOrder($orderDetail){
        $currentData = json_decode(DataHandle::readData($this::$orderFile), true);
        $lastestId = array_key_last(array_keys($currentData));
        if (count(array_keys($currentData)) == 0) {
            $newId = "O" . 0;
        } else {
            $newId = "O" . ($lastestId + 1);
        }

        foreach ($orderDetail["cart"] as $key => $value) {
            $this->addSoldValue($key, $value);
        }
        $currentData[$newId] = $orderDetail;
        
        DataHandle::writeData($this::$orderFile, json_encode($currentData));
    }

    private function addSoldValue($pid, $quantity) {
        $data = DataHandle::readToJson($this::$productFile);
        foreach ($data as $key => &$value) {
            if ($key == $pid) {
                $value["sold"] += (int) $quantity;
                break;
            }
        }
        DataHandle::writeData($this::$productFile, json_encode($data));
    }
}
?>