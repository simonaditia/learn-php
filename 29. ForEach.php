<?php

//FOR EACH
/*
- Kadang kita biasa mengekses data array menggunakan perulangan.
- Mengakses data array menggunakan perulangan sangat bertele-tele, kita harus membuat counter lalu mengakses array menggunakan counter yang kita buat.
- Namun untungya, di PHP terdapat perulangan for each, yang bisa digunakan untuk mengakses seluruh data di Array secara otomatis.
*/

//Kode Tanpa For Each
//menggunakan perulangan biasa mengakses data dalam array
$names = ["Eko", "Kurniawan", "Khannedy"];
for ($i = 0; $i < count($names); $i++) { //kenapa $i = 0? karena indeks array selalu dimulai dari 0, kenapa <(kurang dari) bukan <=(kurang dari sama dengan)? karena indeks array itu selalu total array -1.
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

for ($i = 1; $i <= 5; $i++) {
    for ($y = $i; $y >= 1; $y--) {
        echo $i;
    }
    echo "\n";
}




$negara = ["Indonesia", "Jepang", "Rusia"];
for ($i = 0; $i < count($negara); $i++) {
    echo $i . PHP_EOL;
}

foreach ($negara as $country) {
    echo $country;
}
