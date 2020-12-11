<?php
require_once 'includes/dbconnect.php';

$ranksOutput = "";

/* ### Get user stats ### */
$user_id = $_SESSION['user_id'];
$sql = "SELECT COUNT(id) AS count, SUM(duration) AS time_at_sea, SUM(trip_discount) AS discount FROM `oaaf_history` WHERE user_id = '$user_id'";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
   while ($obj = $result->fetch_object()) {
      $trip_count = $obj->count;
      $time_at_sea = $obj->time_at_sea;
      $money_saved = $obj->discount;

      if ($time_at_sea == 1) {
         $time_at_sea = $obj->time_at_sea . " min.";
      } else if ($time_at_sea >= 2) {
         $time_at_sea = $obj->time_at_sea . " min.";
      } else {
         $time_at_sea = "0 min.";
      }

      if ($obj->discount) {
         $money_saved = str_replace(".", ",", $obj->discount);
      } else {
         $money_saved = "0,00";
      }
   }
}

/* ### Get ranks (for rank explanation) ### */
$sql = "SELECT `id`, `name`, `req_trips`, `price_per_min` FROM `oaaf_ranks` ORDER BY id ASC";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
   while ($obj = $result->fetch_object()) {
      $r_id = $obj->id;
      $r_name = $obj->name;
      $r_trips = $obj->req_trips;
      $r_ppm = $obj->price_per_min;

      $entry_fee = "";

      if ($r_id == 5) {
         $entry_fee = "<p>+ intet startgebyr</p>";
      }

      $ranksOutput .= "
                        <table>
                           <tr><th> <h2>$r_name</h2> </th></tr>
                           <tr><td> <p>$r_trips ture</p> </td> <td> <p>$r_ppm DKK/min.</p> $entry_fee</td></tr>
                        </table>
                     ";
   }
}
?>
<div class="global-wrapper">

   <div class="sub-header" id="sub-header">
      <div class="back"></div>
      <h1>Statistik</h1>
      <div class="spooky-ghost"></div>
   </div>

   <div class="row text-center">
      <div class="rank-img">
         <img src="<?php echo $_SESSION['rank_img']; ?>" alt="Din rang"/>
      </div>
      <h2 class="rank-label">Rang</h2>
      <p class="rank"><?php echo $_SESSION['rank_name']; ?></p>
   </div>


   <div class="row" id="stat-carousel">
      <div class="stat">
         <div class="stat-item">
            <img src="assets/img/antal_ture.svg" alt="Antal ture"/>
            <div class="stat-track">
               <div class="stat-track-header"> <h4>Antal ture:</h4> </div>
               <div class="stat-result"><?php echo $trip_count; ?> ture</div>
            </div>
         </div>
      </div>

      <div class="stat">
         <div class="stat-item">
            <img src="assets/img/tid_sejlet.svg" alt="Antal ture"/>
            <div class="stat-track">
               <div class="stat-track-header"> <h4>Tid til søs:</h4> </div>
               <div class="stat-result"><?php echo $time_at_sea; ?></div>
            </div>
         </div>
      </div>

      <div class="stat">
         <div class="stat-item">
            <img src="assets/img/penge_sparet.svg" alt="Antal ture"/>
            <div class="stat-track">
               <div class="stat-track-header"> <h4>Penge sparet:</h4> </div>
               <div class="stat-result"><?php echo $money_saved; ?> kr.</div>
            </div>
         </div>
      </div>
   </div>

   <div id="stat-carousel-dots"></div>

   <div id="stat-carousel-arrows"></div>

   <div class="row mt">
      <div class="sub-box toggle-collapse">
         <div class="flex">
            <h3>Forklaring af rangsystem</h3><div class="expand rotate"></div>
         </div>

         <div class="collapsible">
            <p>Din rang vil stige, og du vil optjene rabatter, alt efter hvor mange ture du har sejlet.</p>

            <div class="rank-exp">
               <?php echo $ranksOutput; ?>
            </div>
         </div>
      </div>
   </div>

   <div class="bg_temp">
      <img class="bg_temptation" src="assets/img/tmp_bg.svg" alt="background picture">
   </div>
</div>
