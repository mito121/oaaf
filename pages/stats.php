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
               <div class="stat-result">69</div>
            </div>
         </div>
      </div>

      <div class="stat">
         <div class="stat-item">
            <img src="assets/img/tid_sejlet.svg" alt="Antal ture"/>
            <div class="stat-track">
               <div class="stat-track-header"> <h4>Tid til søs:</h4> </div>
               <div class="stat-result">69420 timer</div>
            </div>
         </div>
      </div>

      <div class="stat">
         <div class="stat-item">
            <img src="assets/img/penge_sparet.svg" alt="Antal ture"/>
            <div class="stat-track">
               <div class="stat-track-header"> <h4>Penge sparet:</h4> </div>
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
            <h3>Forklaring af rangsystem</h3><div class="expand rotate"></div>
         </div>

         <div class="collapsible">
            <p>Din rang vil stige, og du vil optjene rabatter, alt efter hvor mange ture du har sejlet.</p>

            <div class="rank-exp">
               <table>
                  <tr><th> <h2>Landkrabbe</h2> </th></tr>
                  <tr><td> <p>0 ture</p> </td> <td> <p>2.00 DKK/min.</p> </td></tr>
               </table>


               <table>
                  <tr><th><h2>Matros</h2></th></tr>
                  <tr><td> <p>5 ture</p> </td> <td> <p>1.80 DKK/min.</p> </td></tr>
               </table>


               <table>
                  <tr><th><h2>Skipper</h2></th></tr>
                  <tr><td> <p>10 ture</p> </td> <td> <p>1.50 DKK/min.</p> </td></tr>
               </table>


               <table>
                  <tr><th><h2>Styrmand</h2></th></tr>
                  <tr><td> <p>15 ture</p> </td> <td> <p>1.20 DKK/min.</p> </td></tr>
               </table>


               <table>
                  <tr><th><h2>Kaptajn</h2></th></tr>
                  <tr><td> <p>20 ture</p> </td> <td> <p>1.00 DKK/min.</p> </td></tr>
                  <tr><td></td> <td> <p>+ intet startgebyr</p> </td></tr>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

  <div class="bg_temp">
  <img class="bg_temptation" src="assets/img/tmp_bg.svg" alt="background picture">
</div>
