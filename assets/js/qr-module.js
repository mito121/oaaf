// Redirect to https
if (location.protocol !== 'https:') {
    location.replace(`https:${location.href.substring(location.protocol.length)}`);
}

import QrScanner from "./qr-scanner.min.js";
QrScanner.WORKER_PATH = './qr-scanner-worker.min.js';

const video = document.getElementById('qr-video');

let scanned = false;
function redir(url) {
    if (scanned === false) {
        scanner.stop();
        if (confirm("Vil du bru' den bå' dér?")) {
            window.location.href = url;
        } else {
            scanner.start();
        }
    }
}

const scanner = new QrScanner(video, result => {
    redir(result);
    scanned = true;
}, error => {
});

scanner.start().then(() => {
//                console.log("started");
//                document.getElementById("scan-area").appendChild(scanner.$canvas);


});