// Redirect to https
if (location.protocol !== "https:") {
   location.replace(`https:${location.href.substring(location.protocol.length)}`);
}

// Toggle navigation
$(".nav-toggle").on("click", function () {
   $("#nav-overlay").css("animation", "fade-in 250ms");
   $("#main-nav").css("animation", "nav-slide-in 420ms");
   $("#nav-overlay").toggleClass("d-none");
});


$("#nav-overlay").on("click", function () {

   $("#nav-overlay").css("animation", "fade-out 250ms");
   $("#main-nav").css("animation", "nav-slide-out 250ms");

   setTimeout(function () {
      $("#nav-overlay").toggleClass("d-none");
   }, 200);
   clearTimeout();

});


$("#main-nav").on("click", function (e) {
   e.stopPropagation();
});

// Go back from sub page
$(".back").on("click", function () {
   window.location.href = "index.php";
});

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
         if (
                 this.password !== "" &&
                 this.passwordRepeat !== "" &&
                 this.password !== this.passwordRepeat
                 ) {
            this.validPw = false;
         } else {
            this.validPw = true;
         }
      },

      validateNewEmail() {
         if (
                 this.newEmail !== "" &&
                 this.newEmailRepeat !== "" &&
                 this.newEmail !== this.newEmailRepeat
                 ) {
            this.newEmailMatch = false;
         } else {
            this.newEmailMatch = true;
         }
      },
   },
});
