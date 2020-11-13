// Slick carousel
$(document).ready(function () {
    $('#stat-carousel').slick({
        dots: false,
        arrows: true,
        appendArrows: $('#stat-carousel-arrows'),
        prevArrow: '<div class=\"carousel-btn carousel-prev\"></div>',
        nextArrow: '<div class=\"carousel-btn carousel-next\"></div>',
        appendDots: $('#stat-carousel-dots'),
        centerMode: true,
        slidesToShow: 1.66,
        centerPadding: '5px',
        mobileFirst: true
    });
});

/* ## Toggle collapsibles ## */
var box = document.getElementsByClassName("toggle-collapse");
var collapsible = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < box.length; i++) {
    box[i].addEventListener("click", function () {
        this.classList.toggle("open");

        if (this.classList.contains("open")) {
            var maxHeight = 65 + this.lastElementChild.offsetHeight + "px";
            this.style.maxHeight = maxHeight;
        } else {
            this.style.maxHeight = "50px";
        }
    });
}

for (i = 0; i < collapsible.length; i++) {
    collapsible[i].addEventListener("click", function (e) {
        e.stopPropagation();
    });
}