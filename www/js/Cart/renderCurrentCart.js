var cartData = JSON.parse(localStorage.getItem("cart"));
var totalBill = 0;
var cartDetail = {};

fetchData().then((res) => {
  var formatted = "";
  if (totalBill == 0) {
    formatted = 0;
  } else {
    formatted = res.toLocaleString("en-US");
  }

  document.getElementById("total-price").innerText =
    "TOTAL:  " + formatted + "  VND";
  document.getElementById("total-price-int").innerText = res;
});

async function fetchData() {
  var res;
  if (cartData != null) {
    for (var key in cartData) {
      url = "cart/getCurrentCartData?productId=" + key;
      const queryRes = await fetch(url, {
        header: { "Content-type": "application/json; charset=UTF-8" },
      })
        .then((response) => {
          return response.json();
        })
        .then((data) => {
          cartDetail[data["productId"]] = {
            price: data["price"],
            quantity: cartData[data["productId"]],
          };
          totalBill += data["price"] * cartData[data["productId"]];
          appendToCart(data);
          return totalBill;
        });
      res = queryRes;
    }
  } else {
    const wrapper = document.getElementById("cart-wrapper");
    var newP = document.createElement("p");
    newP.setAttribute("id", "empty-warn");
    newP.innerText = "Cart is empty";
    wrapper.appendChild(newP);
  }
  return res;
}

function appendToCart(item) {
  const wrapper = document.getElementById("cart-wrapper");
  var newP = document.createElement("div");
  newP.setAttribute("class", "cart-product");

  //Image
  var image = document.createElement("img");
  image.setAttribute(
    "src",
    "assets/image/product/" + item["productId"] + ".jpg"
  );
  image.setAttribute("class", "product-image");

  // Texts
  var productInfo = document.createElement("div");
  productInfo.setAttribute("class", "product-info");

  var name = document.createElement("p");
  name.setAttribute("class", "cart-product-name");
  name.innerText = item["name"];

  var quantity = document.createElement("p");
  quantity.setAttribute("class", "cart-product-quantity");
  quantity.innerText = "Quantity: " + cartData[item["productId"]];

  var price = document.createElement("p");
  price.setAttribute("class", "cart-product-price");
  price.innerText = "Price: " + item["price"].toLocaleString("en-US") + "₫";

  productInfo.appendChild(name);
  productInfo.appendChild(quantity);
  productInfo.appendChild(price);

  newP.appendChild(image);
  newP.appendChild(productInfo);

  wrapper.appendChild(newP);
}
