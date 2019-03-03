<?php
include 'ApiUri.php';

class ApiRequester
{
    public static function getAirQuality($lat, $lon)
    {
        //lat=%7B%7BLATITUDE%7D%7D&lon=%7B%7BLONGITUDE%7D%7D&key=%7B%7BYOUR_API_KEY
        $url = AIR_URL . "lat=" . $lat . "&lon=" . $lon . "&key=" . AIR_APIKEY;
        $json = file_get_contents($url);
        return json_decode($json, true);
    }

    public static function getInfo($lat, $long)
    {
        $url = AIR_URL . "lat=" . $lat . "&lon=" . $long . "&key=" . AIR_APIKEY;
        $json = file_get_contents($url);
        return json_decode($json, true)["data"];
    }

    public static function getWeather($city, $date){
        $url = WEATHER_URL.WEATHER_APIKEY."tz=local&start_date=".$date."&end_date=".$date+1 ."&city=".$city;
        $json = file_get_contents($url);
        return json_decode($json,true);
    }
//    `https://api.weatherbit.io/v2.0/history/daily?key=${apiKey}&tz=local&`
// start_date=2019-01-02&end_date=2019-01-03&city=New_York

}