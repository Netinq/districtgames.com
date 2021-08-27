// #0 = DistrictGames
// #1 = DistrictLight

let color = 0;
const box = document.getElementsByClassName('box');

function change(new_color)
{
    color = new_color;
    if (color == 0)
    {
        Array.from(box).forEach((element) => {
            element.classList.remove("purple");
            element.classList.add("green");
        });
    }
    else if (color == 1)
    {
        Array.from(box).forEach(element => {
            element.classList.remove("green");
            element.classList.add("purple");
        });
    }
}
