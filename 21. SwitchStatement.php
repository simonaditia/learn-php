<?php

//SWITCH STATEMENT
/*
- Kadang kita hanya butuh menggunakan kondisi sederhana di if statement, seperti hanya menggunakan perbandingan ==
- Switch adalah statement percabangan yang sama dengan if, namun lebih sederhana cara pembuatannya
- Kondisi di switch statement hanya untuk perbandingan ==
*/
$nilai = "A";
if ($nilai == "A") {
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
} else if ($nilai == "B" || $nilai == "C") {
    echo "Anda lulus" . PHP_EOL;
} else if ($nilai == "D") {
    echo "Anda tidak lulus" . PHP_EOL;
} else {
    echo "Mungkin anda salah jurusan" . PHP_EOL;
}

//statement diatas bisa disederhanakan dengan menggunakan Switch Statement
//karena tidak perlu menggunakan perbandingan-perbandingan secara manual (==)
$nilai = "B";
switch ($nilai) {
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break; //kalau tidak break, dia akan terus ke case-case selanjutnya
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
}
//jadi jika ingin melakukan percabangan sederhana hanya mengcompare artinya membandingkan satu variable dengan nilai-nilai yang kita inginkan. lakukan switch case statement diatas.

//SYNTAX ALTERNATIF
/*
- Sama seperti if statement, switch statement juga bisa tanpa menggunakan {} (kurung kurawal).
- Namun diakhir switch statement, kita harus menambahkan kata kunci endswitch.
*/
$nilai = "A";
switch ($nilai):
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break; //kalau tidak break, dia akan terus ke case-case selanjutnya
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
endswitch;
//tapi lebih direkomendasikan menggunakan {} (kurung kurawal cara diatas), karena lebih banyak orang menggunakan cara itu.