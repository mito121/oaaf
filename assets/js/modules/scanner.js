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
      let overlayOpen = true;
    }
  });
// Close overlay btn
function closeHelpOverlay() {
  document.getElementById("indtast_kode_overlay").style.display = "none";
  let overlayOpen = false;
}
