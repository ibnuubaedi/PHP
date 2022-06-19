<?php
//operator array
//+, ==, ===, !=, <>, !==

$namaDepan = [
    "namaDepan" => "Ibnu"
];

$namaBelakang = [
    "namaBelakang" => "Ubaedi"
];

$namaLengkap = $namaDepan + $namaBelakang;
var_dump($namaLengkap);

$data1 = [
    "nik" => "317304280497",
    "nama" => "Ibnu Ubaedi"
];

$data2 = [
    "nama" => "Ibnu Ubaedi",
    "nik" => "317304280497"
];

var_dump($data1 == $data2);
var_dump($data1 === $data2);
?>