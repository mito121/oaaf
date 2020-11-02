// Redirect to https
if (location.protocol !== 'https:') {
   location.replace(`https:${location.href.substring(location.protocol.length)}`);
}

/* ### Vue instances ### */

/* Log in // Sign up */
new Vue({
   el: '#loginModule',
   data: {
      tab: 1,
      password: '',
      passwordRepeat: '',
      validPw: true,
      signup: true
   },
   mounted() {
      if (localStorage.getItem("signup") == 'false') {
         this.tab = 2;
         this.signup = false;
      } else {
         this.tab = 1;
         this.signup = true;
      }
   },
   methods: {
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
      }
   }
});