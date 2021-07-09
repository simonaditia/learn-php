<?php

//Break & Continue
/*
- Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch.
- Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan. (Tidak peduli kondisinya apapun akan di hentikan)
- Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini lalu melanjutkan ke perulangan selanjutnya. (Kalau continue itu kyk ngeskip, kalau nemu kata kunci continue disuatu perulangan maka ia akan meng-skip perulangan saat ini, lalu ia akan lanjut keperulangan selanjutnya)

-> Jadi kalau break untuk menghentikan seluruh perulangan, gk peduli berapa ratus kali perulangan kedepannya tapi yg pasti akan dihentikan.
-> Kalau continue cuman akan menghentikan perulangan yang saat ini berjalan lalu dia akan lanjutkan ke perulangan berikutnya.
*/

$counter = 1;
while (true) {
    echo "Ini adalah perulangan while ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break; //jadi dimanapun keadaannya, kalau temen-temen pengen menghentikan sebuah perulangan gk peduli kondisi nya true atau false maka bisa gunakan kata kunci "break"
    }
}
