const haut = document.getElementById('haut');
const section1 = document.getElementById('part-1');
let sectionHeight = section1.offsetHeight;

function resize() {
    const height = haut.offsetHeight;
    haut.style.top = -height + 'px';
    section1.style.height = (sectionHeight + height) + 'px';
}

window.addEventListener("resize", () => {
    resize();
});
window.addEventListener("load", () => {
    resize();
});

resize();
