<?php

//NULL COALESCING OPERATOR
/*
- Sebelumnya kita tahu bahwa data kosong direpresentasikan dengan data NULL di PHP.
- Dan hal yang paling repot di PHP adalah mengecek apakah sebuah data ada atau tidak, dan juga apakah data tersebut isinya null atau bukan.
- Biasanya untuk melakukan itu, kita perlu menggunakan pengecekan if statement dengan function isset($variable).
- Namun untungnya di php ada null coalescing operator menggunakan tanda ??
*/
//Kode tanpa null coalescing operator
$data = [
    "action" => "Create"
];
if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}
echo $action . PHP_EOL;

//Kode dengan menggunakan null coalescing operator
$data = [
    "action" => "Create"
];
$action = $data["action"] ?? "Nothing"; //SIMPLE BANGET
echo $action . PHP_EOL;
//jadi ini null coalescing operator, jadi untuk mempersingkat kita dibandingkan pengecekan menggunakan if else isset.
