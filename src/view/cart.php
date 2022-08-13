<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <!-- Script -->
    <script src="js/Cart/checkout.js" defer></script>
    <script src="js/Cart/cart.js" defer></script>
    <script src="js/Cart/renderCurrentCart.js" defer></script>

    <title>Shopping Cart</title>
</head>
<body>
<header>
        <?php
        include_once("view/component/header.php");
        ?>
    </header>

    <main>
        <div>CART</div>
        <div id="cart-wrapper">
            
        </div>

        <div class="final-price">
            <p id="total-price">0</p>
        </div>
        
        <button onclick='clearCurrentCart()'> Clear </button>
        <button onclick="checkout()" id="checkout-btn">Check out</button>
    </main>

    <footer>
        <?php
        include_once("view/component/footer.php");
        ?>
    </footer>
</body>
</html>