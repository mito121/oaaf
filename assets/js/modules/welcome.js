// Slick carousel
$(document).ready(function () {

   const redir = function () {
      window.location.href = "index.php";
   }

   $('#welcome-carousel').slick(
           {
              dots: true,
              infinite: false,
              arrows: true,
              appendArrows: $('#welcome-carousel-arrows'),
              nextArrow: $('#welcome-next'),
              appendDots: $('#welcome-carousel-dots'),
              centerMode: true,
              slidesToSwelcome: 1,
              centerPadding: '5px',
              mobileFirst: true
           }
   );

   $('#welcome-carousel').on('afterChange', function (event, slick, currentSlide) {
      if (slick.$slides.length - 1 == currentSlide) {
         $('#welcome-next').html("Færdig");
         // Enable redirect when finished
         $('#welcome-next').on("click", redir);
      } else {
         $('#welcome-next').html("Næste");
         // Disable redirect when not finished
         $('#welcome-next').off("click", redir);
      }

      clearIntervals();
      startTutorial(currentSlide);
   });
});

var intervals = [];

var infoHeaders = [
   "Velkommen til Odense Aafarts udlejnings app!",
   "Kom godt fra start",
   "Lås båden op",
   "Nyd turen",
   "Afslut turen",
   "Regler på båden"
];

var infoTexts =
        [
           "",
           "<p>Scan QR-koden på pælen foran den båd du gerne vil sejle med, og tryk \"Lås op\" på appen for at starte turen.</p>",
           "<p>Når båden er valgt og acceptéret, hopper låsen ud af siden på pælen. Herefter skal rebet løftes over pælen, og så er du klar til at sejle.</p>",
           "<p>Læg fra kaj og nyd turen! Undgå at støde sammen med andre både i vandet og gør plads til turbåden.</p>",
           "<p>Hæng rebet om en ledig pæl og sæt låsen i låsehullet. Herefter afsluttes turen automatisk. God fornøjelse!</p>",

           "<ul class=\"rules\"><li>Max 4 personer (300 kg) </li> <li> Sejl ikke hvis du er beruset </li> <li>Medbring ikke store højtalere</li> </ul>"
        ];


function startTutorial(currentSlide) {
   var welcome_images = document.getElementsByClassName('welcome-img');
   let thisSlide = currentSlide;
   let i = 1;

   // Start with the first image
   welcome_images[currentSlide].src = "assets/img/welcome" + thisSlide + "_" + i + ".svg";

   $('#welcome-text-box h5').html(infoHeaders[currentSlide]);
   $('#welcome-text-box div').html(infoTexts[currentSlide]);

   var interval = setInterval(function () {
      if (i == 1) {
         i = 2;
         welcome_images[currentSlide].src = "assets/img/welcome" + thisSlide + "_" + i + ".svg";
      } else {
         i = 1;
         welcome_images[currentSlide].src = "assets/img/welcome" + thisSlide + "_" + i + ".svg";
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