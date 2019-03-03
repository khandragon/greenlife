<?php
include 'Api/ApiRequester.php';

function displayWeather($lat,$long)
{
  $result = ApiRequester::getAirQuality($lat, $long);
  $currentData = $result['data']['current'];
  $humidity = $currentData['weather']['hu'];
  $aqi = $currentData['pollution']['aqius'];
  echo '<h2>Humidity: '.$humidity.'</h2>';
  echo '<h2>Air Quality Index: '. $aqi .' </h2>';
  // echo '<h1>City: '.$_GET['city'].'</h1>';
  // echo '<h1>Country: '.$_GET['country'].'</h1>';
  // echo '<h1>State / Province: '.$_GET['state'].'</h1>';
}

function displayNews(){
  $result = ApiRequester::getNews();
  $articles = $result['articles'];
  foreach($articles as $article){
    echo '<h2>'.$article['title'] .'</h2>';
    echo '<p>' .$article['content']. '</p>';
  }
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['lat']) && isset($_GET['long']) && isset($_GET['date']))//isset($_GET['city']) && isset($_GET['country']) && isset($_GET['state']))
{
  $lat = $_GET['lat'];
  $long = $_GET['long'];
  $date = $_GET['date'];
  displayWeather($lat,$long);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="./resources/css/main.css">
    <script type="text/javascript" src="./resources/js/MapJs.js"></script>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="search">
      <form id="frm1" action="" method="get">
        <!-- City: <input id= type="text" name="city"><br>
        Province or State: <input id= type="text" name="state"><br>
        Country: <input id= type="text" name="country"><br> -->
        Date: <input type="date" name="date"><br>
        <input type="hidden" id="latSubmit" name="lat" value="">
        <input type="hidden" id="longSubmit" name="long" value="">
        <input type="submit">

        <div id="map"></div>
      </form>
    </div>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVzscNT6-Aj5tXOPqS6eC_-Zj8kE0N1lY&callback=initMap">
    </script>
  </body>
</html>
