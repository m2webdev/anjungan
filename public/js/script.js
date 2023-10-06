window.onscroll = function () {
    const header = document.querySelector("header");
    const scrollToTop = document.getElementById("scrollToTop");
    const blockquote = document.getElementById("blockquote");
    const fixedNv = header.offsetTop;

    if (window.pageYOffset > fixedNv) {
        header.classList.add("navbar-fixed");
        header.classList.remove("bg-slate-900");
        header.classList.remove("lg:bg-transparent");
        scrollToTop.classList.remove("hidden");
    } else {
        header.classList.add("bg-slate-900");
        header.classList.add("lg:bg-transparent");
        header.classList.add("text-white");
        header.classList.remove("navbar-fixed");
        scrollToTop.classList.add("hidden");
    }

    if (window.pageYOffset > 524 && window.pageYOffset < 1000) {
        blockquote.classList.add("scale-110");
        // blockquote.classList.add("bg-red-500");
    } else {
        blockquote.classList.remove("scale-110");
        // blockquote.classList.remove("bg-red-500");
    }
};

function backTop() {
    window.scrollTo(0, 0);
}

var image = document.getElementsByClassName("thumbnail");
new simpleParallax(image, {
    orientation: "left",
    scale: 1.5,
    delay: 0.9,
});
