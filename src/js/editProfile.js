window.onclick = function(event) {
    if (event.target == document.getElementById("info-edit-modal")) {
        document.getElementById("info-edit-modal").style.visibility = "hidden"
    }
}

function modalOff() {
    document.getElementById("info-edit-modal").style.visibility = "hidden"
}

function changeToProfile() {
    document.getElementById("info-edit-modal").style.visibility = "hidden"
}

function changeToEdit() {
    // document.getElementById("info-render").style.visibility = "hidden"
    document.getElementById("info-edit-modal").style.visibility = "visible"
}