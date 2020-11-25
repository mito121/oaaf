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
      <p class="rank-label">Rang</p>
      <p class="rank"><?php echo $_SESSION['rank_name']; ?></p>
   </div>


   <div class="row" id="stat-carousel">

      <div class="stat">
         <div class="stat-item">
            <img src="assets/img/antal_ture.svg" alt="Antal ture"/>
            <div class="stat-track">
               <div class="stat-track-header">Antal ture:</div>
               <div class="stat-result">69</div>
            </div>
         </div>
      </div>

      <div class="stat">
         <div class="stat-item">
            <img src="assets/img/tid_sejlet.svg" alt="Antal ture"/>
            <div class="stat-track">
               <div class="stat-track-header">Tid til søs:</div>
               <div class="stat-result">69420 timer</div>
            </div>
         </div>
      </div>

      <div class="stat">
         <div class="stat-item">
            <img src="assets/img/penge_sparet.svg" alt="Antal ture"/>
            <div class="stat-track">
               <div class="stat-track-header">Penge sparet:</div>
               <div class="stat-result">420 kr.</div>
            </div>
         </div>
      </div>

   </div>

   <div id="stat-carousel-dots"></div>

   <div id="stat-carousel-arrows"></div>

   <div class="row mt">
      <div class="sub-box toggle-collapse">
         <div class="flex">
            <p>Forklaring af rangsystem</p><div class="expand rotate"></div>
         </div>

         <div class="collapsible">
            <p>Din rang vil stige, og du vil optjene rabatter, alt efter hvor mange ture du har sejlet.</p>

            <div class="rank-exp">
               <table>
                  <tr><th>Landkrabbe</th></tr>
                  <tr><td>0 ture</td> <td>2.00 DKK/min.</td></tr>
               </table>


               <table>
                  <tr><th>Matros</th></tr>
                  <tr><td>5 ture</td> <td>1.80 DKK/min.</td></tr>
               </table>


               <table>
                  <tr><th>Skipper</th></tr>
                  <tr><td>10 ture</td> <td>1.50 DKK/min.</td></tr>
               </table>


               <table>
                  <tr><th>Styrmand</th></tr>
                  <tr><td>15 ture</td> <td>1.20 DKK/min.</td></tr>
               </table>


               <table>
                  <tr><th>Kaptajn</th></tr>
                  <tr><td>20 ture</td> <td>1.00 DKK/min.</td></tr>
                  <tr><td></td> <td>+ ingen startgebyr</td></tr>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

  <div class="bg_temp">
  <img class="bg_temptation" src="assets/img/tmp_bg.svg" alt="background picture">
</div>
