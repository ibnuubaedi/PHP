<?php
//function argument

function sayHello ($nama = "Annonymus", $usia = 0){
    echo "Halo, nama saya $nama, Saya berusia $usia tahun" . PHP_EOL;
}

sayHello();
sayHello("Ibnu", 24);

function sum (int $bil1, int $bil2){
    $total = $bil1 + $bil2;
    echo "$bil1 + $bil2 = $total";
}

sum (100, 10);

function larik ($larik){
    echo "$larik" . PHP_EOL;
}

larik ("12, 22, 12");

?>