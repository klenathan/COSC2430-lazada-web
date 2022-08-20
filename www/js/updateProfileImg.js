


var clickUpload = function() {
    document.getElementById('imgupload').click();
	console.log("test");
}

var loadFile = function(event) {
	var image = document.getElementById('avatar');
	image.src = URL.createObjectURL(event.target.files[0]);
};
