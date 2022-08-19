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


    function productCard($key, $value)
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
                        <p class="product-card-rating"></p>'
                    ?>
                    <?php
                    for ($star = 0; $star < floor($value["rating"]); $star++) {
                        include("view/component/checkedStar.php");
                    }
                    ?>
                    <?php
                    for ($star = 0; $star < 5 - ceil($value["rating"]); $star++) {
                        include("view/component/uncheckedStar.php");
                    }
                    ?>
                    </div>
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
                    foreach ($data as $key => $value) {
                        if (!($value["sold"] >= 20000)) {
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

                <button class="pre-btn"><img src="../assets/arrow.png" alt=""></button>
                <button class="nxt-btn"><img src="../assets/arrow.png" alt=""></button>

                <div class="product-container">
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
                                        <p class="product-card-rating"></p>'
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
}
?>