<?php

echo "<pre>";

echo "<h1>Contoh Inheritance dalam PHP</h1>";

echo "class Hewan
{
    // Deklarasi Properti
    public namaProperti = 'Properti Hewan';
    public informasiProperti = 25;

    //Deklarasi Method
    public function perkenalan()
    {
        //Perintah Apa saja
        echo 'Ini merupakan method perkenalan';
    }

    public function salam()
    {
        //Perintah Apa saja
        echo 'Ini merupakan method salam';
    }
}";

class Hewan
{
    // Deklarasi Properti
    public $namaProperti = 'Properti Hewan';
    public $informasiProperti = 25;

    //Deklarasi Method
    public function perkenalan()
    {
        //Perintah Apa saja
        echo 'Ini merupakan method perkenalan';
    }

    public function salam()
    {
        //Perintah Apa saja
        echo 'Ini merupakan method salam';
    }
}

echo "<br>";
$pengguna = new Hewan();
echo "<br>";
echo "Hasil Salah satu method Pada Class Hewan",PHP_EOL;
$pengguna->salam();
echo "<br>";
echo "<br>";

echo "class Kucing extends Hewan 
{
    // Method Milik Class Kucing
    public function bermain() {
        echo 'Aku Kucing yang suka Bermain';
    }
}";

class Kucing extends Hewan 
{
    // Method Milik Class Kucing
    public function bermain() {
        echo 'Aku Kucing yang suka Bermain';
    }
}

echo "<br>";
echo "<br>";
echo "Class Kucing merupakan turunan dari Class Hewan",PHP_EOL;
echo "<br>";
$kucing = new Kucing;
echo "Hasil pemanggilan salah satu method class Hewan melalui class Kucing",PHP_EOL;
$kucing->salam();
echo "<br>";
echo "<br>";
echo "Hasil pemanggilan method bermain pada Class Kucing",PHP_EOL;
$kucing->bermain();
  
echo "</pre>";

