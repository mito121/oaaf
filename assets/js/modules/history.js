/* Instance: History */
new Vue({
    el: "#history",
    data: {},

    mounted() {
        /* ## Toggle collapsibles */
        var box = document.getElementsByClassName("history-item");
        var collapsible = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < box.length; i++) {
            box[i].addEventListener("click", function () {
                this.classList.toggle("open");

                if (this.classList.contains("open")) {
                    var maxHeight = 65 + this.lastElementChild.offsetHeight + "px";
                    this.style.maxHeight = maxHeight;
                } else {
                    this.style.maxHeight = "65px";
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
    },

    methods: {
        /* ## Validate new email ## */
        validateNewEmail() {
            if (this.newEmail !== "" && this.newEmailRepeat !== "" && this.newEmail !== this.newEmailRepeat) {
                $("#newEmailRepeat").css("border-color", "red");
            } else {
                $("#newEmailRepeat").css("border-color", "transparent");
            }
        },

        validateNewPassword() {
            if (this.newPassword !== "" && this.newPasswordRepeat !== "" && this.newPassword !== this.newPasswordRepeat) {
                $("#newPasswordRepeat").css("border-color", "red");
            } else {
                $("#newPasswordRepeat").css("border-color", "transparent");
            }
        },
    },
});


// Close overlay on background click
//document.getElementById('helpOverlay').addEventListener('click', function (e) {
//    e.stopPropagation();
//    document.getElementById('helpOverlay').style.display = "none";
//    let overlayOpen = false;
//});