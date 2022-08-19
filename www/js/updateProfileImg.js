console.log("test");


var clickUpload = function() {
    document.getElementById('imgupload').click();
}

var loadFile = function(event) {
	var image = document.getElementById('customer-img');
	image.src = URL.createObjectURL(event.target.files[0]);
};
