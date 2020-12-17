document.getElementById("how-toggle").addEventListener("click", function () {
    window.location.href = "index.php?page=how";
});

let overlayOpen = false;
document
          .getElementById("indtastKodeBtn")
          .addEventListener("click", function (e) {
              e.preventDefault();
              if (overlayOpen == true) {
                  document.getElementById("indtast_kode_overlay").style.display = "none";
                  let overlayOpen = false;
              } else {
                  document.getElementById("indtast_kode_overlay").style.display = "block";
                  document.getElementById("field_1").focus();
                  let overlayOpen = true;
              }
          });

// Close overlay btn
function closeHelpOverlay() {
    document.getElementById("indtast_kode_overlay").style.display = "none";
    document.getElementById('baad_valgt_overlay').style.display = "none";
    let overlayOpen = false;
}

$(".overlay_rapporter_box, .circle").on("click", function (e) {
    e.stopPropagation();
});


//AUTO MOVE CURSOR
function jump001(field, autoMove) {
    if (field.value.length >= field.maxLength) {
        document.getElementById(autoMove).focus();
    }
}


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

let fields = document.getElementsByClassName("qr-input");
for (i = 0; i < fields.length; i++) {
    setInputFilter(fields[i], function (value) {
        return /^-?\d*$/.test(value);
    });
}


//overlay baad valgt
document.getElementById('færdigMedIndtastning').addEventListener("click", function () {
    document.getElementById('baad_valgt_overlay').style.display = "block";
    document.getElementById('indtast_kode_overlay').style.display = "none";
});

document.getElementById('cancel_trip').addEventListener("click", function () {
    document.getElementById('baad_valgt_overlay').style.display = "none";
});
