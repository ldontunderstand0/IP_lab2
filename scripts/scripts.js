let numberImage = 1;
const countImage = 4;
const pathImages = "/images/gallery/";
const countDiv = 10;
const speed = 50;

function generateImage()
{
    let widthDiv = 10/countDiv;
    let image = pathImages + "g" + numberImage + ".jpg";
    for (let i = 0; i < 200; i++)
    {
        let item = $("<div></div>");
        item.addClass("elementImage");
        item.css("width", widthDiv+"vw");
        item.css("background-image", 'url('+image+')');
        item.css("background-position-x", - i * widthDiv+"vw");
        $("#mainImage").append(item);
    }
}

function changeImage() {
    let image = pathImages + "g" + numberImage + ".jpg";
    let i = 30;
    let j = 30;
    $("#mainImage").each(function () {
        $(this).hide(speed * j, function () {
            $(this).css("background-image", 'url('+image+')');
            $(this).show(speed * i);
        });
        i++;
    });
}

function LeftClickImage() {
    if (numberImage > 1)
        numberImage--;
    else
        numberImage = countImage;
    changeImage();
}

function RightClickImage() {
    if(numberImage < countImage)
        numberImage++;
    else
        numberImage = 1;
    changeImage();
}

$( document ).ready(function() {
    generateImage();
    changeImage();
});