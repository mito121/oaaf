
// Slick carousel
$(document).ready(function () {
    $('#stat-carousel').slick({
        dots: true,
        arrows: true,
        appendArrows: $('#stat-carousel-arrows'),
        appendDots: $('#stat-carousel-dots'),
        centerMode: true,
        slidesToShow: 1.66,
        centerPadding: '5px',
        mobileFirst: true
    });
});