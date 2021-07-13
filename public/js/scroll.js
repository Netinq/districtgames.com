const part1 = document.getElementById("part-1");
const part2 = document.getElementById("part-2");
const part3 = document.getElementById("part-3");
const part4 = document.getElementById("part-4");

const hs1 = document.getElementById("ds-txt");
const p3pe = document.getElementById('p3pe');
const p3ca = document.getElementById("p3ca-ctn");
const p4h3 = document.getElementById("p4h3");
const p5img = document.getElementById("p5img");

document.addEventListener("scroll", () => {
    const scrollPos = window.scrollY;
    if (scrollPos >= part1.offsetHeight * 0.75) hs1.classList.remove("hide");
    if (scrollPos >= part1.offsetHeight + part2.offsetHeight * 0.75) {
        p3pe.classList.remove("hide");
        p3ca.classList.remove("hide");
    }
    if (scrollPos >= part1.offsetHeight + part2.offsetHeight + part3.offsetHeight * 0.5) {
        p4h3.classList.remove("hide");
    }
    if (scrollPos >= part1.offsetHeight + part2.offsetHeight + part3.offsetHeight + part4.offsetHeight * 0.75) {
        p5img.classList.remove("hide");
    }
});
