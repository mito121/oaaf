
/* ## Toggle collapsibles ## */
var box = document.getElementsByClassName("toggle-collapse");
var collapsible = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < box.length; i++) {
    box[i].addEventListener("click", function () {
        this.classList.toggle("open");

        if (this.classList.contains("open")) {
            if (this.classList.contains("sub-box-big")) { // If sub-box-big set max-height to content size + 70px
                var maxHeight = 70 + this.lastElementChild.offsetHeight + "px";
                this.style.maxHeight = maxHeight;
            } else { // If sub-box-big set max-height to content size + 50px
                var maxHeight = 50 + this.lastElementChild.offsetHeight + "px";
                this.style.maxHeight = maxHeight;
            }

        } else {
            if (this.classList.contains("sub-box-big")) { // If sub-box-big set max-height to 70px
                this.style.maxHeight = "70px";
            } else { // If sub-box-big set max-height to 50px
                this.style.maxHeight = "50px";
            }
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


// transfor money overlay
$('#xferMoney').on("click", function (e) {
    $('html, body').css("overflow-y", "hidden");
    $('#xferMoneyOverlay').css("display", "block");
});

$('#cancelXfer').on("click", function (e) {
    $('html, body').css("overflow-y", "auto");
    $('#xferMoneyOverlay').css("display", "none");
});


// Allow only numbers in xfer amount
function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function (event) {
        textbox.addEventListener(event, function () {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                this.value = "";
            }
        });
    });
}

let field = document.getElementById("xferAmount");
setInputFilter(field, function (value) {
    return /^-?\d*$/.test(value);
});

//confirmation: Pengene er i hus bich
document.getElementById('overfoertTilSaldo').addEventListener("click", displayOverlayPO);
function displayOverlayPO(){
  event.preventDefault()
  document.getElementById("pengeoverfoert").style.display = "block";
  document.getElementById('xferMoneyOverlay').style.display = "none";

  var inputMoney = document.getElementById('xferAmount').value;
  document.getElementById('pengeDisplay').innerHTML = inputMoney + " DKK";
};
