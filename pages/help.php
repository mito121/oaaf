<div class="global-wrapper">
    <div class="sub-header" id="sub-header">
        <div class="back"></div>
        <h1>Hjælp</h1>
        <div class="spooky-ghost"></div>
    </div>
    <div class="row">
        <div class="sub-box toggle-collapse">
            <div class="flex">
                <p>FAQ</p><div class="expand rotate"></div>
            </div>

            <div class="collapsible">
                <ol>
                    <li><a href="#">Spørgsmål?</a></li>
                    <li><a href="#">Spørgsmål?</a></li>
                    <li><a href="#">Spørgsmål?</a></li>
                    <li><a href="#">Spørgsmål?</a></li>
                    <li><a href="#">Spørgsmål?</a></li>
                </ol>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="sub-box toggle-collapse">
            <div class="flex">
                <p>Rapportér et problem</p><div class="expand rotate"></div>
            </div>
            <div class="collapsible">
                <form id="helpForm" autocomplete="off">
                    <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>"/>
                    <label for="issue"> <h4>Beskriv problemet</h4> </label>
                    <textarea name="issue" id="issue" placeholder="Beskriv dit problem her"></textarea>

                    <div class="flex-b">
                        <a href="#">Annullér</a>
                        <button type="submit">Indsend</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="sub-box toggle-collapse">
            <div class="flex">
                <p>Vilkår for brug</p><div class="expand rotate"></div>
            </div>

            <div class="collapsible">
                <div class="collapse-wrapper">
                    <p>Du kan læse alt om betingelser og vilkår for brug på vores <a href="#">hjemmeside</a>.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="sub-box toggle-collapse">
            <div class="flex">
                <p>Slet profil</p><div class="expand rotate"></div>
            </div>

            <div class="collapsible">
                <div class="collapse-wrapper flex-b">
                    <a href="#">Annullér</a>
                    <a href="#" class="warning button">Slet profil</a>
                </div>
            </div>
        </div>
    </div>

    <!-- help submit overlay -->
    <div id="helpOverlay" onclick="closeHelpOverlay()">

      <div class="circle">
        <img src="assets/img/flueben_groent.svg" alt="indtast cifrer manuelt">
      </div>

        <div class="overlay_rapporter_box">
            <p class="pop_up_text">Tak for din indsendelse!
                Vi fikser problemet snarest muligt.</p>
            <a href="#" class="btn"></a>
            <button type="button" class="overlay_rapporter_btn" onclick="closeHelpOverlay()">Tilbage</button>
        </div>
    </div>
</div>

<div class="bg_temp">
<img class="bg_temptation" src="assets/img/tmp_bg.svg" alt="background picture">
</div>
