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
// document.getElementById("upload-product-img").addEventListener("click", () => {
//     clickUpload();
//     console.log("test")
// } )

document.getElementById("upload-product-img").addEventListener("mouseover", () => {
    document.getElementById("image-hover").style.display = "flex";
})

document.getElementById("upload-product-img").addEventListener("mouseleave", () => {
    document.getElementById("image-hover").style.display = "none"
})

document.getElementById("image-hover").addEventListener("click", () => {
    clickUpload();
    console.log("test2")
})

