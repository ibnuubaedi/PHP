<?php
//anonimus function

$sayHello = function ($name)
{
    echo "Hello, $name" . PHP_EOL;
};

$sayHello("Ibnu");

function sayGoodBye (string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

$filterFunction = function ($name) : string
{
    return strtolower($name);
};

var_dump($filterFunction);

sayGoodBye ("Ibnu", $filterFunction);

?>