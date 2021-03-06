<?php
require_once 'includes/dbconnect.php';

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
      <div class="sub-box toggle-collapse has-annuller">
         <div class="flex">
            <p>Rapportér et problem</p><div class="expand rotate"></div>
         </div>
         <div class="collapsible">
            <form action="handlers/reportProblem.php" method="post" id="helpForm" autocomplete="off">
               <input type="hidden" name="id" value="<?php echo $_SESSION['user_id']; ?>"/>
               <label for="issue"> <h4>Beskriv problemet</h4> </label>
               <textarea required name="issue" id="issue" placeholder="Beskriv dit problem her"></textarea>

               <div class="flex-b">
                  <a href="#" class="annuller-btn">Annullér</a>
                  <button type="submit">Indsend</button>
               </div>
            </form>
         </div>
      </div>
   </div>


   <div class="row mt">
      <div class="sub-box toggle-collapse">
         <div class="flex">
            <p>Forklaring af rangsystem</p><div class="expand rotate"></div>
         </div>

         <div class="collapsible">
            <p>Din rang vil stige, og du vil optjene rabatter, alt efter hvor mange ture du har sejlet.</p>

            <div class="rank-exp">
               <?php echo $ranksOutput; ?>
            </div>
         </div>
      </div>
   </div>

   <div class="row">
      <div id="how_navigate" class="sub-box has-annuller" onclick="how_navigate()" >
         <div class="flex">
            <p>Guide til brug</p><div class="expand rotate"></div>
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
      <div class="sub-box toggle-collapse has-annuller">
         <div class="flex">
            <p>Slet profil</p><div class="expand rotate"></div>
         </div>

         <div class="collapsible">
            <div class="collapse-wrapper flex-b">
               <a href="#" class="annuller-btn">Annullér</a>
               <a href="#" id="delete-toggle" class="warning button">Slet profil</a>
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
         <button  id="refresh" type="button" class="overlay_rapporter_btn" onclick="closeHelpOverlay()">Tilbage</button>
      </div>
   </div>
</div>

<div class="bg_temp">
   <img class="bg_temptation" src="assets/img/tmp_bg.svg" alt="background picture">
</div>




<div id="slet_profil_overlay" >
   <div class="overlay_rapporter_box">
      <p class="pop_up_text">Du er ved at slette din Profil</p>
      <p  id="margintop" class="pop_up_text">Er du sikker?</p>

      <div id="flex-box-slet">
         <a id="no-delete" href="#">Annullér</a>
         <button id="delete_profile" href="#">Ja, slet min profil</button>
      </div>
   </div>
</div>
