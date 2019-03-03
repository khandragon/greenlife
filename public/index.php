<?php
include 'Api/ApiRequester.php';
function displayWeather($country,$state,$city)
{
  $result = ApiRequester::getAirQuality($country,$state,$city);
  $humidity = $result['data']['current']['weather']['hu'];
  echo '<h2>Humidity: '.$humidity.'</h2>';
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

if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['city']) && isset($_GET['country']) && isset($_GET['state']))
{
  $country = $_GET['country'];
  $state = $_GET['state'];
  $city = $_GET['city'];
  displayWeather($country,$state,$city);
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
