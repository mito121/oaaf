<div class="qr-wrapper">

   <div id="qr-text">
      <h1>Scan QR-kode</h1>
   </div>
   
   <video id="qr-video"></video>

   <div id="scan-region"></div>

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
         if(confirm("Vil du bru' den bå' dér?")){
            window.location.href = url;
         }else{
            scanner.start();
         }
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
