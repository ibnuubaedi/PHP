<?php

function sum (int $bil1, int $bil2) : int
{
    $total = $bil1 + $bil2;
    return $total;
}

$result = sum (10, 20);
var_dump($result);

function Grade ($averageValue) : string
{
    if ($averageValue >= 80){
        return "A";
    } else if ($averageValue >= 70){
        return "B";
    } else if ($averageValue >= 60){
        return "C";
    } else if ($averageValue >= 50){
        return "D";
    } else {
        return "E";
    }
}

$Ibnu = Grade (110);
var_dump($Ibnu);

?>