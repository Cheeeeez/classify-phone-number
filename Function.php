<?php
function classifyPhoneNumber($array, $carrier)
{
    $data = [];
    for ($i = 0; $i < count($array); $i++) {
        $firstThreeNumber = substr($array[$i], FIRST_NUMBER_INDEX, THIRD_NUMBER);
        for ($j = 0; $j < count(VIETTEL); $j++) {
            if ($firstThreeNumber == $carrier[$j]) {
                array_push($data, $array[$i]);
            }
        }
    }
    return $data;
}

function display($arr)
{
    foreach ($arr as $item) {
        echo $item . "<br>";
    }
}