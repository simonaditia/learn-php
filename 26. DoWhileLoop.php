<?php

//DO WHILE LOOP
/*
- Do While loop adalah perulangan yang mirip dengan while.
- Perbedaannya hanya pada pengecekan kondisi.
- Pengecekan kondisi di while loop dilakukan di awal sebelum perulangan dilakukan, sedangkan di do while loop dilakukan setelah perulangan dilakukan. (Jadi diakhir)
- Oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai true. (Karena dilakukan dahulu perulangannya, baru nilainya, terakhir dicek kondisinya, JADI minimal ada sekali perulangan yang dieksekusi kalau menggunakan Do While loop beda dengan While kalau While diawal sebelum perulangannya dieksekusi itu harus langsung dicek kondisinya)
*/

$counter = 100; //karena ini nanti kondisinya jadi FALSE/SALAH, maka akan tetap dieksekusi perulangannya minimal 1kali.
do {
    //Ini adalah kode perulangannya
    //Jadi ketika masuk kesini minimal satu kali ini akan dieksekusi dulu. WALAUPUN kondisi nya FALSE tapi akan tetap dieksekusi dulu.
    //Jadi setelah di eksekusi baru dicek kondisi nya, kalau kondisinya (while) bernilai TRUE maka masuk ke do lagi, dan kalau bernilai FALSE langsung akan berhenti perulangannya.
    //Jadi beda dengan While, kalau While diawal selalu dicek dulu kondisinya, jadi tidak akan mungkin masuk kalau perulangannya dari awal sudah SALAH. Kalau di Do While kalau kondisinya salah akan tetap dieksekusi minimal satu kali.
    echo "Ini adalah Do While Loop ke-$counter" . PHP_EOL;
    $counter++;
} while ($counter <= 10);

echo "\n";

$counter = 1;
do {
    echo "Ini adalah Do While Loop ke-$counter" . PHP_EOL;
    $counter++;
} while ($counter <= 10);
