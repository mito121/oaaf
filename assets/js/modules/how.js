// Slick carousel
$(document).ready(function () {

    const redir = function () {
        window.location.href = "index.php";
    }

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
        if (slick.$slides.length - 1 == currentSlide) {
            $('#how-next').html("Færdig");
            // Enable redirect when finished
            $('#how-next').on("click", redir);
        } else {
            $('#how-next').html("Næste");
            // Disable redirect when not finished
            $('#how-next').off("click", redir);
        }

        clearIntervals();
        startTutorial(currentSlide);
    });
});

var intervals = [];

var infoHeaders = [
    "Kom godt fra start",
    "Lås båden op",
    "Nyd turen",
    "Afslut turen"
];

var infoTexts =
        [
            "Scan QR-koden på pælen foran den båd du gerne vil sejle med, og tryk \"Lås op\" på appen for at starte turen.",
            "Når båden er valgt og acceptéret, hopper låsen ud af siden på pælen. Herefter skal rebet løftes over pælen, og så er du klar til at sejle.",
            "Læg fra kaj og nyd turen! Undgå at støde sammen med andre både i vandet og gør plads til turbåden.",
            "Hæng rebet om en ledig pæl og sæt låsen i låsehullet. Herefter afsluttes turen automatisk - god fornøjelse!"
        ];


function startTutorial(currentSlide) {
    var how_images = document.getElementsByClassName('how-img');
    let thisSlide = currentSlide + 1;
    let i = 1;

    // Start with the first image
    how_images[currentSlide].src = "assets/img/info" + thisSlide + "_" + i + ".svg";

    // Set text box values
    $('#how-text-box h5').html(infoHeaders[currentSlide]);
    $('#how-text-box p').html(infoTexts[currentSlide]);

    var interval = setInterval(function () {
        if (i == 1) {
            i = 2;
            how_images[currentSlide].src = "assets/img/info" + thisSlide + "_" + i + ".svg";
        } else {
            i = 1;
            how_images[currentSlide].src = "assets/img/info" + thisSlide + "_" + i + ".svg";
        }
    }, 3300);

    intervals.push(interval);
}
startTutorial(0);

function clearIntervals() {
    for (i = 0; i < intervals.length; i++) {
        clearInterval(intervals[i]);
    }
}