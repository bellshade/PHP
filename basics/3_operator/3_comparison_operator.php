<?php

/**
 * Operator - Comparison Operator
 * Cara menggunakan operator pembanding di PHP
 * Penjelasannya silahkan lihat dalam README.
 *
 * Pro tips: Eksekusi kode ini di console sehingga hasilnya akan terlihat
 */

$a = 3;
$b = 5;

// Sama dengan
echo var_dump($a == $b); // false

// Identik
echo var_dump($a === $b); // false

// Tidak sama
echo var_dump($a != $b); // true

// Tidak identik
echo var_dump($a !== $b); // true, karena tipe datanya masih identik

// Lebih besar dari
echo var_dump($a > $b); // false

// Lebih kecil dari
echo var_dump($a < $b); // true

// Lebih besar dari atau sama dengan
echo var_dump($a >= $b); // false

// Lebih kecil dari atau sama dengan
echo var_dump($a <= $b); // true

// Spaceship
echo var_dump($a <=> $b); // -1
