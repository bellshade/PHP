<?php

echo "<pre>";

echo "<h1>Membuat class di PHP</h1>";

echo "class Kelas {

}";
class Kelas
{

}
echo "<br>";

echo "Membuat instance dari class",PHP_EOL;
echo "<br>";
echo "namaVariable = new namaClassNya();",PHP_EOL;
echo "namaVariable2 = new namaClassNya();";

echo "<br>";
$kelas1 = new Kelas();
$kelas2 = new Kelas();
echo "Hasilnya Jika Di var_dump()",PHP_EOL;
echo "<br>";
var_dump($kelas1);
var_dump($kelas2);

echo "</pre>";
