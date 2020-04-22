<?php
function classifyPhoneNumber($array)
{
    global $viettel, $mobiphone, $vinaphone;
    for ($i = 0; $i < count($array); $i++) {
        $firstThreeNumber = substr($array[$i], FIRST_NUMBER_INDEX, 3);
        for ($j = 0; $j < count(VIETTEL); $j++) {
            if ($firstThreeNumber == VIETTEL[$j]) {
                array_push($viettel, $array[$i]);
            } elseif ($firstThreeNumber == VINAPHONE[$j]) {
                array_push($vinaphone, $array[$i]);
            } elseif ($firstThreeNumber == MOBIPHONE[$j]) {
                array_push($mobiphone, $array[$i]);
            }
        }
    }
}