<?php
//tipe data null
$nama = "Ibnu";
$usia = null;

echo "Nama: ";
echo $nama;
echo "\n";

echo "Usia: ";
echo $usia;
echo "\n";

//is_null()
//mengecek apakah variabel ini berisi null 
echo "Apakah variabel nama itu null? ";
var_dump(is_null($nama));

echo "Apakah variabel usia itu null? ";
var_dump(is_null($usia));

//unset()
//menghapus variabel yang sudah dibuat
$namaLengkap = "Ibnu Ubaedi";
unset($namaLengkap);
echo $namaLengkap;

//isset()
//untuk mengecek apakah ada variabel dan bukan null
var_dump(isset($namaLengkap));
var_dump(isset($nama));

?>