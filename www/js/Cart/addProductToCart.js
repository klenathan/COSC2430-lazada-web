function addToCart(itemId) {
  quantity = parseInt(document.getElementById("buy-quantity").value);
  currentCart = JSON.parse(localStorage.getItem("cart"));

  if (quantity < 0) {
    alert("quantity cannot be negative");
    // currentCart = {}
  } else {
    if (currentCart == null) {
      currentCart = {};
      currentCart[itemId] = quantity;
    } else {
      if (currentCart[itemId] != null) {
        currentCart[itemId] += quantity;
      } else {
        currentCart[itemId] = quantity;
      }
    }
    stringData = JSON.stringify(currentCart);
    localStorage.setItem("cart", stringData);
  }

  const cartLogo = document.getElementById("cart-logo");
  cartLogo.style.backgroundColor = "rgb(223, 91, 166)";
  setTimeout(function () {
    cartLogo.style.backgroundColor = "transparent";
  }, 350);
}

function buyNow(itemId) {
  addToCart(itemId);
  location.href = "/cart";
}

function checkCurrentCart() {
  currentCart = JSON.parse(localStorage.getItem("cart"));
}

function tabbedImage(imgs) {
  var imageExpand = document.getElementById("expanded");
  var imageText = document.getElementById("text");
  imageExpand.src = imgs.src;
  imageText.innerHTML = imgs.alt;
  expanded.parentElement.style.display = "block";
}
