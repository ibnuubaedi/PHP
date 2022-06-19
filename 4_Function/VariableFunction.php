<?php
//variable function

function foo ()
{
    echo "Foo" . PHP_EOL;
}

function bar ()
{
    echo "Bar" . PHP_EOL;
}

$FunctionFoo = "foo";
$FunctionFoo();

$FunctionBar = "bar";
$FunctionBar() . PHP_EOL;

function sayHello ($nama, $filter)
{
    $namaAkhir = $filter ($nama);
    echo $namaAkhir . PHP_EOL;
}

sayHello ("Ibnu Ubaedi", "strtolower");
sayHello ("Ibnu Ubaedi", "strtoupper");

function sayGoodBye ($nama) {
    $namaAkhir = strtoupper ($nama);
    echo $namaAkhir . PHP_EOL;
}

sayGoodBye ("Ibnu");
?>