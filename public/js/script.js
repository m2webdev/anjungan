window.onscroll = function() {
    const header = document.querySelector("nav");
    const scrollToTop = document.getElementById("scrollToTop");
    const fixedNv = header.offsetTop;

    if (window.pageYOffset > fixedNv) {
        header.classList.add("navbar-fixed");
        header.classList.add("bg-slate-800");
        header.classList.remove("bg-transparent");
        scrollToTop.classList.remove("hidden")
    } else {
        header.classList.add("bg-transparent");
        header.classList.remove("bg-slate-800");
        header.classList.remove("navbar-fixed");
        scrollToTop.classList.add("hidden")
    }
};

function backTop() {
    window.scrollTo(0, 0);
}

var image = document.getElementsByClassName("thumbnail");
new simpleParallax(image, {
    scale: 2,
    delay: 0.9,
    // orientation: bottom,
});
