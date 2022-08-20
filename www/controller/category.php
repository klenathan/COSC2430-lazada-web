<?php
class Category extends Controller {

    public $data;
    public $inputCategory;
    private static $productFile = "../data/product.db";

    function __construct() {
        if (isset($_GET["category"])) {
            $this->category = $_GET["category"];
        }
    }

    public function renderCategory() {

        $data = dataHandle::readToJson(Category::$productFile);
        foreach ($data as $key => $value) {
            if ($value["category"] == $this->category) {
                
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

// FOR HEADER ONLY
    public static function getAllCategory(){
        $categories = array("Arts & Crafts", "Automotive", "Baby", "Beauty & Personal Care", "Books", "Computers", "Electronics", "Women's Fashion", "Men's Fashion", "Home and Kitchen", "Pet supplies", "Sports and Outdoors");
        ?>
        <div class="category-content">
            <?php
            foreach($categories as $category){
                echo '
                <a href="/category?category=" class="each-category">
                    <div class="category-icon">
                        <img src="assets/image/category/icon/'.$category.'.jpg" alt="'.$category.'">
                    </div>
                    <div class="category-name">
                        <h3 class="name">'.$category.'</h2>
                    </div>
                </a>';
            }
            ?>
        </div>
        <?php

}
}
?>