<?php
/**
 * Created by PhpStorm.
 * User: aantoine97
 * Date: 2019-03-02
 * Time: 5:05 PM
 */
include 'ApiUri.php';

class ApiRequester
{
    public static function getNews()
    {
        $url = NEWS_URL . "q=globalWarming&startDate=" . date("Y/m/d") . "&sortBy=publishedAt&apiKey=" . NEWS_APIKEY;
        $json = file_get_contents($url);
        return json_decode($json, true);
    }
    public static function getAirQuality($lat, $lon)
    {
        //lat=%7B%7BLATITUDE%7D%7D&lon=%7B%7BLONGITUDE%7D%7D&key=%7B%7BYOUR_API_KEY
        $url = AIR_URL . "lat=" . $lat . "&lon=" . $lon . "&key=" . AIR_APIKEY;
        $json = file_get_contents($url);
        return json_decode($json, true);
    }
    public static function getAirRanks()
    {
        $url = AIR_RANKURL ."?key=" . AIR_APIKEY;
        $json = file_get_contents($url);
        return json_decode($json, true);
    }

    public static function getNearestStation()
    {
      $url = AIR_NEARESTURL ."?key=" . AIR_APIKEY;
      $json = file_get_contents($url);
      return json_decode($json, true);
    }

    public static function getProvince($lat, $long)
    {
        $url = AIR_URL . "lat=" . $lat . "&lon=" . $long . "&key=" . AIR_APIKEY;
        $json = file_get_contents($url);
        return json_decode($json, true)["data"]["state"];
    }


}
