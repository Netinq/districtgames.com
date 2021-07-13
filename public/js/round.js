const progress = 100;
const circles = document.getElementsByClassName('circle-prog');
const part5 = document.getElementById('part-5');

let active = false;


document.addEventListener("scroll", () => {
    if (!active)
    {
        const scrollPos = window.scrollY;
        if (scrollPos >= (part5.getBoundingClientRect().top + window.scrollY - 250))
        {
            Array.from(circles).forEach(circle => {
                circle.style.strokeDasharray = progress * 4.65 + " 999";
            });
            active = true
        }
    }
});
