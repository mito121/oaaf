// Slick carousel
$(document).ready(function () {
    $('#how-carousel').slick(
        {
        dots: true,
        infinite: false,
        arrows: true,
        appendArrows: $('#how-carousel-arrows'),
        nextArrow: $('#how-next'),
        appendDots: $('#how-carousel-dots'),
        centerMode: true,
        slidesToShow: 1,
        centerPadding: '5px',
        mobileFirst: true
    }
);

    $('#how-carousel').on('afterChange', function (event, slick, currentSlide) {
//        console.log(slick, currentSlide);
        if (slick.$slides.length - 1 == currentSlide) {
            $('#how-next').html("Færdig");
        }else{
            $('#how-next').html("Næste");
        }
    });
});

setInterval(imgChange, 5000)

function imgChange(){

}
