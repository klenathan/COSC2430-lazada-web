function showAddField() {
    field = document.getElementById("new-product-form");
    if (field.style.opacity != 1) {
        field.style.opacity = "1";
        field.style.height = "fit-content";
    } else {
        field.style.opacity = "0";
        field.style.height = "0";
    }
    
}