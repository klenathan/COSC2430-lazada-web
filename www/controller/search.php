<?php
class Search extends Controller {
    public $keyword;
    private $productFile = "../data/product.db";
    public $res;
    
    function __construct() {
        if (isset($_GET["search"])) {
            $this->keyword = $_GET["search"];
        } else {
            $this->keyword = "";
            echo "not set";
        }
    }

    function searchQuery($keyword) {
        $data = DataHandle::readToJson($this->productFile);
        $res = array();
        foreach ($data as $key => $value) {
            $contain = str_contains(strtolower($value["name"]), strtolower($keyword));
            if ($contain) {
                array_push($res, $key);
                include("view/component/productCard.php");
            }
        }
        return $res;
    }
}
?>
