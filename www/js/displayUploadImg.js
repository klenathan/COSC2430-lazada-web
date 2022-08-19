var loadFile = function(event) {
	var image = document.getElementById('upload-img');
	image.src = URL.createObjectURL(event.target.files[0]);
    image.style.opacity = 100;
    image.style.padding = "1rem 0 1rem 0";
};