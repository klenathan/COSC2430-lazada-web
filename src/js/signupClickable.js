
var n = 0;
// var buttonModified = "width: 125px; height: 25px; font-size: 10px"

var buttonModified = {
    zoomIn: "width: 10em; height: 3em; font-size: .6em; margin-top: 10em",
    zoomOut: "font-size: 0.9em"
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
     zoomIn: "display: block;",
     zoomOut: "display: none"
}

var h2Modified = {
    zoomIn: "font-size: 0.9em; padding-top: 0.9em",
    zoomOut: "font-size: 1em"
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
            h2.style.cssText = h2Modified.zoomIn;
            tab.style.cssText = tabModified.zoomIn;
            ul.style.cssText = ulModified.zoomIn;
            img.style.display = imgModified.zoomIn;
            button.style.cssText = buttonModified.zoomIn;
            background.style.cssText = backgroundModified.zoomIn
            n += 1;
            break;
        case 1:
            h2.style.cssText = h2Modified.zoomOut;
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