<?php
require_once 'includes/dbconnect.php';

// Get user history
$user_id = $_SESSION['user_id'];
$historyOutput = "";
$yearHeadings = array();

$sql = "SELECT `id`, `boat_name`, `duration`, `start_time`, `stop_time`, `date`, `price`, `entry_fee`, `price_per_min` FROM `oaaf_history` WHERE user_id = '$user_id' ORDER BY id ASC";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
   while ($obj = mysqli_fetch_object($result)) {
      $id = $obj->id;
      $boat_name = $obj->boat_name;
      $duration = $obj->duration;
      $start_time = $obj->start_time;
      $stop_time = $obj->stop_time;
      $date = $obj->date;
      $price = str_replace(".", ",", $obj->price);
      $entry_fee = $obj->entry_fee;
      $price_per_min = str_replace(".", ",", $obj->price_per_min);

      // Plural vs singular
      if ($duration > 1) {
         $duration = $duration . " minutter";
      } else {
         $duration = $duration . " minut";
      }

      $year = substr($date, 0, 4);
      $month = substr($date, 5, 2);
      $day = substr($date, 8, 2);

      // Check if Year header should be insterted
      if (false !== $key = array_search($year, $yearHeadings)) { // year is not new - dont add heading
         $thisHeading = "";
      } else { // year is new - add heading
         $yearHeadings[] = $year;
         $thisHeading = "<div class=\"year\"> <h2>" . end($yearHeadings) . "</h2> </div>";
      }

      // Get month name
      $dateObj = DateTime::createFromFormat('!m', $month);
      $monthName = $dateObj->format('F');

      // Get day name
      $unixTimestamp = strtotime($date);
      $dayName = date("l", $unixTimestamp);

      // Translate english day & month to DANISH HYGGE
      $en_months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
      $da_months = array("Januar", "Februar", "Marts", "April", "Maj", "Juni", "Juli", "August", "September", "Oktober", "November", "December");

      $en_days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
      $da_days = array("Mandag", "Tirsdag", "Onsdag", "Torsdag", "Fredag", "Lørdag", "Søndag");

      // Get month name in danish
      if (false !== $key = array_search($monthName, $en_months)) {
         //do something
         $monthName = $da_months[$key];
      }
      // Get day name in danish
      if (false !== $key = array_search($dayName, $en_days)) {
         //do something
         $dayName = $da_days[$key];
      }


      $historyOutput .= "
         $thisHeading
            <div class=\"history-item\">
                <div class=\"flex-b\">
                    <div>
                        <h3>$monthName</h3>
                        <p>$dayName d. $day</p>
                    </div>

                    <span>$price DKK</span>

                    <div class=\"expand rotate\"></div>
                </div>

                <div class=\"collapsible\">
                    <table>
                        <tr>
                            <td>Varighed</td>
                            <td>$duration</td>
                        </tr>
                        <tr>
                            <td>Starttidspunkt</td>
                            <td>$start_time</td>
                        </tr>
                        <tr>
                            <td>Sluttidspunkt</td>
                            <td>$stop_time</td>
                        </tr>
                        <tr>
                            <td>Startgebyr</td>
                            <td>$entry_fee DKK</td>
                        </tr>
                        <tr>
                            <td>Minutpris</td>
                            <td>$price_per_min DKK</td>
                        </tr>
                        <tr>
                            <td>Fartøjets ID</td>
                            <td>$boat_name</td>
                        </tr>
                    </table>

                    <button>Print PDF</button>
                </div>
            </div>";
   }
} else {
   $historyOutput = "Du har endnu ikke oplevet livet til søs. Skynd dig dog ud få lidt tang i øjet!";
}
?>
<div class="global-wrapper">
   <div class="sub-header">
      <div class="back"></div>
      <h1>Historik</h1>
      <div class="spooky-ghost"></div>
   </div>

   <div class="wrapper">
      <div id="history">
         <?php echo $historyOutput; ?>
      </div>
   </div>
</div>

<div class="bg_temp">
   <img class="bg_temptation" src="assets/img/tmp_bg.svg" alt="background picture">
</div>
