function displayOrder(orderID) {
    document.getElementById(orderID).style.display = "block";
    document.getElementsById("order " + orderID).disabled = true;
    document.addEventListener('mouseup', function (e) {
        var container = document.getElementById(orderID);
        if (!container.contains(e.target)) {
            container.style.display = 'none';
        }

    })
}

