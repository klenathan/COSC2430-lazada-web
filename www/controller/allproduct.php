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
                    ?>
                    <a href="/product?productid=<?php echo $key;?>" class="product-card">
                        <div class="card-overlay"> </div>
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
        } else {
            foreach ($data as $key => $value) {
                if ($value["price"] > $this->min && $value["price"] < $this->max) {
                    ?>
                    <a href="/product?productid=<?php echo $key;?>" class="product-card">
                        <div class="card-overlay"> </div>
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
        }
    }
}
?>