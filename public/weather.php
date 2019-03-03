<html>
    <head>
        <meta charset="utf-8">
        <title>GreenLife</title>
        <link rel="stylesheet" href="resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="resources/css/styles.css">  
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
                            <a class="nav-link js-scroll-trigger nav-bar-font-size" href="weather.php">Weather</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger nav-bar-font-size" href="#offers-section">Services</a>
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
                            <form action="">
                                <div class="form-row mb-4">
                                    <div class="form-group col">
                                        <label for="inputDate">Date</label>
                                        <input type="date" class="form-control" id="inputDate">
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputCountry">Country</label>
                                        <input type="text" class="form-control" id="inputCountry" placeholder="Enter a country">
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputProvince">Province</label>
                                        <input type="text" class="form-control" id="inputProvince" placeholder="Enter a province">
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity" placeholder="Enter a city">
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
    </body>
</html>