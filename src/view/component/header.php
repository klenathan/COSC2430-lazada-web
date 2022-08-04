<div class="header">
    <a class="header-component" href="/">Logo</a>

    <input name="product-search" 
    type="text"
    id="product-search"
    placeholder="Search product... ">

    <?php
    if (isset($_COOKIE["user"])){
        echo '
        <a href="login/signOut">Sign out</a>
        <div class="user-info-wrapper-header">
            <a href="/myaccount">My Account</a>
            <img src="assets/image/test.jpg" 
            class="header-avatar"
            alt="User Avatar">
        </div>';
    } else {
        echo '<a href="login">Login</a>';
    }
    ?>
    
</div>