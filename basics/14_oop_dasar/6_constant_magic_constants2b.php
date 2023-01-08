<?php

namespace Konstanta;

/**
 * Class Lingkaran
 */
class Lingkaran
{
    // Deklarasi konstanta
    public const PI = 3.14;

    // Property jari-jari
    public $jariJari;

    // Method konstruktor
    public function __construct(float $jariJari)
    {
        $this->jariJari = $jariJari;
    }

    // Method hitung luas
    public function hitungLuas()
    {
        return self::PI * $this->jariJari * $this->jariJari;
    }
}

// Instansiasi Pengguna
$pengguna = new Pengguna();

// Menampilkan pesan login
$pengguna->login();

// Instansiasi Lingkaran
$lingkaran = new Lingkaran(10);

// Menampilkan luas lingkaran
echo "Luas lingkaran: " . $lingkaran->hitungLuas() . " cm \n";

// Menampilkan pesan logout
$pengguna->logout();
