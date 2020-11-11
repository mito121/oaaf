// Redirect to https
if (location.protocol !== 'https:') {
    location.replace(`https:${location.href.substring(location.protocol.length)}`);
}

// Toggle navigation
$('.nav-toggle').on('click', function () {
    $('#nav-overlay').toggleClass("d-none");
});
$('#nav-overlay').on('click', function () {
    $('#nav-overlay').toggleClass("d-none");
});
$('#main-nav').on('click', function (e) {
    e.stopPropagation();
});

// Go back from sub page
$('.back').on('click', function () {
    window.location.href = "index.php";
});

/* ### Vue instances ### */

/* Instance: Log in // Sign up */
new Vue({
    el: '#loginModule',
    data: {
        tab: 1,
        password: '',
        passwordRepeat: '',
        validPw: true,
        signup: true,
        logon: true,

        newEmail: '',
        newEmailRepeat: '',
        newEmailMatch: true
    },
    mounted() {
        // Check if user tried to login, but failed
        if (sessionStorage.getItem("logon") == 'false') {
            this.logon = false;
        } else {
            this.logon = true;
        }
        // Check if user tried to sign up, but failed
        if (sessionStorage.getItem("signup") == 'false') {
            this.tab = 2;
            this.signup = false;
        } else {
            this.tab = 1;
            this.signup = true;
        }
    },
    methods: {
        /* ## Login ## */
        switchTab(e) {
            e.preventDefault();

            if (this.tab === 1) {
                this.tab = 2;
            } else {
                this.tab = 1;
            }
        },

        validatePw() {
            if ((this.password !== '' && this.passwordRepeat !== '') && this.password !== this.passwordRepeat) {
                this.validPw = false;
            } else {
                this.validPw = true;
            }
        },

        validateNewEmail() {
            if ((this.newEmail !== '' && this.newEmailRepeat !== '') && this.newEmail !== this.newEmailRepeat) {
                this.newEmailMatch = false;
            } else {
                this.newEmailMatch = true;
            }
        }

    }
});



/* Instance: Profile */
new Vue({
    el: '#profile',
    data: {
        newEmail: '',
        newEmailRepeat: '',

        newPassword: '',
        newPasswordRepeat: ''
    },

    mounted() {
        /* ## Toggle collapsibles */
        var box = document.getElementsByClassName("toggle-collapse");
        var collapsible = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < box.length; i++) {
            box[i].addEventListener("click", function () {

                this.classList.toggle("open");

                if (this.classList.contains('open')) {
                    var maxHeight = (50 + this.lastElementChild.offsetHeight) + "px";
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
        $('.back').on('click', function () {
            window.location.href = "index.php";
        });
    },

    methods: {
        /* ## Validate new email ## */
        validateNewEmail() {
            if ((this.newEmail !== '' && this.newEmailRepeat !== '') && this.newEmail !== this.newEmailRepeat) {
                $('#newEmailRepeat').css("border-color", "red");
            } else {
                $('#newEmailRepeat').css("border-color", "transparent");
            }
        },

        validateNewPassword() {
            if ((this.newPassword !== '' && this.newPasswordRepeat !== '') && this.newPassword !== this.newPasswordRepeat) {
                $('#newPasswordRepeat').css("border-color", "red");
            } else {
                $('#newPasswordRepeat').css("border-color", "transparent");
            }
        }
    }
});



/* Instance: History */
new Vue({
    el: '#history',
    data: {
        
    },

    mounted() {
        /* ## Toggle collapsibles */
        var box = document.getElementsByClassName("history-item");
        var collapsible = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < box.length; i++) {
            box[i].addEventListener("click", function () {

                this.classList.toggle("open");

                if (this.classList.contains('open')) {
                    var maxHeight = (65 + this.lastElementChild.offsetHeight) + "px";
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
        $('.back').on('click', function () {
            window.location.href = "index.php";
        });
    },

    methods: {
        /* ## Validate new email ## */
        validateNewEmail() {
            if ((this.newEmail !== '' && this.newEmailRepeat !== '') && this.newEmail !== this.newEmailRepeat) {
                $('#newEmailRepeat').css("border-color", "red");
            } else {
                $('#newEmailRepeat').css("border-color", "transparent");
            }
        },

        validateNewPassword() {
            if ((this.newPassword !== '' && this.newPasswordRepeat !== '') && this.newPassword !== this.newPasswordRepeat) {
                $('#newPasswordRepeat').css("border-color", "red");
            } else {
                $('#newPasswordRepeat').css("border-color", "transparent");
            }
        }
    }
});