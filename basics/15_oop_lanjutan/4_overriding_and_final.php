<?php

require '1_inheritance_Hewan.php';

use Basic\OOP_Lanjutan\Hewan;

echo "<pre>";

echo "class Ayam extends Hewan
{
    // Overriding salam
    public function salam()
    {
        echo 'Overriding Method salam';
    }
}";

class Ayam extends Hewan
{
    // Overriding salam
    public function salam()
    {
        echo 'Overriding Method salam';
    }
}

echo "<br>";
echo "<br>";
echo "Class Ayam merupakan turunan dari Class Hewan",PHP_EOL;
echo "<br>";
$kucing = new Ayam();
echo "Memanggil method salam yang telah di override",PHP_EOL;
$kucing->salam();

echo "</pre>";
