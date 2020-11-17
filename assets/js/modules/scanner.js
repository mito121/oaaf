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
  let overlayOpen = false;
}

$(".overlay_rapporter_box, .circle").on("click", function (e) {
   e.stopPropagation();
});

//


//AUTO MOVE CURSOR
function jump001(field, autoMove){
  if (field.value.length >= field.maxLength) {
    document.getElementById(autoMove).focus();
  }
}
