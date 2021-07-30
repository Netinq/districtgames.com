const profils = document.getElementsByClassName("profil");


function resize_profil() {
    Array.from(profils).forEach(profil => {
        const width = profil.offsetWidth;
        profil.style.height = width + "px";
    });
}

window.addEventListener("resize", () => {
    resize_profil();
});
window.addEventListener("load", () => {
    resize_profil();
});

resize_profil();

let index = 0;

function animatethis() {
    const avis = document.getElementById("avis");;
    const max = avis.children.length;
    scrollTo(avis, avis.offsetWidth * index, 1000);
    if (index == max - 1) index = 0;
    else index++;
}
setInterval(animatethis, 5000);

function scrollTo(element, to, duration) {
    var start = element.scrollLeft,
        change = to - start,
        currentTime = 0,
        increment = 20;

    var animateScroll = function () {
        currentTime += increment;
        var val = Math.easeInOutQuad(currentTime, start, change, duration);
        element.scrollLeft = val;
        if (currentTime < duration) {
            setTimeout(animateScroll, increment);
        }
    };
    animateScroll();
}

Math.easeInOutQuad = function (t, b, c, d) {
    t /= d / 2;
    if (t < 1) return (c / 2) * t * t + b;
    t--;
    return (-c / 2) * (t * (t - 2) - 1) + b;
};
