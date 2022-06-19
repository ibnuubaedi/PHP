<?php
//operator aritmatika
//+,-,*,/,%
$bil1 = 7;
$bil2 = 3;

echo "Hasil Pertambahan: ";
$tambah = $bil1 + $bil2;
var_dump($tambah);

echo "Hasil Negatif: ";
var_dump(-$tambah);

echo "Hasil Pengurangan: ";
$kurang = $bil1 - $bil2;
var_dump($kurang);

echo "Hasil Positif: ";
var_dump(+$kurang);

echo "Hasil Perkalian: ";
$kali = $bil1 * $bil2;
var_dump($kali);

echo "Hasil Pembagian: ";
$bagi = $bil1 / $bil2;
var_dump($bagi);

echo "Hasil Sisa Bagi: ";
$sisaBagi = $bil1 % $bil2;
var_dump($sisaBagi);

echo "7 pangkat 2: ";
var_dump($bil1**2);
?>