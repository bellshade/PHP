<?php

echo "<pre>";

echo "<h1>Membuat Properti dan Method di PHP</h1>";

echo "class Kelas {

    //Deklarasi Properti 
    public namaProperti = 'Nilai Properti';
    public namaPropertiDua = 2;
}";

class Kelas
{
    // Deklarasi Properti
    public $namaProperti = 'Nilai Properti';
    public $namaPropertiDua = 2;
}
echo "<br>";

echo "Membuat Sebuah Method dari class",PHP_EOL;
echo "<br>";

echo "class Kelas {

    //Deklarasi Method 
    public function namaMethod()
    {
       //Perintah Apa saja
       echo 'Method';
    }
}";

class KelasBaru
{
    //Deklarasi Method 
    public function namaMethod()
    {
       //Perintah Apa saja
       echo 'Method';
    }
}

echo "<br>";

$kelas1 = new Kelas();
$kelas2 = new KelasBaru();
echo "<br>";
echo "Hasil Salah satu Property Jika Di var_dump()",PHP_EOL;
var_dump($kelas1->namaProperti);

echo "<br>";
echo "Hasil Method Saat dipanggil",PHP_EOL;
$kelas2->namaMethod();

echo "</pre>";
