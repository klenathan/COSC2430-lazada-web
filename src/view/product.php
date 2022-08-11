<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/product.css">

    <title><?php echo isset($this::$name) ? $this::$name : "Invalid product ID";?></title>
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
                <a href="#"><?php
                echo $this::$productData["category"]
                ?>
                </a> / 
                <a href=""><?php
                echo $this::$productData["name"]
                ?></a>
            </div>

            <div class="product-page">
                <div class="product-page-img">
                    <img src="assets/image/product/<?php echo $_GET["productid"];?>.jpg" 
                    class="main-img"
                    alt="" srcset="">
                    <div class="sub-img">
                        <img src="assets/image/product/<?php echo $_GET["productid"];?>.jpg" alt="" srcset="">
                        <img src="assets/image/product/<?php echo $_GET["productid"];?>.jpg" alt="" srcset="">
                        <img src="assets/image/product/<?php echo $_GET["productid"];?>.jpg" alt="" srcset="">
                    </div>
                </div>
                <div class="product-page-buy">
                <p><?php echo $this::$productData["category"];?></p>
                    <p class="product-info-name"><?php echo $this::$productData["name"];?></p>
                    <p class="product-info-vendor">Sold by: <b><?php echo $this::$productData["vendor"];?></b></p>
                    <p class="product-info-price"><?php echo number_format($this::$productData["price"]);?> VND</p>
                    <p class="product-info-sold"><?php echo $this::$productData["sold"];?></p>
                    <p class="product-info-stock"><?php echo $this::$productData["stock"];?></p>
                    <p class="product-info-rating"><?php echo $this::$productData["rating"];?>/5</p>
                    <button>BUY DE</button>
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