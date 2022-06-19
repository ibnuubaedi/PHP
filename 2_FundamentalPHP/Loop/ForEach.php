<?php
//foreach
$names = [
    "Ibnu", "Ubaedi", "Achmad", "Abas"
];

foreach ($names as $name){
    echo "Nama lengkap: $name" . PHP_EOL;
}

$family = [
    [
    "nama" => "Ibnu Ubaedi",
    "nik" => "3173042804970006",
    "alamat" => "Warakas, Tj. Priok"
    ],
    [
    "nama" => "Nur Inayah",
    "nik" => "3173042804970006",
    "alamat" => "Warakas, Tj. Priok"
    ]
];

foreach ($family as $f){
    echo "Data keluarga lengkap: " . $f["nama"] . PHP_EOL;
    echo "Data keluarga lengkap: " . $f["nik"] . PHP_EOL;
    echo "Data keluarga lengkap: " . $f["alamat"] . PHP_EOL;
}

?>