<a href="/product?productid=<?php echo $key;?>" class="product-card">
    <img src="assets/image/product/<?php echo $key?>.jpg" alt="<?php echo $value["name"]?>">
    <div class="product-card-info">
        <p class="product-card-name"><?php echo $value["name"]?></p>
        <p class="product-card-price"><?php echo number_format($value["price"])?> VND</p> 
    </div>'
</a>