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

    <style>
        #login-warn {
            color: red;
            display: none
        }
    </style>
</head>
<body>
<header>
        <?php
        include_once("view/component/header.php");
        ?>
    </header>

    <main>
        <h1>CART</h1>
        <p id="login-warn">Please login to checkout</p>
        <div id="cart-wrapper">
            <!-- Reserve for cart products -->
        </div>

        <div class="final-price">
            <p id="total-price">0</p>
            <p style="display: none" id="total-price-int">0</p>
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