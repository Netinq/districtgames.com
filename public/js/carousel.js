const carousel = document.getElementById("carousel");
let left = true;

start()

function start()
{
    var inter = setInterval(() => {
        carousel.scrollLeft = carousel.scrollLeft += 1;
        if (carousel.scrollLeft >= (carousel.scrollWidth - carousel.clientWidth)) {
            clearInterval(inter);
            restart();
        }
    }, 15);
}

function restart() {
    opacity = 1;
    var hide = setInterval(() => {
        opacity -= 0.1;
        carousel.style.opacity = opacity;
        if (opacity <= 0) {
            clearInterval(hide);
            reset();
        }
    }, 40);

}
function reset() {
    carousel.scrollLeft = carousel.scrollLeft = 0;
    show()
}
function show() {
    opacity = 0;
    var show = setInterval(() => {
        opacity += 0.1;
        carousel.style.opacity = opacity;
        if (opacity >= 1) {
            clearInterval(show);
            setTimeout(() => {
                start();
            }, 60);
        }
    }, 40);
}
