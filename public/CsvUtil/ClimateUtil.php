<?php
//Give it all of this information, and it gives you the average temperature of that day
//Example Call:
//Climate ID, date, month, year, Province
//getAverageTemperature(7011982,9,2,2018,'QC');
class ClimateUtil
{
    public static function getAverageTemperature($climateId,$day,$month,$year,$province){
        $provinceTr = [
            'Quebec' => 'QC',
            'Ontario' => 'ON',
            'Yukon' => 'YT',
            'British Columbia' => 'BC',
            'Manitoba' => 'MB',
            'Nove Scotia' => 'NS',
            'Alberta' => 'AB',
            'Northwest Territories' => 'NT',
            'Newfoundland' => 'NL',
            'Prince Edward Island' => 'PE',
            'Saskatchewan' => 'SK',
            'Nunavut' => 'NU',
            'New Brunswick' => 'NB'
        ];

        $row = 1;
        if(strlen($month) == 1){
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
        }
        $tempLink = "https://dd.meteo.gc.ca/climate/observations/daily/csv/".$provinceTr[$province]."/climate_daily_".$provinceTr[$province]."_".$climateId."_".$year."-". $month ."_PID.csv";

        echo $tempLink;
        if (($handle = fopen($tempLink, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                $row++;
                if($row > 27){
                    if($data[3] == $day){
                        if($data[5] == 'M' || $data[7] == 'M' || $data[5] == '' || $data[7] == '' ){
                            return '<p>There is no recorded temperature for this</p>';
                            break;
                        }
                        $meanTemp = ($data[5] + $data[7]) / 2;
                        return "<p>Your mean temperature for that day is: " .$meanTemp . "</p>\n";
                        $row++;
                    }
                }
            }
            fclose($handle);
        }
    }

    public static function findClimateId($latitude, $longitude){
        $climateId = 0;
        if (($handle = fopen(__DIR__."/Station-Inventory-EN.csv", "r")) !== FALSE) {
            $diff = 1000;
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                for ($c=0; $c < $num; $c++){
                    if (count($data) >= 12 && $data[12] == 2019){
                        if ($c == 6){
                            $latitudeDiff = abs($data[$c] - $latitude);
                            $longitudeDiff = abs($data[$c + 1] - $longitude);
                            $summedDiff = $latitudeDiff + $longitudeDiff;
                            if ($summedDiff < $diff){
                                $diff = $summedDiff;
                                $climateId = $data[2];
                            }
                        }
                    }
                }
            }
            fclose($handle);
        }

        return $climateId;
    }

}
?>
