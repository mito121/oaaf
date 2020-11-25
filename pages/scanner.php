<div id="qr-info">
    <img alt="QR-koden sidder på pælen" src="assets/img/paelikon.svg"/>
    <h1>Scan QR-kode</h1>
</div>

<video id="qr-video"></video>

<div id="qr-code">
    <button id="indtastKodeBtn">... eller indtast kode</button>
</div>

<div id="scan-region"></div>

<div id="indtast_kode_overlay" onclick="closeHelpOverlay()">

    <div class="circle">
        <img src="assets/img/Indtast-qr.svg" alt="indtast cifrer manuelt" id="indtast-qr">
    </div>

    <div class="overlay_rapporter_box">
        <p class="pop_up_text">Tast cifrene over QR-koden</p>

        <div class="form-group">
            <input type="text" maxlength="1" id="field_1" class="form-control qr-input" onkeyup="jump001(this, 'field_2')" />
            <input type="text" maxlength="1" id="field_2" class="form-control qr-input" onkeyup="jump001(this, 'field_3')" />
            <input type="text" maxlength="1" id="field_3" class="form-control qr-input" onkeyup="jump001(this, 'field_4')" />
            <input type="text" maxlength="1" id="field_4" class="form-control qr-input" onkeyup="jump001(this, 'field_5')" />
            <input type="text" maxlength="1" id="field_5" class="form-control qr-input" />
        </div>
        <div class="centrering">
            <button type="button" id="færdigMedIndtastning"class="overlay_rapporter_btn">Færdig</button>
        </div>

    </div>
</div>


<!--overlay til båd båd valgt -->

<div id="baad_valgt_overlay" >

    <div class="circle_1">
        <img id="baad_valgt "src="assets/img/flueben_groent.svg" alt="båden er nu valgt">
    </div>

    <div class="overlay_rapporter_box">
        <p class="pop_up_text">Båd valgt! Tryk for at låse op og starte turen!</p>
    </div>
    <div class="centrering_1">
        <a href="#" id="cancel_trip">Annullér</a>
        <a id="btn_start"href="index.php?page=timer">Læg fra kaj</a>
    </div>
</div>


<!-- https://github.com/nimiq/qr-scanner -->
<script type="module">
    import QrScanner from './assets/js/qr-scanner.min.js';
    QrScanner.WORKER_PATH = './assets/js/qr-scanner-worker.min.js';

    const video = document.getElementById('qr-video');

    let scanned = false;
    function redir(url){
        if(scanned === false){
            scanner.stop();
            console.log("NUNUNU")
            $('#færdigMedIndtastning').click();
        }
    }

    const scanner = new QrScanner(video, result => {
    redir(result);
    scanned = true;
    }, error => {});

    scanner.start().then(() => {
    //                console.log("started");
    //                document.getElementById("scan-area").appendChild(scanner.$canvas);
    });
</script>
