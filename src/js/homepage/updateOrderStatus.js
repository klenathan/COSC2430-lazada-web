function updateOrderStatus(orderid, status) {
    const form = document.createElement('form');
    form.method = "post";
    form.action = "api/updateOrderStatus";

    const data = document.createElement('input');
    elementid = "order_" + orderid
    data.value = document.getElementById(elementid).innerHTML;
    data.name = "order_id"

    const status_field = document.createElement('input');
    status_field.value = status;
    status_field.name = "status";

    form.appendChild(data);
    form.appendChild(status_field);
    document.body.appendChild(form);
    form.submit();
}