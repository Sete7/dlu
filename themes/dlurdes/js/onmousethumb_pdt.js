var lastImg = 1;
document.getElementById(lastImg).className = "thumb selected";

function preview(img) {
    document.getElementById(lastImg).className = "normal";
    img.className = "thumb selected";
    document.getElementById(0).src = img.src;
    lastImg = img.id;
}