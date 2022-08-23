<?php
class AllProduct extends Controller {
    public $min, $max;
    private $productFile = "../data/product.db";
    public $data;

    function __construct() {
        $this->data = DataHandle::readToJson($this->productFile);
        if (isset($_GET["min"]) && isset($_GET["max"])) {
            $this->min = (int) $_GET["min"];
            $this->max = (int) $_GET["max"];
        } else {
            $this->min = 0;
            $this->max = 0;
        }
    }


    function renderResult() {
        $data = $this->data;
        // RENDERING
        if ($this->max == 0) {
            foreach ($data as $key => $value) {
                if ($value["price"] > $this->min) {
                    include("view/component/productCard.php");
                }
            }   
        } else {
            foreach ($data as $key => $value) {
                if ($value["price"] > $this->min && $value["price"] < $this->max) {
                    include("view/component/productCard.php"); 
                }
            }
        }
    }
}
?>