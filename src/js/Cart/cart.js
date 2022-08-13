function clearCurrentCart() {
    localStorage.removeItem("cart")
    location.href = "/cart"
}