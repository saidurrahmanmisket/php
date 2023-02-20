<?php 

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