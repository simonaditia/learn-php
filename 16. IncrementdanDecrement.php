<?php

/*
$a++ (Post increment -> Kembalikan $a lalu naikan 1 angka)
++$a (Pre increment -> Naikkan $a satu angka, lalu kembalikan $a)
$a-- (Post decrement -> Kembalikan $a lalu turunkan 1 angka)
--$a (Pre decrement -> Turunkan $a satu angka, lalu kembalikan $a)

post itu setelah, jadi kenaikan setelah variable tersebut
*/

$a = 10;

//$a++; // -> ini seperti $a = $a + 1;

/*
BIASA DISEBUT POST INCREMENT
$b = $a++;
ini mirip kyk:
$b = $a;
$a = $a +1;
*/

/*
BIASA DISEBUT PRE INCREMENT
tapi kalau ini
$b = ++$a;
mirip kyk:
$a = $a + 1;
$b = $a;
*/

// tapi kalau gk perlu disimpen kevariable lain dulu (contoh di atas disimpen ke variable $b), cara nya simple cuman kasih $a++ atau ++$a itu sama aja.
// tapi kalau mau nyimpan data nya di variable lain, tinggal tentukan mau dinaikkan dulu baru disimpan, atau disimpan dulu di variable lain baru dinaikkan.

$b = ++$a; //dinaikan dulu nilainya, baru a nya dikasih ke b

var_dump($a);
var_dump($b);


$c = 10;
$d = $c++; //$c nya nilainya di masukan dulu ke d, baru c dinaikan 1

var_dump($c);
var_dump($d);
