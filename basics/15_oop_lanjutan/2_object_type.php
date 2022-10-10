<?php

require '1_inheritance_Hewan.php';

use Basic\OOP_Lanjutan\Hewan;

echo "class Sapi extends Hewan
{
    // Method dengan objek sebagai parameternya
    public function bergerak(Hewan animal)
    {
        // Memanggil method salam
        animal->salam();

        echo 'Aku adalah seekor sapi';
    }
}";

class Sapi extends Hewan
{
    // Method dengan objek sebagai parameternya
    public function bergerak(Hewan $animal)
    {
        // Memanggil method salam
        $animal->salam();

        echo '<br>Aku adalah seekor sapi';
    }
}

echo "<br>";
echo "<br>";
echo "Class Sapi merupakan turunan dari Class Hewan",PHP_EOL;
echo "<br>";
$sapi = new Sapi();
$animal = new Hewan();
echo "Hasil pemanggilan method dengan parameter object",PHP_EOL;
$sapi->bergerak($animal);

echo "</pre>";
