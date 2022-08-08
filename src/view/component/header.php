<div class="header">
    <a class="header-component" href="/">Logo</a>

    <input name="product-search" 
    type="text"
    id="product-search"
    placeholder="Search product... ">

    <?php
    if (isset($_COOKIE["user"])){
        echo '
        <div class="user-info-wrapper-header">
            <a href="/myaccount">My Account</a>
            <img src="assets/image/test.jpg" 
            class="header-avatar"
            alt="User Avatar">
        </div>
        <a href="login/signOut">Sign out</a>';
    } else {
        echo '<a href="login">Login</a>';
    }
    ?>
    
</div>