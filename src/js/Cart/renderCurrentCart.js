var cartData = JSON.parse(localStorage.getItem("cart"))
var totalBill = 0;
var cartDetail = {}

fetchData().then(res => {
    var formatted = '';
    if (totalBill == 0) {
        formatted = 0 
    } else {
        formatted = res.toLocaleString('en-US');
    }
    
    document.getElementById("total-price").innerText = formatted + " VND"
})

async function fetchData() {
    var res;

    for (var key in cartData) {
        url = "cart/getCurrentCartData?productId=" + key
        const queryRes = await fetch(url, {
            header: {"Content-type": "application/json; charset=UTF-8"}
        })
        .then(response => {
            return response.json()
        })
        .then(data =>{
            cartDetail[data["productId"]] = {
                "price": data["price"],
                "quantity": cartData[data["productId"]]
            }
            totalBill += data["price"] * cartData[data["productId"]]
            appendToCart(data)
            return totalBill
        })
        res = queryRes
    }
    return res
}

function appendToCart(item){
    const wrapper = document.getElementById("cart-wrapper")
    var newP = document.createElement("p")
    newP.innerText = item["productId"] + " | " 
    + item["name"] + " | " 
    + item["price"] + "VND" + " | "
    + cartData[item["productId"]]
    wrapper.appendChild(newP)
}
