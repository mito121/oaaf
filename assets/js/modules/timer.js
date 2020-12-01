document.getElementById("how-toggle").addEventListener("click", function () {
    window.location.href = "index.php?page=how";
});

/* ### Timer (counter) ###*/
var minutesLabel = document.getElementById("minutes");
var secondsLabel = document.getElementById("seconds");
var totalSeconds = 0;
var seconds, minutes, unpaddedSeconds, unpaddedMinutes, interval;

// Check if trip is already started - else set sessionStorage trip_started
if (window.sessionStorage.getItem('trip_started')) {
    totalSeconds = pad(Math.floor((+new Date() - window.sessionStorage.getItem('trip_started')) / 1000));
    setTimeout(setTime, interval = setInterval(setTime, 1000), 1000);
} else {
    window.sessionStorage.setItem('trip_started', +new Date());
    interval = setInterval(setTime, 1000);
}

// Count seconds/minutes & output to HTML
function setTime() {
    ++totalSeconds;
    seconds = pad(totalSeconds % 60);
    minutes = pad(parseInt(totalSeconds / 60));
    secondsLabel.innerHTML = seconds;
    minutesLabel.innerHTML = minutes;

    // For receipt popup
    unpaddedSeconds = totalSeconds % 60;
    unpaddedMinutes = parseInt(totalSeconds / 60);
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


/* ## Finish trip ## */
$('#finish_trip').on("click", function () {
    $('#bodFortojet').css("display", "block");

    clearInterval(interval);

    // Output time spent at sea
    if (totalSeconds === 0) {
        $('#time_spent_at_sea').html("0:00");
    } else {
        $('#time_spent_at_sea').html(unpaddedMinutes + ":" + seconds);
    }

    // Calculate price depending on user rank
    const rank = document.getElementById("user_rank_id").value;
    let entryFee = 10;
    var pricePerMin, priceTotal, fullPrice, discount, paidMinutes;

    if (rank == 1) {
        pricePerMin = 2;
    } else if (rank == 2) {
        pricePerMin = 1.8;
    } else if (rank == 3) {
        pricePerMin = 1.5;
    } else if (rank == 4) {
        pricePerMin = 1.2;
    } else if (rank == 5) {
        pricePerMin = 1;
        entryFee = 0;
    }

    if (unpaddedSeconds >= 1 && unpaddedSeconds !== undefined) { // Round up
        priceTotal = (pricePerMin * (unpaddedMinutes + 1)) + entryFee;
        paidMinutes = unpaddedMinutes + 1;
    } else { // Do not round up
        priceTotal = pricePerMin + entryFee;
        paidMinutes = 1;
    }

    fullPrice = paidMinutes * 2 + 10;
    discount = fullPrice - priceTotal;

    $('#priceTotal').html(priceTotal + " DKK");

    // Set form values
    const today = new Date();
    const trip_date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
    const trip_finished = `${today.getHours()}`.padStart(2, '0') + ":" + `${today.getMinutes()}`.padStart(2, '0');
    $('#trip_date').val(trip_date);
    $('#trip_finished').val(trip_finished);
    $('#trip_duration').val(paidMinutes);
    $('#price_per_min').val(pricePerMin);
    $('#trip_discount').val(discount);
    $('#trip_price').val(priceTotal);
});

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