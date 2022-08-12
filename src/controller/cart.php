<?php
class Cart extends Controller {
    public static $cart;
    public static $test = "test";
    static $productFile = "../data/product.db";
    static $orderFile = "../data/order.db";

    function checkout() {
        $order;
        if (isset($_POST["cart"])) {
            $cart = $_POST["cart"];
            
            $order["cart"] = json_decode($cart);
            $order["total_bill"] = 100;
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

    private function addNewOrder($orderDetail){
        $currentData = json_decode(DataHandle::readData($this::$orderFile), true);
        $lastestId = array_key_last(array_keys($currentData));
        if (count(array_keys($currentData)) == 0) {
            $newId = "O" . 0;
        } else {
            $newId = "O" . ($lastestId + 1);
        }
        
        echo $lastestId + 1;
        echo "<br>";
        var_dump($currentData);
        $currentData[$newId] = $orderDetail;
        DataHandle::writeData("test", "hehe");
        DataHandle::writeData($this::$orderFile, json_encode($currentData));
    }
}
?>