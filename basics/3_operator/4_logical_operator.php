<?php

/**
 * Operator - Logical Operator
 * Cara menggunakan operator logika di PHP
 * Penjelasannya silahkan lihat dalam README.
 *
 * Pro tips: Eksekusi kode ini di console sehingga hasilnya akan terlihat
 */

$a = 3;
$b = 5;

// Penggunaan AND / &&
var_dump($a == 3 && $b == 3); // false

// Penggunaan OR / ||
var_dump($a == 3 || $b == 3); // true

// Penggunaan XOR
var_dump($a == 3 xor $b == 3); // true

// Penggunaan NOT / !
var_dump(!($b != 5)); // true
