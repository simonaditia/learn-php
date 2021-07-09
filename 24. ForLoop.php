<?php

//FOR LOOP
/*
- For adalah salah satu kata kunci yang bisa digunakan untuk melakukan perulangan.
- Blok kode yang terdapat di dalam for akan selalu DIULANGI selama kondisi for terpenuhi.
jadi mirip kyk if else sebenarnya, cuman kalau if itu sekali doang kalau for ini diulang-ulang terus, jadi selama kondisi didalam for nya itu TRUE dia akan selalu diulangi si blok for nya (BERULANG-ULANG).
Beda dengan if else, kalau kondisi TRUE dia sekali doang dieksekusinya

SINTAK PERULANGAN FOR
for(init statement; kondisi; post statement){
    //block perulangan
}
- Init statement akan dieksekusi hanya sekali di awal sebelum perulangan. (HANYA SEKALI DIAWAL).
- Kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti.
- Post statement akan dieksekusi setiap kali diakhir perulangan. (SETIAP KALI DIAKHIR PERULANGAN).
- Init statement, Kondisi dan Post Statement tidak wajib diisi, jika Kondisi tidak diisi, berarti kondisi selalu bernilai TRUE.

Jadi perulangan ini akan selalu dieksekusi selama kondisi yang ditengah ini SELALU bernilai TRUE.

CONTOH FLOW/ALUR PERULANGAN:
jadi dari init statement -> cek kondisi -> kalau true maka blok perulangan nya akan dieksekusi -> setelah selesai akan dieksekusi post statement (jadi setelah perulangan) -> dicek lagi kembali ke kondisi -> kalau masih true eksekusi lagi blok for nya -> setelah selesai blok for nya dieksekusi -> maka akan dicek lagi post statement nya (JADI POST STATEMENT ITU SELALU DIEKSEKUSI DITIAP AKHIR PERULANGAN)
*/

//Kode: PERULANGAN TANPA HENTI
//kalau init statement nya tidak disi gk ada masalah.
//kalau kondisi nya tidak diisi gk ada masalah, maka default nya TRUE.
//kalau post statement nya tidak diisi gk ada masalah.
//artinya ini adalah perulangan yang tidak berhenti-henti, kenapa? karena kondisinya selalu TRUE
//for (;;) { //kalau tidak diisi maka kondisi nya otomatis selalu bernilai TRUE, maka dia akan selalu diulangi
//     echo "Ini adalah for loop" . PHP_EOL;
// }
//jadi hati-hati kalau bikin perulangan seperti ini, karena ini tidak akan pernah berhenti perulangannya.


//Kode: PERULANGAN DENGAN KONDISI
echo "Kode: PERULANGAN DENGAN KONDISI" . PHP_EOL;
$counter = 1;
for (; $counter <= 10;) { //jadi selama counternya kurang dari sama dengan 10 kita akan melakukan perulangan dibawah ini.
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++; //diakhir perulangan kita menaikan counter nya, kenapa? kalau gk dinaikan nanti dia akan terus menerus kondisinya, jadi kita naikan sampai 10, kalau dah lebih 10 otomatis berhenti perulangan nya.
    //karena sudah sampai 10, maka terjadi false dan akan berhenti perulangannya di 10, tidak akan dilakukan perulangan lagi.
}
echo PHP_EOL;
echo "\n";

//Kode: PERULANGAN DENGAN INIT STATEMENT
echo "Kode: PERULANGAN DENGAN INIT STATEMENT" . PHP_EOL;
for ($counter = 1; $counter <= 10;) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++;
}
echo PHP_EOL;
echo "\n";

//Kode: PERULANGAN DENGAN POST STATEMENT
echo "Kode: PERULANGAN DENGAN POST STATEMENT" . PHP_EOL;
for ($counter = 1; $counter <= 10; $counter++) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}
echo PHP_EOL;

for ($counter = 10; $counter >= 1; $counter--) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}
echo PHP_EOL;

//Kode: SYNTAX ALTERNATIVE FOR LOOP
//sama di if, switch menggunakan ":" (titik dua), dan diakhiri endfor;
echo "Kode: SYNTAX ALTERNATIVE FOR LOOP" . PHP_EOL;
for ($counter = 1; $counter <= 10; $counter++) :
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
endfor;

echo "\n";

function fizzBuzz(int $total)
{
    for ($i = 1; $i <= $total; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "Fizz Buzz" . PHP_EOL;
        } else if ($i % 3 == 0) {
            echo "Fizz" . PHP_EOL;
        } else if ($i % 5 == 0) {
            echo "Buzz" . PHP_EOL;
        } else {
            echo $i . PHP_EOL;
        }
    }
}
fizzBuzz(100);
