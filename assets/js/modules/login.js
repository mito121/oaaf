/* Instance: Log in // Sign up */
new Vue({
    el: "#loginModule",
    data: {
        tab: 1,
        password: "",
        passwordRepeat: "",
        validPw: true,
        signup: true,
        logon: true,

        newEmail: "",
        newEmailRepeat: "",
        newEmailMatch: true,
    },
    mounted() {
        // Check if user tried to login, but failed
        if (sessionStorage.getItem("logon") == "false") {
            this.logon = false;
        } else {
            this.logon = true;
        }
        // Check if user tried to sign up, but failed
        if (sessionStorage.getItem("signup") == "false") {
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
            if (this.password !== "" && this.passwordRepeat !== "" && this.password !== this.passwordRepeat) {
                this.validPw = false;
            } else {
                this.validPw = true;
            }
        },

        validateNewEmail() {
            if (this.newEmail !== "" && this.newEmailRepeat !== "" && this.newEmail !== this.newEmailRepeat) {
                this.newEmailMatch = false;
            } else {
                this.newEmailMatch = true;
            }
        },
    },
});