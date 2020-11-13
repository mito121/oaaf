/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

let overlayOpen = false;
document.getElementById("how-toggle").addEventListener("click", function (e) {
  e.preventDefault();
  if (overlayOpen == true) {
    document.getElementById("helpOverlay").style.display = "none";
    let overlayOpen = false;
  } else {
    document.getElementById("helpOverlay").style.display = "block";
    let overlayOpen = true;
  }
});
// Close overlay btn
function closeHelpOverlay() {
  document.getElementById("helpOverlay").style.display = "none";
  let overlayOpen = false;
}
