

function backTop() {
    window.scrollTo(0, 0);
}

var image = document.getElementsByClassName("thumbnail");
new simpleParallax(image, {
    scale: 2,
    delay: 0.9,
    // orientation: bottom,
});
