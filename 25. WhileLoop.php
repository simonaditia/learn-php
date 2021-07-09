<?php

//WHILE LOOP
/*
- While loop adalah versi perulangan yang lebih sederhana dibanding for loop.
- Di While loop, hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement.
Jadi selama kondisi nya bernilai true maka perulangan while itu akan selalu dieksekusi.
*/

$counter = 1; //manual seperti ini
while ($counter <= 10) { //ini sebenarnya mirip seperti for loop, tapi hanya ada kondisi nya saja, tidak ada init statement dan post statement.
    echo "Ini adalah While Loop ke-$counter" . PHP_EOL;
    $counter++; //manual seperti ini
}
//kalau di while loop, pastikan init statement nya dan post statement nya dilakukan secara manual.
//Jadi while itu versi yg lebih sederhana dibandingkan dengan menggunakan for loop.
echo "\n";

//While Loop juga mempunyai syntax alternatif nya
$counter = 1;
while ($counter <= 10) :
    echo "Ini adalah While Loop ke-$counter" . PHP_EOL;
    $counter++;
endwhile;
