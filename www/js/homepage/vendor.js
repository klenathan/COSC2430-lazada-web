function showAddField() {
    let blurredBackground = document.getElementById("blurred-background").style.display = "flex";
    let form = document.getElementById("new-product-form").style.display = "flex";
}

function hideAddField() {
    let blurredBackground = document.getElementById("blurred-background").style.display = "none";
    let form = document.getElementById("new-product-form").style.display = "none"
}

function clickUpload() {
    document.getElementById('pImg').click();
}

function loadFile(event) {
	var image = document.getElementById('upload-product-img');
	image.src = URL.createObjectURL(event.target.files[0]);
};

function uploadProduct() {
    if (document.getElementById("pImg").value.length == 0) {
        document.getElementById("file-upload-warn").style.display = "block"
    }
}