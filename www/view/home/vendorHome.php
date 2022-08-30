<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/home/vendor.css">

    <script src="js/homepage/vendor.js" defer></script>

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
        <button class="new-product-btn" onclick="showAddField()">Add New Product</button>
        <div id="blurred-background"></div>
        <form id="new-product-form" class="new-product-form" action="api/newProduct"
            method="post" enctype="multipart/form-data">
            <div class="x-button">
                <img src="assets/icons8-xbox-x-50.png" alt="" class="x-button" id="x-button" 
                onclick="hideAddField()">
            </div>
            <div class="form-detail">
                <div class="form-row">
                    <div class="form-label">
                        <label for="product name">Product name: </label>
                    </div>
                    <div class="form-field">
                        <input type="text"
                        name="name"
                        id="name"
                        class="input-field"
                        placeholder="Product name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-label">
                        <label for="Product price">Product price: </label>
                    </div>
                    <div class="form-field">
                        <input type="numeber"
                        class="input-field"
                        id="price" placeholder="Product price" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-label">
                        <label for="category">Category: </label>
                    </div>
                    <select name="category" id="category">
                        <?php
                        // Lazy code :(
                        $category = array("Arts & Crafts", "Automotive", "Baby", 
                        "Beauty & Personal Care", "Books", "Computers", 
                        "Electronics", "Women's Fashion", "Men's Fashion", 
                        "Home and Kitchen", "Pet supplies", "Sports and Outdoors");

                        foreach ($category as $value) {
                            ?>
                            <option value="<?php echo $value?>"><?php echo $value?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="product-desc">
                <div class="form-label">
                    <label for="desc">Description: </label>
                </div>
                <textarea name="desc" id="desc" cols="25" rows="5" class="input-field"></textarea>
            </div>
            
            <!-- IN progress -->
            <div class="form-image" id= "test">
            
                <input type="file" name="pImg" id="pImg" 
                accept="image/jpg, image/jpeg" required
                onchange="loadFile(event)" style="display:none"/>
                <img class="product-img-blank" id="upload-product-img"
                src="assets/icons8-product-100.png" alt="blank avatar">
                <div id="image-hover" >
                    <img src="assets/image/signupimage/camera.png" alt="blank image">
                </div>
                
            </div>

            

            <div class="button-wrapper">
                <button id="add-product-btn" type="submit">Submit</button>
            </div>
                        
            
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