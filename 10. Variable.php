<?php

//Variable adalah tempat untuk menyimpan data sehingga bisa kita gunakan lagi di kode program selanjutnya
//Di PHP variable bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data
//Untuk membuat variable kita bisa menggunakan tanda $(dolar) diikuti dengan nama variable nya
//Penamaan variable tidak boleh mengandung spasi
$name = "Eko";
$age = "20";

echo "Name: ";
echo $name;
echo "\n";

echo "Age: ";
echo $age;
echo "\n";

//variable variables
//walaupun bisa jalan, tapi jangan dilakukan
$contoh = "eko";
$$contoh = "Kurniawan";

echo "Contoh: ";
echo $contoh;
echo "\n";

echo "eko: ";
echo $eko;
echo "\n";

echo $$contoh;
