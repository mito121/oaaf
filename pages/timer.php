<?php
$now = new DateTime("now", new DateTimeZone('Europe/Copenhagen'));
$start_time = $now->format('H:i');

if (!$_SESSION['start_time']) {
    $_SESSION['start_time'] = $start_time;
}
?>
<div class="global-wrapper">

  <header class="login-header">
      <img src=" assets/img/oaf-ny-logo.svg" alt="Odense aafart nye logo">
  </header>


   <p id="tid_sejlet">Tid sejlet</p>

    <p id="trip_timer">
        <label id="minutes">00</label>:<label id="seconds">00</label>
    </p>
    <a href="#" id="finish_trip" class="stop_tur">Stop tur</a>
    <p id="started"></p>

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

<!--overlay tak for turen -->

<div id="bodFortojet">
    <div class="circle_2">
        <img src="assets/img/flueben_groent.svg" alt="indtast cifrer manuelt">
    </div>

    <div class="overlay_rapporter_box_2">
        <p class="pop_up_text headline">Båd fortøjet!</p>

        <div class="flexer">
            <p class="breadfont fortojdata">Tid sejlet:</p>
            <p class="breadfont fortojdata" id="time_spent_at_sea">25 minutter</p>
        </div>

        <div class="flexer">
            <p class="breadfont fortojdata">Pris inkl. startgebyr:</p>
            <p class="breadfont fortojdata" id="priceTotal"></p>
        </div>
        <a href="#" class="btn"></a>
        <form class="big-form" method="POST" action="handlers/finish.php">
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>"/>
            <input type="hidden" id="user_rank_id" value="<?php echo $_SESSION['rank_id']; ?>"/>

            <input type="hidden" name="duration" id="trip_duration" value=""/>
            <input type="hidden" name="start" value="<?php echo $_SESSION['start_time']; ?>"/>
            <input type="hidden" name="stop" id="trip_finished"/>
            <input type="hidden" name="date" id="trip_date"/>

            <input type="hidden" name="price" id="trip_price"/>
            <button type="submit" class="overlay_rapporter_btn">Afslut</button>
        </form>
    </div>
</div>
