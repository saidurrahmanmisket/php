<?php
// problem 1 ===================================
$number = 22;//This is for input. 
//This function will check Even and Odd . It will return true or false which is (1 or 0)

function ckEvenAndOdd($number){
    if($number%2==0){
        return true;
    }else{
        return false;
    }
}
echo ckEvenAndOdd($number);

// problem 2=====================================

$sumOfSeries = 0;
for($i=1; $i<=100; $i++){
   $sumOfSeries += $i;
}
echo $sumOfSeries;
//output: 5050
























