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
    public static function getAirQuality($country, $state, $city)
    {
        $url = AIR_URL . "country=" . $country . "&state=" . $state . "&city=" . $city . "&key=" . AIR_APIKEY;
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


}
