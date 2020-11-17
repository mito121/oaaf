<div class="global-wrapper" id="profile">
    <div class="sub-header">
        <div class="back"></div>
        <h1>Pung</h1>
        <div class="spooky-ghost"></div>
    </div>

    <div class="row">
        <img class="rank-img" src="https://placekitten.com/g/200/200" alt="Din rang"/>
    </div>

    <div class="row">
        <div class="label">Betalingsmetode</div>
        <div class="sub-box toggle-collapse">
            <div class="flex">
                <p>Lol rasmus skriv noget visa</p><div class="expand rotate"></div>
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
        <div class="label">Saldo</div>
        <div class="sub-box toggle-collapse">
            <div class="flex">
                <p>200.00 DKK</p><div class="expand rotate"></div>
            </div>

            <div class="collapsible">
                <button class="wide-button">Overfør til saldo</button>
                <p class="or-text">... eller indløs et gavekort</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="label">Gavekort</div>
        <div class="sub-box toggle-collapse">
            <div class="flex">
                <p>Tegn / Indløs gavekort</p><div class="expand rotate"></div>
            </div>

            <div class="collapsible">
                <form method="POST" action="handlers/updatePassword.php" autocomplete="off">
                    <label for="newPassword">Indløs gavekort</label>
                    <input type="text" class="password" v-model="newPassword" name="newPassword" v-on:keyup="validateNewPassword" id="newPassword" placeholder="Indtast kode" autocomplete="off">

                    <div class="flex-b">
                        <a href="#">Annullér</a>
                        <button type="submit">Udfør</button>
                    </div>
                </form>
                <p class="or-text">... eller tegn et gavekort</p>
                <button class="wide-button">Tegn gavekort</button>
            </div>
        </div>
    </div>
</div>
