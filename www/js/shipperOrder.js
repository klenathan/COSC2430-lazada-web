function displayOrder(orderID) {
    document.getElementById(orderID).style.display = "flex";
    var btnID = document.querySelectorAll(".order");
    btnID.forEach(order => {
        order.style.pointerEvents = "none";
        order.style.opacity = 0.5;
    });
    document.addEventListener('mouseup', function (e) {
        var container = document.getElementById(orderID);
        if (!container.contains(e.target)) {
            container.style.display = 'none';
            btnID.forEach(order => {
                order.style.pointerEvents = "auto";
                order.style.opacity = 1;

            });
        }

    })
}

function exit(orderID) {
    var container = document.getElementById(orderID);
    var btnID = document.querySelectorAll(".order");
    container.style.display = "none";
    btnID.forEach(order => {
        order.style.pointerEvents = "auto";
        order.style.opacity = 1;
    }
    )
}
