<?php
class Home extends Controller
{
    public static $bestSeller;
    private static $productFile = "../data/product.db";
    function getBestSeller()
    {
        $data = dataHandle::readToJson($this::$productFile);
        foreach ($data as $key => $value) {
            echo $key;
            foreach ($value as $k => $v) {
                echo $k . "->" . $v . "<br>";
            }
            echo "<br>";
        }
    }
    function getAllProduct()
    {
        $data = dataHandle::readToJson($this::$productFile);
?>

        <section class="product">
            <h2 class="product-category"> All products</h2>

            <button class="pre-btn"><img src="../assets/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="../assets/arrow.png" alt=""></button>

            <div class="product-container">
                <?php
                foreach ($data as $key => $value) {
                ?>
                    <!-- <div > -->
                    <a class="product-card" href="/product?productid=<?php echo $key; ?>">
                        <?php
                        echo '
                        <div class="product-image">
                            <img src="assets/image/product/' . $key . '.jpg" class="product-thumb" alt="' . $value["name"] . '">  
                            <button class="card-btn">add to wishlist</button>
                        </div>
                        <div class="product-info">
                            <p class="product-card-name">' . $value["name"] . '</p>
                            <p class="product-card-price">' . number_format($value["price"]) . ' VND</p>
                            <p class="product-card-rating">Rating: ' . $value["rating"] . '</p>
                        </div>
                    ';
                        ?>
                    </a>
                    <!-- </div> -->
                <?php
                }
                ?>
            </div>
        </section>
        <script src="../js/slider.js"></script>
<?php
    }
}
?>