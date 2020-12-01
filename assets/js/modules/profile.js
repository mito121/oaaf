/* Instance: Profile */
new Vue({
    el: "#profile",
    data: {
        newEmail: "",
        newEmailRepeat: "",

        newPassword: "",
        newPasswordRepeat: "",
    },

    mounted() {
        /* ## Toggle collapsibles ## */
        var box = document.getElementsByClassName("toggle-collapse");
        var collapsible = document.getElementsByClassName("collapsible");
        var annullers = false;
        var i;

        for (i = 0; i < box.length; i++) {
            box[i].addEventListener("click", function () {


                if (annullers == false) {
                    this.childNodes[2].getElementsByTagName("form")[0].lastChild.childNodes[0].addEventListener("click", () => {
                        this.style.maxHeight = "50px";
                        this.classList.remove("open");
                    });

                    if (i - 1 == box.length) {
                        annullers = true;
                    }
                }

                this.classList.toggle("open");

                if (this.classList.contains("open")) {
                    var maxHeight = 50 + this.lastElementChild.offsetHeight + "px";
                    this.style.maxHeight = maxHeight;

                    // Scroll to selected item
//                    setTimeout(function () {
                    $('html, body').animate({
                        scrollTop: this.offsetTop - 85
                    }, 500);
//                    }, 250);

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


        /* ## Check if user tried to change password and failed ## */
        if (window.sessionStorage.getItem('pw_change') == 'false') {
            $("#currentPw").css("border-color", "red");
            $('#changePassword').click();
            $('#currentPw').focus();
        } else if (window.sessionStorage.getItem('pw_change') == 'true') {
            
        } else {
            $("#currentPw").css("border-color", "transparent");
        }
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
