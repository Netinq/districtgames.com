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

const margin = 10;

window.addEventListener('load', () => {

    const images = document.getElementsByClassName('image');
    const array = Array.from(images);
    const max_width = document.getElementById('box-images').offsetWidth;
    for (let index = 0; index < array.length; index++) {
        array[index].parentElement.style.order = index;
    }
    fill(array, 0, max_width);
});

function fill(array, index, max_width, lines)
{
    if (index == array.length - 1) return;
    const image = array[index];
    const next_image = array[index + 1];
    const width = image.offsetWidth + margin;
    const next_width = next_image.offsetWidth + margin;
    const line = [];
    if (width + next_width > max_width)
    {

    }
}

function lineWidth(line)
{
    let width = 0;
    for (let index = 0; index < line.length; index++) width += (line[index].offsetWidth + margin);
    return width;
}
