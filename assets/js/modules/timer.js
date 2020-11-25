document.getElementById("how-toggle").addEventListener("click", function () {
    window.location.href = "index.php?page=how";
});

/* ### Timer (counter) ###*/
var minutesLabel = document.getElementById("minutes");
var secondsLabel = document.getElementById("seconds");
var totalSeconds = 0;
var seconds, minutes;

// Check if trip is already started - else set sessionStorage trip_started
if (window.sessionStorage.getItem('trip_started')) {
    totalSeconds = pad(Math.floor((+new Date() - window.sessionStorage.getItem('trip_started')) / 1000));
    setTimeout(setTime, setInterval(setTime, 1000), 1000);
} else {
    window.sessionStorage.setItem('trip_started', +new Date());
    setInterval(setTime, 1000);
}

// Count seconds/minutes & output to HTML
function setTime() {
    ++totalSeconds;
    seconds = pad(totalSeconds % 60);
    minutes = pad(parseInt(totalSeconds / 60));
    secondsLabel.innerHTML = seconds;
    minutesLabel.innerHTML = minutes;
}

// add '0' before number is less than 2 digits
function pad(val) {
    var valString = val + "";
    if (valString.length < 2) {
        return "0" + valString;
    } else {
        return valString;
    }
}

/* ## Toggle collapsibles */
var box = document.getElementsByClassName("toggle-collapse");
var collapsible = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < box.length; i++) {
    box[i].addEventListener("click", function () {
        this.classList.toggle("open");

        if (this.classList.contains("open")) {
            var maxHeight = 50 + this.lastElementChild.offsetHeight + "px";
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

// Go back from sub page
$(".back").on("click", function () {
    window.location.href = "index.php";
});

$('#finish_trip').on("click", function(){
   $('#bodFortojet').css("display", "block");
});