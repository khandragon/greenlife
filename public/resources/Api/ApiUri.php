<?php

// Query strings: q=NewsKeyword&from=StartDate(yyyy-mm-dd)&sortBy=(just use publishedAt)&apiKey=NEWS_APIKEY
define("NEWS_URL", "https://newsapi.org/v2/everything?");

// Query string: country=country&state=state&city=city&key=AIR_APIKEY
//Query String http://api.airvisual.com/v2/nearest_city?lat=%7B%7BLATITUDE%7D%7D&lon=%7B%7BLONGITUDE%7D%7D&key=%7B%7BYOUR_API_KEY
define("AIR_URL", "http://api.airvisual.com/v2/nearest_city?");

define("NEWS_APIKEY", "0c865f9e95dc4d67ab00616448c75638");

define("AIR_APIKEY", "nZphb9kEGPQsYMpSc");

define("AIR_RANKURL","api.airvisual.com/v2/city_ranking");

define("AIR_NEARESTURL","api.airvisual.com/v2/nearest_station");

define("PROVINCE_APIKEY", "AIzaSyClDJZfQAW6DA5b0GhHOwbWAIbpZZImJc8");