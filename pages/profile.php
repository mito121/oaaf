<?php
// If user name or email is too long -> display dots
if (strlen($_SESSION['name']) > 20) {
   $user_name = substr($_SESSION['name'], 0, 20) . '...';
} else {
   $user_name = $_SESSION['name'];
}
if (strlen($_SESSION['email']) > 20) {
   $user_email = substr($_SESSION['email'], 0, 20) . '...';
} else {
   $user_email = $_SESSION['email'];
}

//die(password_hash('are12341', PASSWORD_DEFAULT));
// If user failed, trying to change password

if (isset($_GET['pw_change'])) {
    $pw_change = $_GET['pw_change'];
} else{
    $pw_change = '';
}


if (isset($_GET) && $pw_change == 'false') {
   echo "<script>window.sessionStorage.setItem('pw_change', 'false');</script>";
} elseif (isset($_GET) && $pw_change == 'true') {
   echo "<script>window.sessionStorage.setItem('pw_change', 'true');</script>";
} else {
   echo "<script>
            if(window.sessionStorage.getItem('pw_change')){
                window.sessionStorage.removeItem('pw_change');
            }
        </script>";
}


// Only show log off if user is not currently at sea
if ($_SESSION['at_sea'] === true) { // If user is currently at sea
   $logOff = "";
} else { // If user is NOT currently at sea
   $logOff = "
                <div class=\"row logoff-row\">
                    <a href=\"handlers/logoff.php\" class=\"logoff button\">Log ud</a>
                </div>
            ";
}
?>
<div class="global-wrapper" id="profile">
   <div class="sub-header">
      <div class="back"></div>
      <h1>Profil</h1>
      <div class="spooky-ghost"></div>
   </div>

   <div class="row text-center">
      <div class="rank-img">
         <img src="<?php echo $_SESSION['rank_img']; ?>" alt="Din rang"/>
      </div>
      <h2 class="rank-label">Rang</h2>
      <p class="rank"><?php echo $_SESSION['rank_name']; ?></p>
   </div>

   <div class="row">
      <div class="label"> <h2>Navn</h2> </div>
      <div class="sub-box toggle-collapse">
         <div class="flex">
            <p><?php echo $user_name; ?></p><div class="expand rotate"></div>
         </div>

         <div class="collapsible">
            <form method="POST" action="handlers/updateName.php" autocomplete="off">
               <input type="hidden" name="id" value="<?php echo $_SESSION['user_id']; ?>"/>
               <label for="newName"> <h4>Nyt navn</h4> </label>
               <input type="text" name="newName" id="newName" placeholder="Indtast nyt navn" autocomplete="off">

               <div class="flex-b">
                  <a href="#">Annullér</a>
                  <button type="submit">Udfør</button>
               </div>
            </form>
         </div>
      </div>

   </div>

   <div class="row">
      <div class="label"> <h2>Email</h2> </div>
      <div class="sub-box toggle-collapse">
         <div class="flex">
            <p><?php echo $user_email; ?></p><div class="expand rotate"></div>
         </div>

         <div class="collapsible">
            <form method="POST" action="handlers/updateEmail.php" autocomplete="off">
               <input type="hidden" name="id" value="<?php echo $_SESSION['user_id']; ?>"/>
               <label for="newEmail"> <h4>Ny email</h4> </label>
               <input type="text" name="newEmail" v-model="newEmail" v-on:keyup="validateNewEmail" id="newEmail" placeholder="Indtast ny email" autocomplete="off">

               <label for="newEmailRepeat"> <h4>Bekræft email</h4> </label>
               <input type="text" name="emailRepeat" v-model="newEmailRepeat" v-on:keyup="validateNewEmail" id="newEmailRepeat" placeholder="Gentag email" autocomplete="off">

               <div class="flex-b">
                  <a href="#">Annullér</a>
                  <button type="submit">Udfør</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   <div class="row">
      <div class="label"> <h2>Adgangskode</h2> </div>
      <div class="sub-box toggle-collapse" id="changePassword">
         <div class="flex">
            <p>Skift adgangskode</p><div class="expand rotate"></div>
         </div>

         <div class="collapsible">
            <form method="POST" action="handlers/updatePassword.php" autocomplete="off">
               <input type="hidden" name="id" value="<?php echo $_SESSION['user_id']; ?>"/>
               <label for="newPassword"> <h4>Nuværende adgangskode</h4> </label>
               <input type="text" class="password" name="currentPw" id="currentPw" placeholder="Indtast ny adgangskode" autocomplete="off">

               <label for="newPassword"> <h4>Ny adgangskode</h4> </label>
               <input type="text" class="password" v-model="newPassword" name="newPassword" v-on:keyup="validateNewPassword" id="newPassword" placeholder="Indtast ny adgangskode" autocomplete="off">

               <label for="newPasswordRepeat"> <h4>Bekræft adgangskode</h4> </label>
               <input type="text" class="password" v-model="newPasswordRepeat" v-on:keyup="validateNewPassword" name="passwordRepeat" id="newPasswordRepeat" placeholder="Gentag adgangskode" autocomplete="off">

               <div class="flex-b">
                  <a href="#">Annullér</a>
                  <button type="submit">Udfør</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   <?php echo $logOff; ?>
</div>

<div class="bg_temp">
   <img class="bg_temptation" src="assets/img/tmp_bg.svg" alt="background picture">
</div>
