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
