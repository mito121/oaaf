// Slick carousel
$(document).ready(function () {
    $('#how-carousel').slick({
        dots: true,
        infinite: false,
        arrows: false,
        appendArrows: $('#how-carousel-arrows'),
        prevArrow: '<div class=\"carousel-btn carousel-prev\"></div>',
        nextArrow: '<div class=\"carousel-btn carousel-next\"></div>',
        appendDots: $('#how-carousel-dots'),
        centerMode: true,
        slidesToShow: 1,
        centerPadding: '5px',
        mobileFirst: true
    });
});