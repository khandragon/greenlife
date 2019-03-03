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
function findClimateId($latitude, $longitude)
{
    $climateId = 0;
    if (($handle = fopen("../Station-Inventory-EN.csv", "r")) !== FALSE) {
        $diff = 1000;
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            for ($c=0; $c < $num; $c++){
                if (count($data) >= 12 && $data[12] == 2019){
                    if ($c == 6){
                        $latitudeDiff = abs($data[$c] - $latitude);
                        $longitudeDiff = abs($data[$c + 1] - $longitude);
                        $summedDiff = $latitudeDiff + $longitudeDiff;
                        if ($summedDiff < $diff){
                            $diff = $summedDiff;
                            $climateId = $data[2];
                        }
                    }
                }
            }
        }
        fclose($handle);
    }

    return $climateId;
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
