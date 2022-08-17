<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/home/vendor.css">

    <script src="js/homepage/showAddProduct.js"></script>

    <title>Lazada's Vendor Portal</title>
</head>
<body>
    <header>
        <?php
        include_once("view/component/header.php");
        ?>
    </header>

    <main>
        <h2>Welcome to Seller's page</h2>
        <button onclick="showAddField()">Add New Product</button>
        <form id="new-product-form" class="new-product-form" action="api/newProduct"
            method="post" enctype="multipart/form-data">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" required>
            <label for="price">Price: </label>
            <input type="number" name="price" id="price" required>
            <label for="price">Category: </label>
            <input type="text" name="category" id="category" required>
            <label for="desc">Description: </label>
            <textarea name="desc" id="desc" cols="25" rows="5" required></textarea>
            <input type="file" name="pImg" id="pImg" 
            accept="image/jpg, image/jpeg" required>

            <button id="add-product-btn" type="submit">Submit</button>
        </form>

        <div class="vendor-product">
            <?php
            $vendor->renderAllProduct();
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