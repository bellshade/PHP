<?php

/**
 * while (jika kondisi bernilai benar){
 * code 
 * }
 * 
 */

$x = 1; // nilai awal

while ($x <= 5) {
    //disimpulkan bahwa nilai x = 1, karena nilai x lebih kecil dari 5 maka kondisi tersebut bernilai true
    echo "Nomor: $x <br>";
    $x++;
}
"<br>";
$y = 5;
while ($y <= 1) {
    //disimpulkan bahwa nilai y = 5, karena nilai y lebih kecil dari 1 maka kondisi tersebut bernilai false, maka code selanjutnya tidak di eksikusi.
    echo "Nilai Y: $y <br>";
    $y++;
}
