<?php

$name = "Eko Kurniawan Khannedy";

echo "Name: " . $name . PHP_EOL; //PHP_EOL itu sama seperti "\n" -> enter -> End Of Line -> PHP_EOL itu sebuah konstan/constant bawaan php nya
echo "Value: " . 100 . PHP_EOL;


//Jadi dibawah ini adalah cara konversi dari string ke number atau juga kebalikannya, jadi cukup () dan didalam nya disertakan tipe data nya -> (string), (int), (float)
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100"; //kalau misalkan stringnya "salah" atau kata yg lain maka otomatis di konversi sama php nya ke int/integernya nya bernilai 0
var_dump($valueInt);

$valueFloat = (float)"1.01"; //kalau misalkan stringnya "salah" atau kata yg lain maka otomatis di konversi sama php nya ke float/floating point nya bernilai 0
var_dump($valueFloat);


//MENGAKSES KARAKTER
/*
- String di PHP seperti array karakter, dimana kita bisa mengakses data tiap karakternya menggunakan kurung siku
- Sama seperti di array, index pertama dimulai dari 0
- Jika kita mengakses index melebihi karakter di string, maka akan terjadi error
*/
$name = "Eko";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
//echo $name[3] . PHP_EOL;//jadi kalau misalkan masukan data yang salah, maka akan terjadi error, maka dari itu jangan sampai salah mengakses karakter di string


//VARIABLE PARSING
/*
- Khusus string menggunakan double qoute atau heredoc, kita bisa menggunakan karakter $ untuk mengakses variable.
- Ini memudahkan ketika kita ingin mengabungkan string dengan variable.
- Cara penggunaannya adalah dengan menggunakan karakter $ lalu diikuti dengan nama variable nya.
*/
$name = "Eko";
//tadinya seperti ini
echo "Hello " . $name . ", Selamat Belajar" . PHP_EOL;
//kalau pakai kutip dua, maka bisa dimasukkan jadi seperti ini
echo "Hello $name, Selamat Belajar" . PHP_EOL; //jadi value name yaitu Eko akan di subtitut ke dalam code baris ini $name, ini nama nya variable parsing
//jadi lebih simple dibandingkan dot operator ".", kalau hanya ingin mengambil data si variable nya


//CURLY BRACE -> {}
/*
- Kadang kita butuh menggabungkan variable dengan string tanpa ada spasi. Hal ini akan menyulitkan jika hanya menggunakan variable parsing.
- Untungnya di PHP kita bisa menambahkan kurung kurawal sebelum menggunakan variable parsing.
*/
$var = "var";
echo "This is {$var}s" . PHP_EOL;
$eko = "Eko";
echo "This is {$eko}s" . PHP_EOL; // gunakan {} ini jika agak kesulitan ketika menggunakan variable parsing yang harus digabung dengan string tanpa spasi.
