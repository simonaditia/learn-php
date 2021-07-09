<?php

/*
- Dalam PHP, if adalah salah satu kunci yang digunakan untuk percabangan.
- Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi
- Hampir di semua bahasa pemrograman mendukung if expression
*/
$nilai = 80;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Selamat anda lulus!" . PHP_EOL;
}

//ELSE STATEMENT
/*
- Blok if akan dieksekusi ketika kondisi if bernilai true.
- Kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false.
- Hal ini bisa dilakukan menggunakan else statement.
*/
$nilai = 70;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Selamat anda lulus!" . PHP_EOL;
} else {
    echo "Maaf, anda tidak lulus!" . PHP_EOL;
}


//ELSE IF STATEMENT
/*
- Kadang dalam If, kita butuh membuat beberapa kondisi.
- Kasus seperti ini, di PHP kita bisa menggunakan Else If statement.
- Else if di PHP bisa lebih dari satu.
- Kode Else if di php bisa menggunakan "else if" atau "elseif" (digabung).
*/
$nilai = 80;
$absen = 90;

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai anda A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Nilai anda B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
    echo "Nilai anda C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
    echo "Nilai anda D" . PHP_EOL;
} else {
    echo "Nilai anda E" . PHP_EOL;
}

//SYNTAX ALTERNATIF
/*
- Selain menggunakan {} (kurung kurawal), PHP juga menyediakan syntax alternatif untuk menggunakan if, yaitu dengan menggunakan : (titik dua).
- Namun untuk menggunakan ini, kita harus menggunakan kata kunci endif diakhir if statement.
*/
$nilai = 70;
$absen = 90;
if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) : // kalau pakai ":" else if nya gk boleh pakai spasi, jadi -> elseif (digabung)
    echo "Nilai anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
    echo "Nilai anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
    echo "Nilai anda D" . PHP_EOL;
else :
    echo "Nilai anda E" . PHP_EOL;
endif; // Harus ditutup dengan endif, kalau menggunakan titik dua
//tapi kebanyakan orang jarang menggunakan ":", kebanyakan orang menggunakan "{}"
