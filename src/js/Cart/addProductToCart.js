function addToCart(itemId) {
    quantity = parseInt(document.getElementById("buy-quantity").value)
    currentCart = JSON.parse(localStorage.getItem("cart"))

    if (quantity < 0){
        alert("quantity cannot be negative")
        // currentCart = {}
    } else {
        if (currentCart == null) {
            currentCart = {}
            currentCart[itemId] = quantity
        } else {
           if (currentCart[itemId] != null){
            currentCart[itemId] += quantity
           } else {
            currentCart[itemId] = quantity
           }
        }
        stringData = JSON.stringify(currentCart)
        localStorage.setItem("cart", stringData);
    }
    
    
}

function checkCurrentCart() {
    currentCart = JSON.parse(localStorage.getItem("cart"))
}
