<?php
//manipulasi string
//menambahkan string dengan data lain menggunakan "."

$nama = "Ibnu Ubaedi";
echo "Nama Lengkap: " . $nama . PHP_EOL;

$nik = 3173042804970006;
echo "NIK: " . $nik . PHP_EOL;

//konversi string ke number (sebalinkya)
$nilaiString = (string)99;
var_dump($nilaiString);

$nilaiInt = (int)"66";
var_dump($nilaiInt);

$nilaiFloat = (float)"1.5";
var_dump($nilaiFloat);

//mengakses karakter string
$name = "Ibnu Ubaedi";
$first = $name[0] . $name[1];
var_dump($first);

//variable parsing
echo "Halo $name, Selamat belajar PHP!" . PHP_EOL;

//curly brace
echo "Welcome, Mrs. {$name}'s";
?>