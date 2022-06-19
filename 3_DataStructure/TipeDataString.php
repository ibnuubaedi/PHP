<?php
//tipe data string
echo 'Nama: ';
echo 'Ibnu Ubaedi';
echo "\n";

echo "Nama: ";
echo "Nur\t Inayah\n";

echo <<<HEREDOC
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

HEREDOC;

echo <<<'NOWDOC'
Ini adalah contoh string yang sangat
panjang, dan juga gak perlua ngetik enter secara
manual, "bisa quote" juga
NOWDOC;
?>