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
    <a href="handlers/finish.php">Stop tur</a>
    <p id="started"></p>
</div>

<div  id="pop_ud_how"class="row">
    <div class="sub-box toggle-collapse">
        <div class="flex">
            <p>Hvordan fortøjer jeg?</p><div class="expand rotate"></div>
        </div>

        <div class="collapsible">
            <div class="flex mt">
                <div class="fortoej_img">
                    <img src="assets/img/info4_1.svg" alt="fortøjningsbillede">
                </div>
                <div class="fortoej_img">
                    <img src="assets/img/info4_2.svg" alt="fortøjningsbillede">
                </div>
            </div>
            <p class="how_pop_tekst">hej med jer, nu skal jeg fortææle en sørøverhistorie </p>
        </div>
    </div>
</div>

<p id="nyd_turen">
    Nyd turen
</p>

<div class="bg_temp">
    <img class="bg_temptation" src="assets/img/tmp_bg.svg" alt="background picture">
</div>
