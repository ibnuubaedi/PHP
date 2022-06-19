<?php
//tipe data number
//integer(bilangan bulat): desimal, heksadesimal, oktal, biner
echo "Bilangan Desimal: ";
var_dump(1234);

echo "Bilangan Oktal: ";
var_dump(0123);

echo "Bilangan Heksadesimal: ";
var_dump(0X1A);

echo "Bilangan Biner: ";
var_dump(0b11111111);

echo "Underscore di Number: ";
var_dump(1_000_000);

echo "Integer overflow: ";
var_dump(9223372036854775807);

//float(bilangan pecahan)
echo "Bilangan Pecahan: ";
var_dump(1.5);

echo "Bilangan Pecahan dengan notasi E plus (1,5 x 1000): ";
var_dump(1.5e3);

echo "Bilangan Pecahan dengan notasi E minus (1,5 x 0,001) : ";
var_dump(1.5e-3);

echo "Underscore di Bilangan Pecahan: ";
var_dump(1.5_75);
?>