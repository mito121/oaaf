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

/* setInterval(function(){

let src1 = $(".how-img:nth-of-type(1)").attr();
    if (src1 == "assets/img/info1_1"){
        $(".how-img:nth-of-type(1)").attr("src", "assets/img/info1_2");
    } else {
        $(".how-img:nth-of-type(1)").attr("src", "assets/img/info1_1");
    }

let src2 = $(".how-img:nth-of-type(2)").attr();
    if (src2 == "assets/img/info2_1"){
        $(".how-img:nth-of-type(2)").attr("src" "assets/img/info2_2");
    } else {
        $(".how-img:nth-of-type(2)").attr("src" "assets/img/info2_1");
    }

let src3 = $(".how-img:nth-of-type(3)").attr();
    if (src3 == "assets/img/info3_1"){
        $(".how-img:nth-of-type(3)").attr("src" "assets/img/info3_2");
    } else {
        $(".how-img:nth-of-type(3)").attr("src" "assets/img/info3_1");
    }

let src4 = $(".how-img:nth-of-type(4)").attr();
    if (src4 == "assets/img/info4_1"){
        $(".how-img:nth-of-type(4)").attr("src" "assets/img/info4_2");
    } else {
        $(".how-img:nth-of-type(4)").attr("src" "assets/img/info4_1");
    }

}, 5000); */
