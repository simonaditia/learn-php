<?php

/*
$a == $b (Sama dengan -> true jika $a sama dengan $b setelah dilakukan konversi tipe data -> jadi kalau $a = "10" dan $b = 10 ini berbeda tipe data yaitu a adalah string dan b adalah int, tetapi jika dikonversi maka dianggap SAMA nilainya (TYPE JUGLING))
$a ===$b (Identik -> true jika $a sama dengan $b dan memiliki tipe data yang sama -> jadi kalau $a = "10" dan $b = 10 ini berbeda tipe data yaitu a adalah string dan b adalah int, tetapi jika dikonversi maka dianggap BERBEDA karena tipe data nya yg BERBEDA -> jadi dicek harus beneran sama value dan tipe datanya harus SAMA baru true)
$a != $b (Tidak sama dengan -> true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data -> ini juga bisa TYPE JUGLING, TYPE JUGLING itu perubahan tipe data secara otomatis)
$a <> $b (Tidak sama dengan -> true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data)
$a !== $b (Tidak identik -> true jika $a tidak sama dengan $b atau tidak sama tipe data -> jadi kalau tipe datanya beda maka dianggap tidak sama)
$a < $b (Kurang dari -> true jika $a kurang dari $b)
$a <= $b (Kurang dari atau sama dengan -> true jika $a kurang dari atau sama dengan $b)
$a > $b (Lebih dari -> true jika $a lebih dari $b)
$a >= $b (Lebih dari atau sama dengan -> true jika $a lebih dari atau sama dengan $b)
*/

var_dump("10" == 10); // -> dia ada type jugling yaitu perubahan tipe data secara otomatis
var_dump("10" === 10);

var_dump(10 < 9);
var_dump(9 >= 9);

echo "\n";

echo "Ini !=";
echo "\n";
var_dump(5 != 5); //false -> karena sama
var_dump("5" != 5); //false -> karena sama
var_dump("5" != 7); //true -> karena beda
echo "\n";

echo "Ini !==";
echo "\n";
var_dump(5 !== 5); //false -> karena dilakukan konversi tipe data dan tipe datanya sama, value nya juga sama
var_dump("5" !== 5); //true -> karena dilakukan konversi tipe data dan tipe datanya berbeda, walaupun valuenya sama
var_dump("5" !== 7); //true -> karena dilakukan konversi tipe data dan tipe datanya berbeda, dan value nya pun berbeda
echo "\n";

echo "Ini <>"; //mirip seperti !=, tapi lebih bagus menggunakan !=
echo "\n";
var_dump(5 <> 5); //false
var_dump("5" <> "5"); //false
var_dump("5" <> 5); //false
var_dump("5" <> 7); //true
echo "\n";

echo "Ini < " . PHP_EOL;
var_dump(5 < 7);
var_dump(5 <= 7);
var_dump(5 <= 5);
var_dump(7 < 5);
echo "\n";

echo "Ini >" . PHP_EOL;
var_dump(5 > 7);
var_dump(5 >= 7);
var_dump(7 >= 7);
var_dump(7 > 5);


//type jugling from documentation php
$foo = "1";  // $foo is string (ASCII 49)
var_dump($foo);
$foo *= 2;   // $foo is now an integer (2)
var_dump($foo);
$foo = $foo * 1.3;  // $foo is now a float (2.6)
var_dump($foo);
$foo = 5 * "10"; // $foo is integer (50)
var_dump($foo);
$foo = 5 + "Small Pigs";     // $foo is integer (50)
var_dump($foo);

$foo = 10;
$str = "$foo";
$fst = (string) $foo;
if ($fst === $str) {
    echo "It's same broo!";
}
