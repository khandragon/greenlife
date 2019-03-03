<?php
function displayWeather($lat,$long)
{
  $result = ApiRequester::getAirQuality($lat, $long);
  $info = ApiRequester::getInfo($lat, $long);
  $currentData = $result['data']['current'];
  $humidity = $currentData['weather']['hu'];
  $aqi = $currentData['pollution']['aqius'];
  $temperature =  $currentData['weather']['tp'];

  echo '<h2>Humidity: '.$humidity.'</h2>';
  echo '<h2>Air Quality Index: '. $aqi .' </h2>';
  echo '<h2>Temperature(celsius): '. $temperature .' </h2>';
  echo '<h2>Province: '. $info["state"] .' </h2>';
  echo '<h2>City: '. $info["city"] .' </h2>';
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['lat']) && isset($_GET['long']))//isset($_GET['city']) && isset($_GET['country']) && isset($_GET['state']))
{
  $lat = $_GET['lat'];
  $long = $_GET['long'];
  displayWeather($lat,$long);
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>GreenLife</title>
        <link rel="stylesheet" href="resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="resources/css/styles.css"> 
        <script type="text/javascript" src="resources/js/MapJs.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container nav-bar-font-size">
                <a class="navbar-brand js-scroll-trigger nav-bar-font-size" href="index.php">GreenLife</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                            <a class="nav-link js-scroll-trigger nav-bar-font-size" href="weather.php">Weather Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger nav-bar-font-size" href="air.php">Air Quality</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
        <div id="search">
      <form id="frm1" action="" method="get">
        <input type="hidden" id="latSubmit" name="lat" value="">
        <input type="hidden" id="longSubmit" name="long" value="">
        <input type="submit">
        <div id="map"></div>
      </form>
    </div>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVzscNT6-Aj5tXOPqS6eC_-Zj8kE0N1lY&callback=initMap"></script>
    </body>
</html>