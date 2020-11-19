<?php
if (isset($_GET['id'])) {
    $boatID = $_GET['id'];
}
?>
<div class="global-wrapper">
    Started: <?php echo $_SESSION['started']; ?><br>
    
    <label id="minutes">00</label>:<label id="seconds">00</label>

    <a href="handlers/finish.php">Stop tur</a>
</div>
