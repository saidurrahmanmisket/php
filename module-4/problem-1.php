<?php

// Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
function sort_by_length($a, $b)
{
    return strlen($a) - strlen($b);
}

$strings = array('abc', 'def', 'ghij', 'klmno', 'pqrstu', 'vwxyz');

usort($strings, 'sort_by_length');

print_r($strings);
echo PHP_EOL;