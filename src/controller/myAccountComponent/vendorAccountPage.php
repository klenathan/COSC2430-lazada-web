<?php
class VendorAccount {
    private static $productFile = '../data/product.db';

    function __construct() {
        ?>

        <form class="new-product-form" action="api/newProduct"
        method="post" enctype="multipart/form-data">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" required>
            <label for="price">Price: </label>
            <input type="text" name="price" id="price" required>
            <label for="price">Category: </label>
            <input type="text" name="category" id="category" required>
            <label for="desc">Description: </label>
            <textarea name="desc" id="desc" cols="25" rows="5" required></textarea>
            <input type="file" name="pImg" id="pImg" 
            accept="image/jpg, image/jpeg" required>

            <button type="submit">Submit</button>
        </form>
        <?php
        $productData = DataHandle::readToJson($this::$productFile);
        foreach ($productData as $key => $value) {
            if ($value["vendor"] == $_COOKIE["user"]) {
                echo str_repeat("=", 20)."<br>";
                ?>
                <img src="assets/image/product/<?php echo $key;?>.jpg" alt="<?php echo $key;?>"r>
                <?php
                echo "<p>"."Name: ".$value["name"]."</p>";
                echo "<p>"."Price ".$value["price"]."</p>";
                echo "<p>"."Cat ".$value["category"]."</p>";
                echo "<p>"."Sold ".$value["sold"]."</p>";
                echo "<p>"."Stock ".$value["stock"]."</p>";
                // echo $value["desc"]."<br>";
            }
        }
    }

    function addNewProduct() {
        
    }
}
?>