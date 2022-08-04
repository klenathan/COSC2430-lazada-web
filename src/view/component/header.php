<div class="header">
    <a href="#">Logo</a>
    <a href="#">Name</a>
    <div>
        <label for="product-search">Search</label>
        <input name="product-search" type="text">
    </div>
    <?php
    if (isset($_COOKIE["user"])){
        echo '<a href="login/signOut">Sign out</a>';
        echo '<a href="#">My Account</a>';
    } else {
        echo '<a href="login">Login</a>';
    }
    ?>
    
    <a href="#">Logo</a>
</div>