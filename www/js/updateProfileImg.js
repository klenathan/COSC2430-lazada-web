


var clickUpload = function() {
    document.getElementById('avtImg').click();
}

var loadFile = function(event) {
	var image = document.getElementById('avatar');
	image.src = URL.createObjectURL(event.target.files[0]);
};
