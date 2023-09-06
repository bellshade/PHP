<?php

// Mendefinisikan namespace untuk mengorganisasi kelas-kelas dalam proyek.
namespace Basic\OOP_Lanjutan;

echo "<pre>";
echo "<h1>Contoh Abstract Class dalam PHP</h1>";

// Abstract class Pengguna
abstract class Pengguna
{
    // Properti untuk menyimpan nama pengguna.
    protected $nama;

    // Konstruktor yang mengatur nilai nama pada saat objek dibuat.
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    // Metode abstrak printPerkenalan yang harus diimplementasikan oleh kelas turunan.
    abstract public function printPerkenalan();

    // Metode lainnya untuk mengambil nilai nama.
    public function getNama()
    {
        return $this->nama;
    }
}

// Kelas turunan FrontendDeveloper
class FrontendDeveloper extends Pengguna
{
    // Implementasi printPerkenalan untuk FrontendDeveloper
    public function printPerkenalan()
    {
        echo 'Saya adalah seorang Frontend Developer dengan nama ' . $this->getNama() . '.' . PHP_EOL;
    }

    // Metode khusus untuk FrontendDeveloper
    public function apaPekerjaanFrontendDeveloper()
    {
        echo 'Saya bekerja untuk mengembangkan antarmuka pengguna.' . PHP_EOL;
    }
}

// Kelas turunan BackendDeveloper
class BackendDeveloper extends Pengguna
{
    // Implementasi printPerkenalan untuk BackendDeveloper
    public function printPerkenalan()
    {
        echo 'Saya adalah seorang Backend Developer dengan nama ' . $this->getNama() . '.' . PHP_EOL;
    }

    // Metode khusus untuk BackendDeveloper
    public function apaPekerjaanBackendDeveloper()
    {
        echo 'Saya bekerja untuk mengatur logika dan server.' . PHP_EOL;
    }
}

// Tidak bisa menginstansiasi object pada abstrack class, jika di lakukan maka akan menghasilkan error
// $pengguna = new Pengguna("Mail");

// Menginstansiasi objek FrontendDeveloper
$frontendDeveloper = new FrontendDeveloper('Upin');
// Memanggil metode printPerkenalan untuk FrontendDeveloper.
$frontendDeveloper->printPerkenalan();
// Memanggil metode apaPekerjaanFrontendDeveloper.
$frontendDeveloper->apaPekerjaanFrontendDeveloper();

echo "<br>";

// Menginstansiasi objek BackendDeveloper
$backendDeveloper = new BackendDeveloper('Ipin');
// Memanggil metode printPerkenalan untuk BackendDeveloper.
$backendDeveloper->printPerkenalan();
// Memanggil metode apaPekerjaanBackendDeveloper.
$backendDeveloper->apaPekerjaanBackendDeveloper();
