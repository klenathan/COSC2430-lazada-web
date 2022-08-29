<?php
class Home extends Controller
{
    public static $bestSeller;

    // Overwrite view function
    function view($view)
    {
        echo '<link rel="shortcut icon" href="assets/image/favicon.png" type="image/png">';
        if (isset($_SESSION["user_detail"])) {
            $userDetail = json_decode($_SESSION["user_detail"], true);
            if ($userDetail["accountType"] == "customer") {
                include("view/home/customerHome.php");
            } else if ($userDetail["accountType"] == "shipper") {
                include("controller/myAccountComponent/shipperAccountPage.php");
                $shipper = new ShipperAccount($userDetail["hub"]);
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


    function productCard($key, $value, $sold = null)
    {
        ?>
                <a class="product-card" href="/product?productid=<?php echo $key; ?>">
                    <?php
                    echo '
                    <div class="product-image">
                        <img src="assets/image/product/' . $key . '.jpg" class="product-thumb" alt="' . $value["name"] . '">  
                    </div>
                    <div class="product-info">
                        <p class="product-card-name">' . $value["name"] . '</p>
                        <p class="product-card-price">' . number_format($value["price"]) . ' VND</p>
                        ';
                        if($sold != null) {
                            ?>
                            <p class="product-card-sold">Sold: <?php echo $sold;?></p>
                            <?php
                        }
                    ?>
                    </div>
                    <button onclick='disableLink(), addToCart("<?php echo $key?>");' class="add-to-cart-btn" id="buy-quantity" value="1">
                    Add to cart
                </button>

                </a>
            <?php
    }


    function getBestSeller()
    {
            $data = dataHandle::readToJson($this::$productFile);
        ?>
            <section class="product">
                <div class="product-category">
                    <h2>Best seller</h2>
                    <a href="/allproduct"><em>View all product --></em></a>

                </div>

                <button class="pre-btn"><img src="../assets/arrow.png" alt=""></button>
                <button class="nxt-btn"><img src="../assets/arrow.png" alt=""></button>

                <div class="product-container">
                    <?php
                    uasort($data, function($a, $b) {
                        return $b["sold"] <=> $a["sold"];
                    });
                    
                    foreach ($data as $key => $value) {
                        if (($value["sold"] >= 20000)) {
                            $sold = $value["sold"];
                            echo '<div class="product-card-slider">';
                                $this->productCard($key, $value, $sold);
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </section>
        <?php
        }

        function getCategory($category)
        {
            $data = dataHandle::readToJson($this::$productFile);
        ?>
            <section class="product">
                <div class="product-category">
                    <h2><?php
                        echo $category
                        ?></h2>
                    <a href="/allproduct"><em>View all product --></em></a>

                </div>

                <div class="productContainer">
                    <?php
                    foreach ($data as $key => $value) {
                        if ($value["category"] != $category) {
                            continue;
                        }
                    ?>
                        <?php
                        $this->productCard($key, $value);
                        ?>
                    <?php
                    }
                    ?>
                </div>
            </section>
        <?php
    }

    function getAllProduct()
    {
        $data = dataHandle::readToJson($this::$productFile);
        ?>

            <section class="product">
                <div class="product-category">
                    <h2> All products</h2>
                    <a href="/allproduct"><em>View all product --></em></a>

                </div>

                <button class="pre-btn"><img src="../assets/arrow.png" alt=""></button>
                <button class="nxt-btn"><img src="../assets/arrow.png" alt=""></button>

                <div class="product-container">
                    <?php
                    foreach ($data as $key => $value) {
                    ?>
                        <a class="product-card" href="/product?productid=<?php echo $key; ?>">
                            <?php
                            echo '
                                <div class="product-image">
                                    <img src="assets/image/product/' . $key . '.jpg" class="product-thumb" alt="' . $value["name"] . '">  
                                </div>
                                <div class="product-info">
                                    <p class="product-card-name">' . $value["name"] . '</p>
                                    <p class="product-card-price">' . number_format($value["price"]) . ' VND</p>
                                    <p id="product-card-rating"></p>'
                            ?>
                            </div>
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </section>
        <?php
    }
    function getAllCategory(){
        $categories = array("Arts and Crafts", "Automotive", "Baby", "Beauty and Personal Care", "Books", "Computers", "Electronics", "Women Fashion", "Men Fashion", "Home and Kitchen", "Pet supplies", "Sports and Outdoors");
        ?>
        <div class="category-contain">
                
        
            <div class="title">
                <h2>All category</h2>
            </div>
            <div class="all-category">
            <?php
            foreach($categories as $category){
                echo '
                <a href="/category?category='.$category.'" class="each-category">
                    <div class="category-img">
                        <img src="assets/image/category/'.$category.'.jpg" alt="'.$category.'">
                    </div>
                    <div class="category-name">
                        <h3 class="name">'.$category.'</h2>
                    </div>
                </a>';
            }
            ?>
            </div>
        </div>
        <?php
    
    }
}
?>