


var clickUpload = function() {
    document.getElementById('avtImg').click();
	// console.log("test");
}

var loadFile = function(event) {
	var image = document.getElementById('avatar');
	// var image_ele =  document.createElement("img");
	// image_ele.setAttribute("src", URL.createObjectURL(event.target.files[0]))
	// image_ele.classList.add("avatar-image")
	// console.log(event.target.files[0])
	image.src = URL.createObjectURL(event.target.files[0]);
	// image.appendChild(image_ele)
};
