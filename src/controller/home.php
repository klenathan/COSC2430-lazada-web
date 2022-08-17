<?php
class Home extends Controller
{
    public static $bestSeller;

    // Overwrite view function
    function view($view) {
        echo '<link rel="shortcut icon" href="assets/image/favicon.png" type="image/png">';
        if(isset($_SESSION["user_detail"])) {
            $userDetail = json_decode($_SESSION["user_detail"], true);
            if ($userDetail["accountType"] == "customer") {
                include("view/home/customerHome.php");
            } else if ($userDetail["accountType"] == "shipper") {
                include("controller/myAccountComponent/shipperAccountPage.php");
                $shipper = new ShipperAccount("name3");
                include("view/home/shipperHome.php");
            } else if ($userDetail["accountType"] == "vendor") {
                include("controller/myAccountComponent/vendorAccountPage.php");
                $vendor = new VendorAccount;
                include("view/home/vendorHome.php");
                
            }
        } else {
            include("view/home/customerHome.php");
        }
        
    }

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
                            <span class="discount-tag">50% off</span>
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