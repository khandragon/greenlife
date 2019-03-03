<html>
    <head>
        <meta charset="utf-8">
        <title>GreenLife</title>
        <link rel="stylesheet" href="resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="resources/css/styles.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <script src="resources/js/bootstrap.js"></script>    
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
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger nav-bar-font-size" href="#">Seismic Activity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger nav-bar-font-size" href="#">Animalia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger nav-bar-font-size" href="#">Flood Data</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col">
                        <div class="row align-items-center justify-content-center text-center">
                            <h1 class="display-3 mb-5">Weather Lookup 🔍</h1>
                            <form action="" method="get">
                                <div class="form-row mb-4">
                                    <div class="form-group col">
                                        <label for="inputDate">Date</label>
                                        <input type="date" class="form-control" id="inputDate" name ="date">
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputCountry">Country</label>
                                        <input type="text" class="form-control" id="inputCountry" placeholder="Enter a country" name="country">
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputProvince">Province/State</label>
                                        <input type="text" class="form-control" id="inputProvince" placeholder="Enter a province" name="province">
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity" placeholder="Enter a city" name="city">
                                    </div>
                                </div>
                                <div class="form-row align-items-center justify-content-center text-center">
                                    <button type="submit" class="btn btn-outline-primary btn-lg">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php
        include 'resources/Api/ApiRequester.php';

        function displayWeather($city, $date)
        {
            $weather = ApiRequester::getWeather($city, $date);
            var_dump($city);
            // $info = ApiRequester::getInfo($lat, $long);
            // $currentData = $result['data']['current'];
            // $humidity = $currentData['weather']['hu'];
            // $aqi = $currentData['pollution']['aqius'];
            // $temperature =  $currentData['weather']['tp'];

            // echo '<div class="container-fluid mb-5 mt-5">';
            // echo '<div class="row align-items-center justify-content-center text-center ml-5 mr-5">';
            // echo '<div class="col"><p class="h4">Results</p></div>';
            // echo '<div class="w-100"></div>';
            // echo '<div class="col"><p class="h4">Humidity</p></div>';
            // echo '<div class="col"><p class="h4">'.$humidity.'</p></div>';
            // echo '<div class="w-100"></div>';
            // echo '<div class="col"><p class="h4">Air Quality Index (Lower = Better)</p></div>';
            // echo '<div class="col"><p class="h4">'.$aqi.'</p></div>';
            // echo '<div class="w-100"></div>';
            // echo '<div class="col"><p class="h4">Temperature</p></div>';
            // echo '<div class="col"><p class="h4">'.$temperature.' Celsius</p></div>';
            // echo '<div class="w-100"></div>';
            // echo '<div class="col"><p class="h4">Province</p></div>';
            // echo '<div class="col"><p class="h4">'.$info["state"].'</p></div>';
            // echo '<div class="w-100"></div>';
            // echo '<div class="col"><p class="h4">City</p></div>';
            // echo '<div class="col"><p class="h4">'.$info["city"].'</p></div></div></div>';
        }

        if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['date']) && isset($_GET['country']) && isset($_GET['province']) && isset($_GET['city']))//isset($_GET['city']) && isset($_GET['country']) && isset($_GET['state']))
        {
            $city = $_GET['city'];
            $date = $_GET['date'];
            var_dump($city);
            displayWeather($city,$date);
        }
        ?>
    </body>
</html>