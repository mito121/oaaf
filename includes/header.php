<?php
require_once 'includes/protect.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>QR Scanner Demo</title>

      <!-- ### CSS ### -->
      <!-- slick -->
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
      <!-- custom -->
      <link rel="stylesheet" type="text/css" href="assets/css/main.css"/>
      <?php
      if ($_SESSION['at_sea'] !== true && ($_GET['page'] == 'scanner' || empty($_GET['page']))) {
         echo '<link rel="stylesheet" type="text/css" href="assets/css/scanner.css"/>';
      }
      ?>
   </head>
   <body>
      <header>
         <nav>
            <div id="nav-overlay" class="d-none">
               <div id="main-nav">
                  <div id="nav-header">
                      <div class="rank-img">
                          <img src="<?php echo $_SESSION['rank_img']; ?>" alt="Din rang"/>
                      </div>

                     <div>

                        <h2><a href="index.php?page=profile">Ohøj <?php echo $_SESSION['name']; ?>!</a></h2>
                        <a href="index.php?page=profile" id="underohoej">Vis profil ></a>
                     </div>
                  </div>

                  <div id="nav-content">
                     <div id="nav-body">
                        <ul>
                           <li><a href="index.php?page=stats">Statistik</a></li>
                           <li><a href="index.php?page=wallet">Pung</a></li>
                           <li><a href="index.php?page=history">Historik</a></li>
                           <li><a href="index.php?page=help">Hjælp</a></li>
                           <li><a href="index.php?page=how">Hvordan</a></li>
                        </ul>
                     </div>


                     <div id="nav-footer">
                        8/12 våde hester klar til sadling
                     </div>
                  </div>
               </div>
            </div>
         </nav>
      </header>
