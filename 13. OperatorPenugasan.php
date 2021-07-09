<?php
/*
$a += $b itu -> $a = $a + $b (jadi lebih singkat)
$a -= $b -> $a = $a - $b
$a *= $b -> $a = $a * $b
$a /= $b -> $a = $a / $b
$a %= $b -> $a = $a % $b
*/
$total = 0;

$fruit = 5000;
$chicken = 10000;
$orangeJuice = 5000;

// $total = $total + $fruit;
// $total = $total + $chicken;
// $total = $total + $orangeJuice;
//bisa disingkat jadi:
$total += $fruit;
$total += $chicken;
$total += $orangeJuice;

var_dump($total);
