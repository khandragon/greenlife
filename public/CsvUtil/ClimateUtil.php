<?php
//Give it all of this information, and it gives you the average temperature of that day
//Example Call:
//Climate ID, date, month, year, Province
//getAverageTemperature(7011982,9,2,2018,'QC');
class ClimateUtil
{
    public function getAverageTemperature($climateId,$date,$month,$year,$province){
        $row = 1;
        if(strlen($month) == 1){
            echo 'true';
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
        }
        $tempLink = "https://dd.meteo.gc.ca/climate/observations/daily/csv/". $province."/climate_daily_".$province."_".$climateId."_".$year."-". $month ."_PID.csv";
        echo $tempLink.'</br>';
        if (($handle = fopen($tempLink, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                $row++;
                if($row == 8){
                    echo "Here is the Climate Identifier: " . $data[1] . "<br />\n";
                }
                if($row > 27){
                    if($data[3] == $date){
                        if($data[5] == 'M' || $data[7] == 'M' || $data[5] == '' || $data[7] == '' ){
                            echo '<p>There is no recorded temperature for this</p>';
                            break;
                        }
                        $meanTemp = ($data[5] + $data[7]) / 2;
                        echo "<p>Your mean temperature for that day is: " .$meanTemp . "</p>\n";
                        $row++;
                    }
                }
            }
            fclose($handle);
        }
    }

    function findClimateId($latitude, $longitude){
        $climateId = 0;
        if (($handle = fopen("../Station-Inventory-EN.csv", "r")) !== FALSE) {
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
