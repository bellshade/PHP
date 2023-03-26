<?php

class Pengguna
{
    private $tanggalLahir;

    private static function apakahFormatTanggalLahirSalah($tanggalLahir)
    {
        if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $tanggalLahir)) {
            return false;
        }
        
        return true;
    }

    private function setTanggalLahir($tanggalLahir)
    {
        if (self::apakahFormatTanggalLahirSalah($tanggalLahir)) {
            echo '### Format tanggal salah ###';
            return;
        }

        $this->tanggalLahir = new DateTime($tanggalLahir);
    }

    private function getTanggalLahir()
    {
        $formatterTanggal = new IntlDateFormatter('id_ID', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
        return $formatterTanggal->format($this->tanggalLahir);
    }

    private function getUsia()
    {
        $tanggalSekarang = new DateTime();
        $hasilHitungUsia = $tanggalSekarang->diff($this->tanggalLahir)->y;

        return "{$hasilHitungUsia} tahun";
    }

    public function __set($name, $value)
    {
        if ($name == 'tanggalLahir') {
            $this->setTanggalLahir($value);

            return;
        }

        echo '### Properti tidak ditemukan ###';
    }

    public function __get($name)
    {
        if ($name == 'tanggalLahir') {
            return $this->getTanggalLahir();
        }

        if ($name == 'usia') {
            return $this->getUsia();
        }

        echo '### Properti tidak ditemukan ###';
    }
}

// Instansiasi objek
$pengguna = new Pengguna();

// Mengeset properti tanggalLahir melalui setter ajaib
$pengguna->tanggalLahir = '2000-01-01';

// Mengakses nilai properti tanggalLahir
// yang telah diformat melalui getter ajaib untuk ditampilkan
echo $pengguna->tanggalLahir; // 1 Januari 2000

// Mencetak baris baru
echo PHP_EOL;

// Mengakses nilai properti usia
// yang telah diformat melalui getter ajaib untuk ditampilkan
echo $pengguna->usia; // 23 tahun (2023)
