// Submit help overlay
let overlayOpen = false;
document.getElementById("helpForm").addEventListener("submit", function (e) {
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