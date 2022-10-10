<?php

require '1_inheritance_Kucing.php';

use Basic\OOP_Lanjutan\Kucing;

echo "<pre>";

echo "class Tumbuhan
{
    // Private Property
    protected nama = 'Tumbuhan';

    // Method Public
    public function bergerak()
    {
        echo 'Aku adalah Class Tumbuhan';
    }
}";

class Tumbuhan
{
    // Private Property
    protected $nama = 'Tumbuhan';

    // Method Public
    public function bergerak()
    {
        echo 'Aku adalah Class Tumbuhan<br>';
        echo $this->nama;
    }
}

echo "<br>";
echo "<br>";
echo "Class Kucing merupakan turunan dari Class Hewan",PHP_EOL;
echo "<br>";
$kucing = new Kucing();
echo "Memanggil Properti Public dari Class Hewan",PHP_EOL;
var_dump($kucing->namaProperti);

echo "<br>";
echo "<br>";
echo "Class Tunbuhan merupakan Class yang Berdiri Sendiri",PHP_EOL;
echo "<br>";
$tumbuhan = new Tumbuhan();
echo "Memanggil Method dari Class Tumbuhan",PHP_EOL;
$tumbuhan->bergerak();

echo "</pre>";
