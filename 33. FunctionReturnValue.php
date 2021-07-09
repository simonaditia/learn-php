<?php

//FUNCTION RETURN VALUE
/*
- Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function mengembalikan nilai.
- Dan di dalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return, lalu diikuti dengan data yang ingin dihasilkan.
- Kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu.
*/

function sum($first, $second)
{
    return $first + $second;
}
$total = sum(10, 10);
var_dump($total);
var_dump(sum(20, 20));

function sum2(int $first, int $second)
{
    $total = $first + $second;
    return $total; //ini tidak wajib ya, kalau tidak mau dipake ya gpp
}

$result = sum2(25, 25);
var_dump($result);
var_dump(sum2(30, 30));


function getFinalValue($value)
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "HA?";
    }
    // echo "UPS"; // Jadi kalau dah ketemu kata return maka ia langsung mengembalikan nilainya, dan maka perintah ini tidak di eksekusi, dan perintah dibawahnya
    //contoh kalau dia dapat nilai A, maka perintah return b,c,d,e,ha?, dan ups tidak akan dieksekusi
    //Karena kalau sudah nemu perintah return, maka si functionnya langsung kembali keatas jadi langsung mengembalikan value, yg bawahnya tdk akan dieksekusi
}
$score = getFinalValue(90);
var_dump($score);

$score = getFinalValue(30);
var_dump($score);


//RETURN TYPE DECLARATIONS
/*
- Sama seperti pada argument, pada return value pun kita bisa mendeklarasikan tipe datanya.
- Hal ini selain mempermudah kita ketika membaca tipe data kembalian, bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function.
- Untuk mendeklarasikan tipe data kembalian function, setelah kurung() kita bisa tambahkan: diikiti tipe data kembaliannya.
*/

function sum3(int $first, int $second): int //enaknya nanti adalah saat ada orang lain yang membaca function yang kita buat, jadi kita tau owh sum3 itu kembaliannya adalah int
//dan juga kalau teman-teman salah mengirim datanya, maka akan error dibilang dari php nya
{
    $total = $first + $second;
    return $total;
    //return []; //contoh nya array ini berbeda, kan harus int, maka akan keluar error "Fatal error: Uncaught TypeError: Return value of sum3() must be of the type integer, array returned
    //tapi kalau ": int" nya diilangin maka orang tdk pernah tau kalau ini kembalian datanya apa, maka kalau di run akan success.
    //maka dari itu jika menggunakan ": int" itu akan mempermudah kita, lebih terjaga lah less error istilahnya jadi lebih dikit gitu errornya, jadi jangan sampai teman-teman bikin function yang berubah-ubah gitu return value nya, bisa int, bisa array, dll, itu akan membuat bingung orang yang akan menggunakan functionnya.
    //maka dari itu ini lebih terjaga, karena harus menggembalikan tipe data nya int
}
$result = sum3(45, 45);
var_dump($result);


function getFinalValue2(int $value): string //Dan getFinalValue2 kembaliannya adalah string
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "Ha?";
    }
}
$nilai = getFinalValue2(87);
var_dump($nilai);
