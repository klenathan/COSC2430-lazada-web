function checkout() {
    const form = document.createElement('form');
    form.method = "post";
    form.action = "cart/checkout";

    const data = document.createElement('input');
    data.value = localStorage.getItem("cart");
    data.name = "cart"

    const bill = document.createElement('input');
    bill.value = document.getElementById("total-price-int").innerHTML;
    bill.name = "bill"

    form.appendChild(data);
    form.appendChild(bill);
    document.body.appendChild(form);
    localStorage.removeItem("cart")
    form.submit();
}

const checkoutBtn = document.getElementById("checkout-btn")

checkoutBtn.addEventListener('submit', function() {
    checkout();
})


