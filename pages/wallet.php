<?php
$balance = $_SESSION['wallet_balance'] . ".00";
?>
<div class="global-wrapper" id="wallet">
    <div class="sub-header">
        <div class="back"></div>
        <h1>Pung</h1>
        <div class="spooky-ghost"></div>
    </div>

    <div class="row">
        <img class="wallet-img" src="assets/img/pung.svg" alt="Billede af en pung"/>
    </div>

    <div class="row">
        <div class="label"> <h2>Betalingsmetode</h2> </div>
        <div class="sub-box-big toggle-collapse">
            <div class="flex">
                <div>
                    <p>VISA</p>
                    <p>**** **** **** 1234</p>
                </div>

                <div class="expand rotate"></div>
            </div>

            <div class="collapsible mtb-15">
                <button class="wide-button">Skift betalingsmetode</button>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="label"> <h2>Saldo</h2> </div>
        <div class="sub-box toggle-collapse">
            <div class="flex">
                <p><?php echo $balance; ?> DKK</p><div class="expand rotate"></div>
            </div>

            <div class="collapsible">
                <button class="wide-button" id="xferMoney">Overfør til saldo</button>
                <p class="or-text">... eller indløs et gavekort</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="label"> <h2>Gavekort</h2> </div>
        <div class="sub-box toggle-collapse">
            <div class="flex">
                <p>Tegn / Indløs gavekort</p><div class="expand rotate"></div>
            </div>

            <div class="collapsible">
                <form method="POST" action="handlers/updatePassword.php" autocomplete="off">
                    <label for="newPassword"> <h4>Indløs gavekort</h4> </label>
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
<div class="bg_temp">
    <img class="bg_temptation" src="assets/img/tmp_bg.svg" alt="background picture">
</div>

<!-- ## Transfer money overlay ## -->
<div>

</div>

<div class="overlay" id="xferMoneyOverlay">

    <div class="circle">
        <img id="baad_valgt "src="assets/img/credit_card.svg" alt="båden er nu valgt">
    </div>

    <div class="overlay_box">
        <h2>Indtast beløb du ønsker at overføre:</h2>

        <form method="POST" action="handlers/updateBalance.php">
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>"/>
            <div class="form-input">
                <input type="text" placeholder="1234" maxlength="6" id="xferAmount" name="amount"><span>  DKK</span>
            </div>

            <p>Penge på din saldo vil blive brugt før der trækkes fra din konto, og du vil få en notifikation inden din saldo løber tør.</p>
            <div class="cta">
                <a href="#" id="cancelXfer">Annullér</a>
                <input type="submit" value="Overfør til saldo"/>
            </div>
        </form>
    </div>

</div>

<div id="pengeoverfoert">
   <div class="circle_2">
      <img src="assets/img/flueben_groent.svg" alt="indtast cifrer manuelt">
   </div>

   <div class="overlay_rapporter_box_2">

      <p class="pop_up_text headline">Beløb overført!</p>
      <p class="pop_up_text headline">"#" er nu overført til din saldo</p>

      <a href="#" class="btn"></a>
      <button type="button" class="overlay_rapporter_btn" onclick="window.location.href='handlers/finish.php'">Afslut</button>
   </div>
</div>
