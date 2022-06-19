<?php
//tipe data array
$angka = array (1,2,3);
var_dump($angka);
echo "\n";

$nama = ["Ibnu Ubaedi", "Badrudin", "Sofian Azis", "Bachtiar"];
var_dump($nama);
echo "\n";

$tidakAdaNama = [];
var_dump($tidakAdaNama);
echo "\n";

//menambah array
$nama[] = "Nur Inayah";
var_dump($nama);
echo "\n";

//mengubah isi array
$nama[2] = "Ipunk";
var_dump($nama);
echo "\n";

//menghapus isi array
unset($nama[3]);
var_dump($nama);
echo "\n";

//membuat array associative (map)
$karyawan = [
    "nip" => "001",
    "nama" => "Ibnu Ubaedi",
    "jabatan" => "Backend Devp"
];
var_dump($karyawan);
echo "\n";

//array didalam array
$karyawan = [
    "nip" => "001",
    "nama" => "Ibnu Ubaedi",
    "jabatan" => "Backend Devp",
    "alamat" => ["kota" => "Jakarta",
                 "negara" => "Indonesia"
    ]
];
var_dump($karyawan["alamat"]["kota"]);
?>