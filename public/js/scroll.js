const part1 = document.getElementById("part-1");
const part2 = document.getElementById("part-2");

const hs1 = document.getElementById("ds-txt");
const p3pe = document.getElementById('p3pe');
const p3ca = document.getElementById("p3ca-ctn");

document.addEventListener("scroll", () => {
    const scrollPos = window.scrollY;
    if (scrollPos >= part1.offsetHeight * 0.75) hs1.classList.remove("hide");
    if (scrollPos >= part1.offsetHeight+part2.offsetHeight * 0.75) {
        p3pe.classList.remove("hide");
        p3ca.classList.remove("hide");
    }
});
