<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/home/shipper.css">

    <script src="js/homepage/updateOrderStatus.js"></script>


    <title>Lazada's Shipper Port</title>
</head>
<body>
    <header>
        <?php
        include_once("view/component/header.php");
        ?>
        <img class="shipper-welcome-img" src="assets/image/shipper-background.jpg" alt="" srcset="">
    </header>
    <main>
        <h1>Welcome to shipper's homepage</h1>
        <div class="shipper-order-container">
            <?php
            $shipper->getCurrentShipperOrders();
            ?>
        </div>
    </main>
    <footer>
        <?php
        include_once("view/component/footer.php");
        ?>
    </footer>
    <script src="js/shipperOrder.js"></script>
</body>
</html>