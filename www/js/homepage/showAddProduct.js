function showAddField() {
    // field = document.getElementById("new-product-form");
    // if (field.style.opacity != 1) {
    //     field.style.opacity = "1";
    //     field.style.height = "fit-content";
    // } else {
    //     field.style.opacity = "0";
    //     field.style.height = "0";
    // }
    let blurredBackground = document.getElementById("blurred-background").style.display = "flex";
    let form = document.getElementById("new-product-form").style.display = "flex";
}

function hideAddField() {
    let blurredBackground = document.getElementById("blurred-background").style.display = "none";
    let form = document.getElementById("new-product-form").style.display = "none"
}
