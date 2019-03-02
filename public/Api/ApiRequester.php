<?php
/**
 * Created by PhpStorm.
 * User: aantoine97
 * Date: 2019-03-02
 * Time: 5:05 PM
 */
use ApiUri;

class ApiRequester
{
    public static function getNews()
    {
        $url = NEWS_URL . "q=enviroment&startDate=" . date("Y/m/d") . "&sortBy=publishedAt&apiKey=" . AIR_APIKEY;
        $json = file_get_contents($url);
        return json_decode($json, true);
    }

    public static function getAirQuality($country, $state, $city)
    {
        $url = AIR_URL . "country=" . $country . "&state=" . $state . "&city=" . $city . "&key=" . AIR_APIKEY;
        $json = file_get_contents($url);
        return json_decode($json, true);
    }
}