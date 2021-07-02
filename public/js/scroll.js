const hs1 = document.getElementById("ds-txt");
const part1 = document.getElementById("part-1");

document.addEventListener("scroll", () => {
    const scrollPos = window.scrollY;
    if (scrollPos >= part1.offsetHeight * .75) hs1.classList.remove('hide')
});
