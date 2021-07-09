<?php

define("AUTHOR", "Programmer Zaman Now");
define("APP_VERSION", 100);

echo "Author: ";
echo AUTHOR;
echo "\n";

echo "App Version: ";
echo APP_VERSION;
echo "\n";
// AUTHOR = "eko"; -> tidak bisa diubah lagi kalau sudah dideklarasikan (define()), karena constant sifatnya imutable