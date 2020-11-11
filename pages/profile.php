<?php
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
?>
<div class="global-wrapper" id="profile">
    <div class="sub-header">
        <div class="back"></div>
        <h1>Profil</h1>
        <div class="spooky-ghost"></div>
    </div>

    <div class="row">
        <img class="rank-img" src="https://placekitten.com/g/200/200" alt="Din rang"/>
    </div>

    <div class="row">
        <div class="label">Navn</div>
        <div class="sub-box toggle-collapse">
            <div class="flex">
                <p><?php echo $user_name; ?></p><div class="expand rotate"></div>
            </div>

            <div class="collapsible">
                <form method="POST" action="handlers/updateName.php" autocomplete="off">
                    <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>"/>
                    <label for="newName">Nyt navn</label>
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
        <div class="label">Email</div>
        <div class="sub-box toggle-collapse">
            <div class="flex">
                <p><?php echo $user_email; ?></p><div class="expand rotate"></div>
            </div>

            <div class="collapsible">
                <form method="POST" action="handlers/updateEmail.php" autocomplete="off">
                    <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>"/>
                    <label for="newEmail">Ny email</label>
                    <input type="text" name="newEmail" v-model="newEmail" v-on:keyup="validateNewEmail" id="newEmail" placeholder="Indtast ny email" autocomplete="off">

                    <label for="newEmailRepeat">Bekræft email</label>
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
        <div class="label">Adgangskode</div>
        <div class="sub-box toggle-collapse">
            <div class="flex">
                <p>Skift adgangskode</p><div class="expand rotate"></div>
            </div>

            <div class="collapsible">
                <form method="POST" action="handlers/updatePassword.php" autocomplete="off">
                    <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>"/>
                    <label for="newPassword">Ny adgangskode</label>
                    <input type="text" class="password" v-model="newPassword" name="newPassword" v-on:keyup="validateNewPassword" id="newPassword" placeholder="Indtast ny adgangskode" autocomplete="off">

                    <label for="newPasswordRepeat">Bekræft adgangskode</label>
                    <input type="text" class="password" v-model="newPasswordRepeat" v-on:keyup="validateNewPassword" name="passwordRepeat" id="newPasswordRepeat" placeholder="Gentag adgangskode" autocomplete="off">

                    <div class="flex-b">
                        <a href="#">Annullér</a>
                        <button type="submit">Udfør</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row logoff-row">
        <a href="handlers/logoff.php" class="logoff button">Log ud</a>
    </div>
</div>