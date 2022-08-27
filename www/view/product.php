<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/product.css">

    <title><?php echo isset($this::$name) ? $this::$name : "Invalid product ID";?></title>
    <script src="js/Cart/addProductToCart.js"></script>
</head>
<body>
    <header>
        <?php
        include_once("view/component/header.php");
        ?>
    </header>

    <main>
        <?php
        if ($this::$productData != null) {
            ?>
            <div class="breadcumb">
                <a href="/">Home</a> /
                <a href="/category?category=<?php echo $this::$productData["category"]?>"><?php
                echo $this::$productData["category"]
                ?>
                </a> / 
                <a href=""><?php
                echo $this::$productData["name"]
                ?></a>
            </div>

            <div class="product-page">
                <div class="product-page-img">
                    <div class="sub-img-row">
                        <div class="column"> 
                            <img class="sub-images" src="assets/image/product/<?php echo $_GET["productid"];?>.jpg" alt="<?php $this::$name?>" onload="tabbedImage(this);" onclick="tabbedImage(this);">
                        </div>
                        <div class="column"> 
                            <img  class="sub-images" src="assets/image/product/<?php echo $_GET["productid"];?>.jpg" alt="<?php $this::$name?>" onclick="tabbedImage(this);"> 
                        </div>
                        <div class="column"> 
                            <img class="sub-images" src="assets/image/product/<?php echo $_GET["productid"];?>.jpg" alt="<?php $this::$name?>" onclick="tabbedImage(this);">
                        </div>
                    </div>
                    <div class="container">
                        <img id="expanded" style="width:100%">
                        <div id="text">
                    </div>
                </div>
                </div>
                <div class="product-page-buy">
                    <div class="sidebar"> 
                        <div class="product-info-wrapper">
                        <p class="cate"><?php echo $this::$productData["category"];?></p>
                        <p class="product-info-name"><?php echo $this::$productData["name"];?></p>
                        
                        <p class="product-info-price"><?php echo number_format($this::$productData["price"]);?> ₫</p>
                        <p class="product-info-vendor">Sold by:<?php echo $this::$productData["vendor"];?></p>
                        <p class="product-info-sold">Sold: <?php echo $this::$productData["sold"];?></p>
                        
                        <label class="product-info-quantity" for="quantity">Quantity</label>
                        <input class="quantity-input" type="number" min="1"
                        name="quantity" 
                        id="buy-quantity"
                        value="1">
                        </div>
                    
                        <div class="product-button-container">
                        <button onclick='buyNow("<?php echo $_GET["productid"];?>")' class="product-page-button" id="buy-now-btn"><img src="assets/image/icons8-basket-60.png" class="buyicon"/><img src="assets/image/white-basket.png" class="whitebuyicon"/> <p class="buy"> Buy now</p></button>   
                        <button onclick='addToCart("<?php echo $_GET["productid"];?>", )' class="product-page-button" id="add-cart-btn"><img src="assets/image/icons8-shopping-cart-64.png" class="addicon"/><img src="assets/image/white-cart.png" class="whiteaddicon"/><p class="add"> Add to cart </p></button>
                        <!-- checkCurrentCart() -->
                        </div>
                    </div>
                </div>
            </div>
      
            <div class="product-desc">
                <h2>Product description</h2>
                <p>
                <?php echo $this::$productData["desc"];?>
                </p>
                
            </div>
            <?php
        } else {
            echo '<p>Product does not exist</p>';
        }
        ?>
    </main>

    <footer>
        <?php
        include_once("view/component/footer.php");
        ?>
    </footer>
</body>
</html>