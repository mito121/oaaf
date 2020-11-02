<?php ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Odense Aafart - Log ind</title>

      <link rel="stylesheet" type="text/css" href="../assets/css/main.css"/>
   </head>
   <body>
      <header class="login-header">
<!--         <div class="logo-big">
            <img src="https://aafart.dk/wp-content/uploads/2019/02/logo.svg" alt="">
         </div>-->
      </header>

      <div id="loginModule">
         <!-- ### LOG IND ### -->
         <div v-if="tab === 1" class="global-wrapper text-center">
            <h1 class="mt-50">Log ind</h1>

            <form class="d-inline text-left">
               <div class="box">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" placeholder="Indtast email">
                  
                  <label for="password">Adgangskode</label>
                  <input type="password" name="password" id="password" placeholder="Indtast adgangskode">
               </div>

               <div class="padding">
                  <div class="checkboxes padding-row">
                     <div class="flex checkbox-row">
                        <input type="checkbox" name="rememberMe" id="rememberMe"><label for="rememberMe">Husk mig</label>
                     </div>
                  </div>

                  <div class="padding-row">
                     <button type="submit">Log ind</button>
                  </div>

                  <div class="padding-row">
                     <a href="#">Glemt password?</a>
                  </div>

                  <hr class="padding-row">

                  <div class="padding-row">
                     <button class="signup" v-on:click="switchTab">Ny bruger</button>
                  </div>

                  <div class="padding-row">
                     <button class="fb_login">Log på med Facebook</button>
                  </div>
               </div>
            </form>
         </div>

         <!-- ### NY BRUGER ### -->
         <div v-else class="global-wrapper text-center">
            <h1 class="mt-50">Ny bruger</h1>

            <form method="POST" action="../handlers/signup.php" class="d-inline text-left">
               <div class="box">
                  <label for="newName">Navn</label>
                  <input type="text" name="newName" id="newName" placeholder="Indtast navn">
                  
                  <label for="newEmail">Email <span class="required">*</span></label>
                  <input type="email" name="newEmail" id="newEmail" placeholder="Indtast email" required>
                  
                  <label for="newPassword">Adgangskode <span class="required">*</span></label>
                  <input v-model="password" v-on:keyup="validatePw" type="password" name="newPassword" id="newPassword" placeholder="Indtast adgangskode" required>
                  
                  <label for="passwordRepeat">Bekræft adgangskode <span class="required">*</span></label>
                  <input v-model="passwordRepeat" v-on:keyup="validatePw" type="password" name="passwordRepeat" id="passwordRepeat" placeholder="Gentag adgangskode" required>
                  
                  <p v-if="validPw === false" class="pw-validator">Dine adganskoder er ikke ens!</p>
               </div>

               <div class="padding">
                  <div class="padding-row">
                     <a href="#">Vilkår for brug</a>
                  </div>

                  <div class="checkboxes padding-row">
                     <div class="flex checkbox-row">
                        <input type="checkbox" name="tos" id="tos" required><label for="tos" class="line-height">Jeg har læst og accepterer vilkår for brug</label>
                     </div>
                  </div>

                  <div class="padding-row">
                     <button type="submit">Tilmeld</button>
                  </div>

                  <div class="padding-row">
                     <button class="signup" v-on:click="switchTab">Fortryd</button>
                  </div>
               </div>
            </form>
         </div>
      </div>

      <div class="background"></div>

      <!-- vue -->
      <script src="../assets/js/vue.js"></script>
      <!-- custom -->
      <script src="../assets/js/main.js"></script>
   </body>
</html>
