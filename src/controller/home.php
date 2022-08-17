<?php
class Home extends Controller {
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
    function getBestSeller() {
        $data = dataHandle::readToJson($this::$productFile);
        foreach ($data as $key => $value) {
            echo $key;
            foreach ($value as $k => $v) {
                echo $k."->".$v."<br>";
            }
            echo "<br>";
        }
    }
    function getAllProduct() {
        $data = dataHandle::readToJson($this::$productFile);
        ?>
        <div class="slider-wrapper">
            <p class="slider-header">All products</p>
            <div class="slider">
        <?php
            foreach ($data as $key => $value) {
                ?>
                <a href="/product?productid=<?php echo $key;?>" class="product-card">
                    <?php
                    echo '
                    <img src="assets/image/product/'.$key.'.jpg" alt="'.$value["name"].'">
                    <div class="product-card-info">
                        <p class="product-card-name">'.$value["name"].'</p>
                        <p class="product-card-price">'.number_format($value["price"]).' VND</p>
                        <p class="product-card-rating">Rating: '.$value["rating"].'</p>
                    </div>
                    ';
                ?>
                </a>
                <?php
            }
        ?>
            </div>
        </div>
        <?php
    }
}
?>