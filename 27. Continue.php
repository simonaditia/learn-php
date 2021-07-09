<?php

//Break & Continue
/*
continue -> untuk digunakan untuk menghentikan perulangan saat ini
- Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch.
- Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan. (Tidak peduli kondisinya apapun akan di hentikan)
- Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini lalu melanjutkan ke perulangan selanjutnya. (Kalau continue itu kyk ngeskip, kalau nemu kata kunci continue disuatu perulangan maka ia akan meng-skip perulangan saat ini, lalu ia akan lanjut keperulangan selanjutnya)

-> Jadi kalau break untuk menghentikan seluruh perulangan, gk peduli berapa ratus kali perulangan kedepannya tapi yg pasti akan dihentikan.
-> Kalau continue cuman akan menghentikan perulangan yang saat ini berjalan lalu dia akan lanjutkan ke perulangan berikutnya.
*/

for ($counter = 1; $counter <= 100; $counter++) {
    if ($counter % 2 == 0) { //jika counternya bisa habis dibagi dua maka ia akan continue dan perintah "hello continue.." tidak akan ditampilkan.
        continue; //dia akan menskip kode yg bawah (kalau counter habis dibagi dua yaitu bilangan genap), dan akan melanjutkan langsung ke post statement -> naikan increment -> dicek lagi kondisinya
        //maka hasil nya "Ganjil"
    }
    echo "Hello continue $counter" . PHP_EOL;
}

for ($counter = 1; $counter <= 10; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    }
    echo $counter . PHP_EOL;
}

/*
Jadi:
-> Kalau break = Mengehentikan semua perulangan.
-> Kalau continue = Cuman menghentikan perulangan saat ini dan dilanjutkan ke perulangan berikutnya.
-> Dan ingat kalau masih didalam for, berarti maka post statement nya akan tetap di eksekusi.
*/