<?php

class Teko
{
    /**
     * Menyimpan jumlah air pada teko dalam milimeter
     *
     * @var int
     */
    private $jumlahIsiTeko = 0;

    /**
     * Mengisi teko
     *
     * @param int $jumlahAirMasuk
     **/
    public function isiTeko($jumlahAirMasuk)
    {
        $this->jumlahIsiTeko += $jumlahAirMasuk;
    }

    /**
     * Menuang teko. Mengurangi isi teko.
     *
     * @param int $jumlahAirKeluar
     **/
    public function tuangAir($jumlahAirKeluar)
    {
        $this->jumlahIsiTeko -= $jumlahAirKeluar;
    }

    /**
     * Memeriksa isi teko.
     *
     **/
    public function periksaIsi()
    {
        echo "Jumlah air saat ini: {$this->jumlahIsiTeko} ml\n";
    }
}

$teko = new Teko();

// Mengisi teko kosong
$teko->isiTeko(1000);

// Memeriksa isi teko
$teko->periksaIsi();
// Output:
// Jumlah air saat ini: 1000 ml

// Menuang air untuk seluruh anggota keluarga
$teko->tuangAir(250);
$teko->tuangAir(150);
$teko->tuangAir(100);
$teko->tuangAir(200);
$teko->tuangAir(200);

// Memeriksa isi teko
$teko->periksaIsi();
// Output:
// Jumlah air saat ini: 100 ml

// Menuang lagi untuk ayah
$teko->tuangAir(100);

// Memeriksa isi teko
$teko->periksaIsi();
// Output:
// Jumlah air saat ini: 0 ml

// Mengisi ulang teko yang kosong
$teko->isiTeko(1000);

// Memeriksa isi teko
$teko->periksaIsi();
// Output:
// Jumlah air saat ini: 1000 ml
