<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <title><?php echo isset($_GET["productid"])? $_GET["productid"] : "Invalid product ID";?></title>
</head>
<body>
    <header>
        <?php
        include_once("view/component/header.php");
        ?>
    </header>

    <main>
        <p>
        <?php
        echo "Product:\t";
        echo isset($_GET["productid"])? $_GET["productid"] : "Invalid product ID";
        ?>
        </p>
        
        <div>
            <?php
            if ($this::$productData != null) {
                foreach ($this::$productData as $key => $value) {
                    echo "<p>".$key.":".$value."</p>";
                    echo "\n \n";
                }
            } else {
                echo '<p>Product does not exist</p>';
            }
            ?>
            
        </div>
    </main>

    <footer>
        <?php
        include_once("view/component/footer.php");
        ?>
    </footer>
</body>
</html>