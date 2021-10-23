<?php

echo "<br><h1>6. Function Rekursif</h1>";
//============================================Function Rekursif============================================
echo "<br><strong>NOTE : </strong>Sebuah Function yang melakukan pemanggilan function didalam function dirinya nya sendiri, tanpa melakukan perulangan<br>Contoh<br>";
function rekursif(int $angka)
{
    if ($angka <= 10) {
        echo "<br>$angka";
        rekursif($angka + 1);
    } else {
        return "$angka";
    }
}
//Sintaks Call Function
echo rekursif(1);
//============================================
