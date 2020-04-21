<?php
function classifyPhoneNumber($array)
{
    global $viettel, $mobiphone, $vinaphone;
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count(VIETTEL); $j++) {
            if ($array[$i][FIRST_NUMBER] . $array[$i][SECOND_NUMBER] . $array[$i][THIRD_NUMBER] == VIETTEL[$j]) {
                array_push($viettel, $array[$i]);
            } elseif ($array[$i][FIRST_NUMBER] . $array[$i][SECOND_NUMBER] . $array[$i][THIRD_NUMBER] == VINAPHONE[$j]) {
                array_push($vinaphone, $array[$i]);
            } elseif ($array[$i][FIRST_NUMBER] . $array[$i][SECOND_NUMBER] . $array[$i][THIRD_NUMBER] == MOBIPHONE[$j]) {
                array_push($mobiphone, $array[$i]);
            }
        }
    }
}