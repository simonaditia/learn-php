<?php

/*
Operator Array
$a + $b -> Union -> Mengabungkan array $a dan $b.
$a == $b -> Equality -> true jika $a dan $b memiliki key-value sama.
$a === $b -> Identity -> true jika $a dan $b memiliki key-value sama dan posisi sama. -> jadi data nama posisi nya "HARUS SAMA PERSIS".
$a != $b -> Inequality -> true jika $a dan $b tidak sama.
$a <> $b -> Inequality -> true jika $a dan $b tidak sama.
$a !== $b -> Nonidentity -> true jika $a dan $b tidak identik.
*/

//Operasi Union
$first = [
    "first_name" => "Eko"
];

$last = [
    //"first_name" => "Budi", kalau ditambahin ini, ini tidak akan terjadi bentrok tapi akan diignore, karena didahulukan yang first terlebih dahulu
    "last_name" => "Khannedy"
];

$full = $first + $last; //namun jika $last dahulu ($full = $last + $first), maka yg tercetak akan Budi Khannedy
var_dump($full);

//Operasi Equality
$a = [
    "first_name" => "Eko",
    "last_name" => "Khannedy"
];
$b = [
    "last_name" => "Khannedy",
    "first_name" => "Eko"
];
var_dump($a == $b); //true -> walaupun posisi nya berbeda tapi dianggapnya sama, karena key valuenya sama.
var_dump($a === $b); //false -> karena Identity tidak hanya mengecek kesamaan, tapi kesamaan urutannya pun dicek. -> Posisi si Key Value nya. -> Kalau posisi nya berbeda maka dianggapnya berbeda.
