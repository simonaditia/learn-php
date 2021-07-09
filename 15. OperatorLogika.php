<?php
// && atau and itu di kali -> 1 && 1 = 1, 1 && 0 = 0
echo "Ini &&" . PHP_EOL;
var_dump(true && true); //bisa juga menggunakan true and true
var_dump(true && false); //lebih recomend menggunakan "&&" karena lebih familiar di bahasa pemrograman lain
var_dump(false and true);
var_dump(false and false);
echo "\n";
// || atau or itu di tambah -> 1 || 1 = 1, 1 || 0 = 1
echo "Ini ||" . PHP_EOL;
var_dump(true || false); //bisa juga menggunakan true or true
var_dump(true || true); //lebih recomend menggunakan "//" karena lebih familiar di bahasa pemrograman lain
var_dump(false or true);
var_dump(false or false);
echo "\n";

echo "Ini xor" . PHP_EOL;
var_dump(true xor false); //true  jika $a dan $b salah satu true, tapi tidak kedua nya
var_dump(true xor true);
var_dump(false xor true);
var_dump(false xor false);

echo "\n";
echo "Ini !" . PHP_EOL;
var_dump(!true);
var_dump(!false);
