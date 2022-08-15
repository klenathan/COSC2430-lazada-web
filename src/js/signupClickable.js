var vendorSection = document.getElementById("vendor");
var shipperSection = document.getElementById("shipper");
// var customerSection = document.getElementById("customer")
var customerSection = document.getElementById("customer");
var transformSection = "transform: translate(0, -10%)";
var cssSeeMore = "visibility: hidden;"

function SeeMoreCustomer() {
    var node = document.createElement("p");
    var textNode = document.createTextNode("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.")
    node.appendChild(textNode);
    var section = document.getElementById("customer");
    section.appendChild(node);
    section.style.cssText = transformSection;
    var seeMore = document.getElementById("customer-button");
    seeMore.style.cssText = cssSeeMore;
}
// setTimeout(SeeMore, 400)

function SeeMoreVendor() {
    var node = document.createElement("p");
    var textNode = document.createTextNode("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.")
    node.appendChild(textNode);
    var section = document.getElementById("vendor");
    section.appendChild(node);
    section.style.cssText = transformSection;
    var seeMore = document.getElementById("vendor-button");
    seeMore.style.cssText = cssSeeMore;
}

function SeeMoreShipper() {
    var node = document.createElement("p");
    var textNode = document.createTextNode("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.")
    node.appendChild(textNode);
    var section = document.getElementById("shipper");
    section.appendChild(node);
    section.style.cssText = transformSection;
    var seeMore = document.getElementById("shipper-button");
    seeMore.style.cssText = cssSeeMore;
}