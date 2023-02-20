<?php

// problem no 3 ======================

$array = ["f", 5, 6, "F", true, 8];
function RmvFirstLast($array)
{

    array_pop($array);
    array_shift($array);

    $newArray = $array;


    print_r($newArray);
    echo PHP_EOL;

    // return $newArray;

}
RmvFirstLast($array);

