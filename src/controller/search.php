<?php
class Search extends Controller {
    public $keyword;
    private $productFile = "../data/product.db";
    public $res;
    function __construct() {
        if (isset($_GET["search"])) {
            $this->keyword = $_GET["search"];
            // $this->res = $this->searchQuery($this->keyword);
        } else {
            $this->keyword = "";
            echo "not set";
        }
    }

    function renderProduct(){

    }

    function searchQuery($keyword) {
        $data = DataHandle::readToJson($this->productFile);
        $res = array();
        foreach ($data as $key => $value) {
            $contain = str_contains(strtolower($value["name"]), strtolower($keyword));
            if ($contain) {
                array_push($res, $key);
                ?>
                <a href="/product?productid=<?php echo $key;?>" class="product-card">
                    <?php
                    echo '
                    <img src="assets/image/product/'.$key.'.jpg" alt="'.$value["name"].'">
                    <div class="product-card-info">
                        <p class="product-card-name">'.$value["name"].'</p>
                        <p class="product-card-price">'.number_format($value["price"]).' VND</p>
                        <p class="product-card-rating">Rating: '.$value["rating"].'</p>
                    </div>';
                    ?>
                </a>
                <?php
            }
        }
        return $res;
    }
}
?>
