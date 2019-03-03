<?php

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
}