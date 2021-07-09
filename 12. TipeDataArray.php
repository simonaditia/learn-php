<?php
/*
$array[index] -> Mengakses data di array pada nomer index
$array[index] = value -> Mengubah data di array pada nomor index dengan value baru
$array[] = value -> Menambah data di array pada posisi paling belakang
unset($array[index]) -> Menghapus data di array, index otomatis hilang dari array
count($array) -> Mengambil total data di array
*/
$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Eko", "Kurniawan", "Khannedy"];
var_dump($names);

//melihat indeks array pada indeks ke 0
var_dump($names[0]);

//mengubah indeks array
$names[0] = "Budi";
var_dump($names);

//menghapus indeks array
unset($names[1]);
var_dump($names);

//menambah indeks array, di akhir array -> jadi dia increment
$names[] = "Joko";
var_dump($names);

//menghitung banyak array
var_dump(count($names));

//ini adalah map menggunakan array di php
//jadi tidak hanya bisa menggunakan indeks tapi bisa diganti key nya jadi custom
//default nya 0,1,2,3,4,....
//bisa diganti jadi "id", "name", "age", dll
$eko = array(
    "id" => "eko",
    "name" => "Eko Kurniawan",
    "age" => 30
);
var_dump($eko);
var_dump($eko["name"]);

$budi = [
    "id" => "budi",
    "name" => "Budi Nugraha",
    "age" => 35
];
var_dump($budi);

//Array di dalam Array
//array key value lagi
$eko = array(
    "id" => "eko",
    "name" => "Eko Kurniawan",
    "age" => 30,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
    )
);
var_dump($eko);
var_dump($eko["name"]);
var_dump($eko["address"]["country"]);


$budi = [
    "id" => "budi",
    "name" => "Budi Nugraha",
    "age" => 35,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];
var_dump($budi);
