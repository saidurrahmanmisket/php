<?php

// problem no 1 ======================

function sort_by_length($a, $b)
{
    return strlen($a) - strlen($b);
}

$strings = array('afas', 'deasfasf', 'asf', 'asf', 'fasfas', 'asfasfsadfsd');

usort($strings, 'sort_by_length');

print_r($strings);
echo PHP_EOL;