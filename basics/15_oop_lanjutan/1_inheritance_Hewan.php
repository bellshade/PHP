<?php

namespace Basic\OOP_Lanjutan;

echo "<pre>";

echo "<h1>Contoh Inheritance dalam PHP</h1>";

echo "class Hewan
{
    // Deklarasi Properti
    public namaProperti = 'Properti Hewan';
    public informasiProperti = 25;
    protected jenis = 'Hewan';
    private privacy = 'Private';

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
    protected $jenis = 'Hewan';
    private $privacy = 'Private';

    //Deklarasi Method
    public function perkenalan()
    {
        //Perintah Apa saja
        echo 'Ini merupakan method perkenalan';
    }

    public function salam()
    {
        //Perintah Apa saja
        echo 'Ini merupakan method salam<br>';
        echo $this->privacy;
    }
}

echo "<br>";
$pengguna = new Hewan();
echo "<br>";
echo "Hasil Salah satu method Pada Class Hewan",PHP_EOL;
$pengguna->salam();
echo "<br>";
echo "<br>";
