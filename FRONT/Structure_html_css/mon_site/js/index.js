
var slideshow = document.querySelectorAll('#slideshow .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide, 3000); /* Интервал между картинками */
function nextSlide() {
    slideshow[currentSlide].className = 'slide';
    currentSlide = (currentSlide + 1) % slideshow.length;
    slideshow[currentSlide].className = 'slide demonstration';
}

@media print
{
        .printiframe, .printiframe *
        {
            display: block!important;
        }
    body.maincontent {
        display: none;
    }
}    