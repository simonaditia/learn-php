<?php

//Single Qoute
echo 'Name: ';
echo 'Simon Aditia';
// echo '\n'; -> gk bisa enter, tapi malah nampil output \n
echo "\n"; // -> harus pakai double qoute

//Double Qoute
echo "Name: ";
echo "Simon\t Aditia\t Situmeang\n";

//Heredoc
// adalah fitur untuk membuat String yg panjang, sehingga kita tdk perlu manual melakukan enter, tab dan yang lain-lain secara manual. (string yg multiline / barisnya lebih dari satu)
//tag TEXT nya bisa nama apapun, tapi Uppercase
echo <<<EKO
TAG nya bisa apapun

EKO;

echo <<<TEXT
Ini adalah contoh string yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa qoute" juga

TEXT;

//Nowdoc
//mirip seperti Heredoc, yg membedakan adalah pada Nowdoc tdk memiliki kemampuan parsing seperti di Heredoc atau Double-Qoute.
echo <<<'TEXT'
Ini adalah contoh string yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa qoute" juga
TEXT;
