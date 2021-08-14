const header = document.getElementById("header");
let oldScroll = 0;

if (document.documentElement.offsetWidth >= 991) {
    document.addEventListener("scroll", () => {
        if (
            document.documentElement.scrollTop >= 200 &&
            document.documentElement.scrollTop > oldScroll &&
            !header.classList.contains("hide-header")
        ) {
            header.classList.add("hide-header");
            header.classList.remove("show-header");
        } else if (
            document.documentElement.scrollTop < oldScroll &&
            header.classList.contains("hide-header")
        ) {
            header.classList.remove("hide-header");
            header.classList.add("show-header");
        }
        oldScroll = document.documentElement.scrollTop;
    });
    document.addEventListener("scroll", () => {
        if (window.scrollY >= 200 && !header.classList.contains("scroll-header")) {
            header.classList.add("scroll-header");
        }
        if (window.scrollY < 200 && header.classList.contains("scroll-header")) {
            header.classList.remove("scroll-header");
        }
    });
}
