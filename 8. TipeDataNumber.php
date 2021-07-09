<?php
//Ada 2 jenis angka number di php -> int, float
//int = bilangan bulat,
//float = bilangan pecahan

echo "Desimal: ";
var_dump(1234);

echo "Oktal: ";
var_dump(0123);

echo "Hexadesimal: ";
var_dump(0x1A);

echo "Binary: ";
var_dump(0b11111111);

// echo "Underscore di Number: ";
// var_dump(1_234_567);

echo "Floating Point: ";
var_dump(1.234);

echo "Floating Point dengan E notation Plus (1.2 x 1000): ";
var_dump(1.2e3);

echo "Floating Point dengan E notation Minus (1.2 x 0.001): ";
var_dump(1.2e-3);

// echo "Underscore di Floating Point";
// var_dump(1_123_123);

echo "Integer Overflow 32 Bit: ";
var_dump(2147483647);

echo "Integer Overflow 64 Bit: ";
var_dump(9223372036854775807);
