<?php
include 'Api/ApiRequester.php';
function displayWeather($country,$state,$city)
{
  $result = ApiRequester::getAirQuality($country,$state,$city);
  $currentData = $result['data']['current'];
  $humidity = $currentData['weather']['hu'];
  $aqi = $currentData['pollution']['aqius'];
  echo '<h2>Humidity: '.$humidity.'</h2>';
  echo '<h2>Air Quality Index: '. $aqi .' </h2>';
  echo '<h1>City: '.$_GET['city'].'</h1>';
  echo '<h1>Country: '.$_GET['country'].'</h1>';
  echo '<h1>State / Province: '.$_GET['state'].'</h1>';
}

function displayNews(){
  $result = ApiRequester::getNews();
  $articles = $result['articles'];
  foreach($articles as $article){
    echo '<h2>'.$article['title'] .'</h2>';
    echo '<p>' .$article['content']. '</p>';
  }
}

function parseCSV($climateId,$date,$month,$year,$province){
  $row = 1;

  if(strlen($month) == 1){
    echo 'true';
    $month = str_pad($month, 2, '0', STR_PAD_LEFT);
  }
  $tempLink = "https://dd.meteo.gc.ca/climate/observations/daily/csv/". $province."/climate_daily_".$province."_".$climateId."_".$year."-". $month ."_PID.csv";
  echo $tempLink.'</br>';
  if (($handle = fopen($tempLink, "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
          $num = count($data);
          $row++;
          if($row == 8){
            echo "Here is the Climate Identifier: " . $data[1] . "<br />\n";
          }
          if($row > 27){
            if($data[3] == $date){
              if($data[5] == 'M' || $data[7] == 'M' || $data[5] == '' || $data[7] == '' ){
                echo '<p>There is no recorded temperature for this</p>';
                break;
              }
              $meanTemp = ($data[5] + $data[7]) / 2;
              echo "<p>Your mean temperature for that day is: " .$meanTemp . "</p>\n";
              $row++;
            }
          }
      }
      fclose($handle);
  }
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['city']) && isset($_GET['country']) && isset($_GET['state']))
{
  //Climate ID, date, month, year
  parseCSV(7011982,9,2,2018,'QC');

  // $country = $_GET['country'];
  // $state = $_GET['state'];
  // $city = $_GET['city'];
//  displayWeather($country,$state,$city);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
    <script type="text/javascript" src="path-to-javascript-file.js"></script>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="search">
      <form id="frm1" action="" method="get">
        City: <input id= type="text" name="city"><br>
        Province or State: <input id= type="text" name="state"><br>
        Country: <input id= type="text" name="country"><br>
        <input type="submit">
      </form>
    </div>
  </body>
</html>
