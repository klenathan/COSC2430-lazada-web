function displayOrder(orderID) {
    // var ID = orderID;
    // var btnID = `order${orderID}`;
    document.getElementById(orderID).style.display = "flex";
    console.log(document.getElementsByClassName("order"));
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

