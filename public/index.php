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
                <a class="navbar-brand js-scroll-trigger nav-bar-font-size" href="#">GreenLife</a>
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
        <header id="header-bg" class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col">
                        <div class="row align-items-center justify-content-center text-center">
                            <img src="resources/images/logo-circle.png" alt="GreenLife logo" id="header-logo">
                        </div>
                        <div class="row align-items-center justify-content-center text-center mt-5">
                            <h1>GreenLife</h1>
                        </div>
                        <hr class="my-4">
                        <div class="row align-items-center justify-content-center text-center mt-5">
                            <h4>Learn more about the environment with us</h4>
                        </div>
                        <div class="row justify-content-center mt-5">
                            <a href="#offers" class="mt-5">
                                <img src="resources/images/thin-arrowheads-pointing-down.png" alt="arrow-logo" id="arrow-logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section id="offers" class="mt-5 mb-5">
            <div class="container">
                <h2 class="text-center">Our offers</h2>
                <hr class="my-4">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <img src="resources/images/cloud.png" alt="cloud">
                            <h3 class="mb-2">Weather Data</h3>
                            <p class="text-muted mb-0">We provide weather information with Canada's latest statistics.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <img src="resources/images/wind.png" alt="wind">
                            <h3 class="mb-2">Air Quality</h3>
                            <p class="text-muted mb-0">We make sure to inform the quality of air you are breathing.</p>
                        </div>
                        <div class="mt-5">
                            <a href="#offers-section">
                                <img src="resources/images/thin-arrowheads-pointing-down.png" alt="arrow-logo" id="arrow-logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <img src="resources/images/heart.png" alt="heart">
                            <h3 class="mb-2">Open source</h3>
                            <p class="text-muted mb-0">This project is made with passion and we would love to share it with everyone.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="offers-section" class="mt-5">
            <div class="container-fluid h-100">
                <div class="row h-50 align-items-center justify-content-center text-center">
                    <div class="col d-flex justify-content-center">
                    </div>
                    <div id="offers-section-info" class="col h-100">
                        <div class="row h-100 align-items-center justify-content-center text-center">
                            <div class="col ml-5 mr-5">
                                <div class="row mb-4">
                                    <h1>Weather Data ☁️</h1>
                                </div>
                                <div class="row">
                                    <p class="lead">
                                        Get weather statistics made simple
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="lead">
                                        Select date and input a specific location 🗺️
                                    </p>
                                </div>
                                <div class="row">
                                    <a class="btn btn-outline-primary btn-lg" href="weather.php" role="button">Try it out!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row h-50 align-items-center justify-content-center text-center">
                    <div id="offers-section-info" class="col h-100">
                        <div class="row h-100 align-items-center justify-content-center text-center">
                            <div class="col ml-5 mr-5">
                                <div class="row mb-4 justify-content-end">
                                    <h1>🎐 Air Quality</h1>
                                </div>
                                <div class="row justify-content-end">
                                    <p class="lead">
                                        Get air quality info made simple
                                    </p>
                                </div>
                                <div class="row justify-content-end">
                                    <p class="lead">
                                        🗺️ Give it a date and select a location on Google Maps
                                    </p>
                                </div>
                                <div class="row justify-content-end">
                                    <a class="btn btn-outline-primary btn-lg" href="air.php" role="button">Try it out!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                    </div>
                </div>
            </div>
        </section>
        <footer class="bg-light pt-4 pb-4">
            <div class="container text-center">
                <h4>Copyright © 2019 - Team undefined</h4>
            </div>
        </footer>
    </body>
</html>