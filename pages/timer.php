<?php
if (isset($_GET['id'])) {
    $boatID = $_GET['id'];
}
?>
<div class="global-wrapper">

    <p id="tid_sejlet">Tid sejlet</p>

    <p id="trip_timer">
        <label id="minutes">00</label>:<label id="seconds">00</label>
    </p>
    <a href="handlers/finish.php" class="stop_tur">Stop tur</a>
    <p id="started"></p>


<!--overlay tak for turen -->

    <div id="bodFortojet">
      <div class="circle_2">
        <img src="assets/img/flueben_groent.svg" alt="indtast cifrer manuelt">
      </div>

        <div class="overlay_rapporter_box_2">
            <p class="pop_up_text_2 headline">Båd fortøjet!</p>

            <div class="flexer">
             <p class="breadfont fortojdata">Tid sejlet:</p>
             <p class="breadfont fortojdata">25 minutter</p>
            </div>

            <div class="flexer">
              <p class="breadfont fortojdata">Pris inkl. startgebyr:</p>
              <p class="breadfont fortojdata">60 DKK</p>
            </div>
            <a href="#" class="btn"></a>
            <button type="button" class="overlay_rapporter_btn" onclick="closeHelpOverlay()">Afslut</button>
        </div>
    </div>
</div>


<!-- -->

<div  id="pop_ud_how"class="row">
    <div class="sub-box toggle-collapse">
        <div class="flex">
            <p>Hvordan fortøjer jeg?</p><div class="expand rotate"></div>
        </div>

        <div class="collapsible">
            <img class="fortoej_img" src="assets/img/saadan_fortojer_du.svg" alt="sådan fortøjer du bitch">
            <p class="how_pop_tekst">Parker båden foran en ledig pæl og hæng rebet rundt om pælen for at fortøje båden</p>
            <p class="how_pop_tekst">Stik bagefter låsen i låsehullet, og turen vil automatisk afslutte</p>
        </div>
    </div>
</div>

<p id="nyd_turen">
    Nyd turen
</p>

<div class="bg_temp">
    <img class="bg_temptation" src="assets/img/tmp_bg.svg" alt="background picture">
</div>
