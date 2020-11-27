<?php
require_once 'includes/dbconnect.php';



// Get user history
$user_id = $_SESSION['id'];
$historyOutput;

$sql = "SELECT `id`, `boat_name`, `duration`, `start_time`, `stop_time`, `date`, `price` FROM `oaaf_history` WHERE user_id = '$user_id'";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    while ($obj = mysqli_fetch_object($result)) {
        $id = $obj->id;
        $boat_name = $obj->boat_name;
        $duration = $obj->duration;
        $start_time = $obj->start_time;
        $stop_time = $obj->stop_time;
        $date = $obj->date;
        $price = $obj->price;

        $year = substr($date, 0, 4);
        $month = substr($date, 5, 2);
        $day = substr($date, 8, 2);

        $dateObj = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F'); // March

        $dayName = date("l", $date);


        $historyOutput .= "
            <div class=\"history-item\">
                <div class=\"flex-b\">
                    <div>
                        <h3>$monthName</h3>
                        <p>$dayName D. $day</p>
                    </div>

                    <span>$price,00 DKK</span>

                    <div class=\"expand rotate\"></div>
                </div>

                <div class=\"collapsible\">
                    <table>
                        <tr>
                            <td>Varighed</td>
                            <td>$duration minutter</td>
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
                            <td>10 DKK</td>
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
            <div class="year"> <h2>2020</h2> </div>
            <?php echo $historyOutput; ?>
        </div>
    </div>
</div>

<div class="bg_temp">
    <img class="bg_temptation" src="assets/img/tmp_bg.svg" alt="background picture">
</div>
