// Submit help overlay
let overlayOpen = false;
document.getElementById('helpForm').addEventListener('submit', function (e) {
    e.preventDefault();
    if (overlayOpen == true) {
        document.getElementById('helpOverlay').style.display = "none";
        let overlayOpen = false;
    } else {
        document.getElementById('helpOverlay').style.display = "block";
        let overlayOpen = true;
    }
});
// Close overlay btn
function closeHelpOverlay() {
    document.getElementById('helpOverlay').style.display = "none";
    let overlayOpen = false;
}
