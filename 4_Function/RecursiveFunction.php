<?php
//recursive function

function factorial (int $value)
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++)
    {
        $total = $total * $i;
    }
    echo "Factorial: $total" . PHP_EOL;
}

factorial (5);