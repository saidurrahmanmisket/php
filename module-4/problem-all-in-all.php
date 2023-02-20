
<?php
// problem no 1 ======================

function sort_by_length($a, $b)
{
    return strlen($a) - strlen($b);
}

$strings = array('abc', 'def', 'ghij', 'klmno', 'pqrstu', 'vwxyz');

usort($strings, 'sort_by_length');

print_r($strings);
echo PHP_EOL;






// problem no 2 ======================
$stringOne = "First String";
$stringTwo = "Second String";
function strJoin($stringOne, $stringTwo)
{

    $strJoin = $stringOne . $stringTwo;
    echo $strJoin;
    echo PHP_EOL;
}
strJoin($stringOne, $stringTwo);



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





// problem no 4 ======================

// Write a PHP function to check if a string contains only letters and whitespace.

function check_string($string)
{
    return ctype_alpha(str_replace(' ', '', $string));
}

echo check_string('abc def') ? 'true' : 'false';
echo PHP_EOL;

// Output:
// true




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
