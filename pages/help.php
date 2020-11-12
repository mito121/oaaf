


<div class="overlay_rapporter_problem">
  <div class="overlay_rapporter_box">
    <p class"pop_up_text">Tak for din indsendelse!
      Vi fikser problemet snarest muligt.</p>
    <a href="#" class="btn"></a>
    <button type="button" class="overlay_rapporter_btn">Tilbage</button>
  </div>
</div>



<div class="global-wrapper">
    <div class="sub-header">
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
                <form method="POST" action="handlers/.php" autocomplete="off">
                    <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>"/>
                    <label for="issue">Beskriv problemet</label>
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
                    <p>Du kan læse alt om betingelser og vilkår og brug på vores <a href="#">hjemmeside</a>.</p>
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
</div>
