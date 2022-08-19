function tabbedImage(imgs) {
  var imageExpand = document.getElementById("expanded");
  var imgText = document.getElementById("text");
  imageExpand.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expanded.parentElement.style.display = "block";
}
