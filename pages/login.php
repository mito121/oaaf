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
         <div class="logo-big">
            <img src="https://aafart.dk/wp-content/uploads/2019/02/logo.svg" alt="">
         </div>
      </header>
      
      <div class="boat"></div>
      
      <div class="global-wrapper text-center">
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
                  <button class="signup">Ny bruger</button>
               </div>

               <div class="padding-row">
                  <button class="fb_login">Log på med Facebook</button>
               </div>
            </div>
         </form>
      </div>
      
      <div class="background"></div>
   </body>
</html>
