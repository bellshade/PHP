<?php

/**
 * Class Pengguna
 */
class Pengguna
{
    // Deklarasi konstanta
    public const PESAN_LOGIN = "Selamat datang‼️";
    public const PESAN_LOGOUT = "Sampai jumpa lagi 👋🏻";

    // Method login dan logout
    public function login()
    {
        echo self::PESAN_LOGIN . "\n";
    }

    public function logout()
    {
        echo self::PESAN_LOGOUT . "\n";
    }
}

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
