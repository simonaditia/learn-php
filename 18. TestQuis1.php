<?php

// $JumlahPenjualan = 0;
// $Bonus = 0;
// echo "Jumlah penjualan: ";
// $Input_JumlahPenjualan = fopen("php://stdin", "r");
// $JumlahPenjualan = trim(fgets($Input_JumlahPenjualan));
// if ($JumlahPenjualan > 2) {
//     $Bonus = 1000000;
// } else if ($JumlahPenjualan == 2) {
//     $Bonus = 500000;
// } else if ($JumlahPenjualan < 2) {
//     $Bonus = 0;
// }
// echo $Bonus;

// echo "\n";
// for ($i = 0; $i < 5; $i++) {
//     for ($n = $i; $n > 0; $n--) {
//         echo "*";
//     }
//     echo "\n";
// }

for ($a = 1; $a <= 5; $a++) {
    for ($b = $a; $b >= 1; $b--) {
        echo $b;
    }
    echo "\n";
}
