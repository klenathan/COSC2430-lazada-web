<?php
session_start();
?>

<script src="js/updateProfileImg.js"></script>

<style>
/* .img-upload{
    background: red
} */

.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}


.img-upload {
    width: 0.1px;
    height: 0.1px;
    z-index: -1
}

label {
    padding: 2rem;
    background: red;
    cursor: pointer
}

</style>

<form style="display: flex; flex-direction: column; width: 30%"
action="" method="post" enctype = "multipart/form-data">
    Username<input type="text" name="username" id="username">
    Password<input type="text" name="password" id="password">
    email<input type="text" name="email" id="email">

    name<input type="text" name="name" id="name">
    address<input type="text" name="address" id="address">

    
    <!-- <button onclick="clickUpload()">UP</button> -->
    
    
    <label onclick="clickUpload()" for="image">
        Upload
        <input id="img-input" class="img-upload" 
        onchange="loadFile(event)"
        type="file" name="image" id="image">
    </label>
    
    
    

    <input type="submit" value="hello">
    <p id="temp-name">tmp_name: <?php echo $_FILES["image"]["tmp_name"];?></p>
    <img id="upload-img" src="<?php echo $_FILES["image"]["tmp_name"];?>.jpg" alt="" srcset="">

</form>