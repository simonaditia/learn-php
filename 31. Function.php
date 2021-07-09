<?php

/*
- Function adalah block kode program yang akan berjalan saat kita panggil.
- Untuk membuat function di PHP, kita bisa menggunakan kata kunci function, lalu diikuti dengan nama function, kurung() dan diakhiri dengan block.
- Kita bisa memanggil function dengan menggunakan nama function lalu diikuti dengan kurung()
- Di bahasa pemrograman lain, function juga disebut dengan method.
*/

function sayHello()
{
    echo "Hello Function" . PHP_EOL;
}

sayHello();
sayHello();


$buat = true; //kalau true artinya kode program function hi() itu pernah dieksekusi, tapi kalau jadi false maka kode program function hi() tersebut tidak pernah dieksekusi dan artinya kode program si function hi() tersebut tidak pernah dibuat. Dan kalau dicoba dijalankan maka akan keluar error, "Call to undefined function hi()" artinya: Jadi kita memangil function yang function blm didefinisikan yang namanya hi().
if ($buat) {
    function hi()
    {
        echo "Hi!";
    }
}
hi();
