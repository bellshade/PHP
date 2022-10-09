<?php

require '1_inheritance_Hewan.php';

use Basic\OOP_Lanjutan\Hewan;

echo "class Kucing extends Hewan 
{
    // Method Milik Class Kucing
    public function bermain() 
    {
        echo 'Aku Kucing yang suka Bermain';
    }
}";

class Kucing extends Hewan
{
    // Method Milik Class Kucing
    public function bermain()
    {
        echo 'Aku Kucing yang suka Bermain';
    }
}

echo "<br>";
echo "<br>";
echo "Class Kucing merupakan turunan dari Class Hewan",PHP_EOL;
echo "<br>";
$kucing = new Kucing();
echo "Hasil pemanggilan salah satu method class Hewan melalui class Kucing",PHP_EOL;
$kucing->salam();
echo "<br>";
echo "<br>";
echo "Hasil pemanggilan method bermain pada Class Kucing",PHP_EOL;
$kucing->bermain();

echo "</pre>";
