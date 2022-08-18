
var n = 0;
// var buttonModified = "width: 125px; height: 25px; font-size: 10px"

var buttonModified = {
    zoomIn: "width: 150px; height: 30px; font-size: 12px",
    zoomOut: "font-size: 16px"
}

var tabModified = {
    zoomIn: "transform: scale(1.5); gap: 0; z-index: 2;",
    zoomOut: "transform: scale(1); z-index: 1"
}

var imgModified = {
    // zoomIn: "display: none;",
    zoomIn: "none",
    zoomOut: "block"
}
var ulModified = {
     zoomIn: "display: block; font-size: 12px",
     zoomOut: "display: none"
}

var h2Modified = {
    zoomIn: "18px",
    zoomOut: "24px"
}

var backgroundModified  = {
    zoomIn: "z-index: 2; background-color: rgba(0, 0, 0, 0.8)",
    zoomOut: "z-index: 0; background-color: none"
}
    
function seeMore(tab) {
    var ul = tab.getElementsByTagName("ul")[0]
    var h2 = tab.getElementsByTagName("h2")[0]
    var button = tab.getElementsByTagName("a")[0];
    var img = tab.getElementsByTagName("img")[0];
    var background = document.getElementById("option");
    
    switch(n) {
        case 0:
            console.log(tabModified.zoomIn)
            h2.style.fontSize = h2Modified.zoomIn;
            tab.style.cssText = tabModified.zoomIn;
            ul.style.cssText = ulModified.zoomIn;
            img.style.display = imgModified.zoomIn;
            button.style.cssText = buttonModified.zoomIn;
            background.style.cssText = backgroundModified.zoomIn
            n += 1;
            break;
        case 1:
            h2.style.fontSize = h2Modified.zoomOut;
            tab.style.cssText = tabModified.zoomOut;
            ul.style.cssText = ulModified.zoomOut;
            img.style.display = imgModified.zoomOut;
            button.style.cssText = buttonModified.zoomOut;
            background.style.cssText = backgroundModified.zoomOut;
            n -= 1
            break
    }
}

function chooseFile() {
  document.getElementById('imgupload').click();
}