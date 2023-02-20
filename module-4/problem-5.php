<?php


// problem no 5 ======================
$number = [2, 5, 6, 8, 2, 3, 5, 4, 7, 8, 2, 9, 12, 10, 11, 99, 100];
function FindMax($number)
{

    rsort($number);
    $length = count($number);
    $max = max($number);
    $_number = $number;

    for ($i = 0; $i < $length; $i++) {
        if ($max > $_number[$i]) {
            echo ($_number[$i]) . "\n";
            echo PHP_EOL;

            break;
        } else {
            array_shift($number);
        }
    }
}
FindMax($number);
