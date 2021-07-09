<?php

$name = "Eko";
$name = null;

$age = null;

echo "Name: ";
echo $name;
echo "\n";

echo "Age: ";
echo $age;
echo "\n";

// $name = "Eko";

echo "Is Name Null?: ";
var_dump(is_null($name));
echo "\n";
//atau
// $is_null = is_null($name);
// var_dump($is_null);
// -> variablenya harus ada kalau tidak ada maka error
// contoh -> is_null(varibleTdkAda);

//untuk menghapus variable menggunakan unset();
$contoh = "Eko";
unset($contoh);
// echo $contoh;

//jadi kalau null ngerubah data variable nya jadi null tapi variable nya tetep ada
//kalau unset beneran dihapus si variablenya, jadi variablenya hilang
$contoh = "Kurniawan";
$contoh = null;
var_dump(isset($contoh)); //jadi untuk mengecek apakah variable itu ada dan nilainya tdk null, disarankan menggunakan isset, walaupun ada is_null tapi lebih aman menggunakan isset

//tergantung kebutuhan (Jadi ini tentang data null di php)
//$age = null; -> kalau mau variablenya tdk dihilangkan bisa seperti ini
//unset($age); -> tapi kalau mau variablenya dihilangkan menggunakan ini
//is_null($age); -> untuk mengecek kalau "yakin" variablenya ada
//isset($age); -> untuk mengecek dan "tidak yakin" variablenya ada