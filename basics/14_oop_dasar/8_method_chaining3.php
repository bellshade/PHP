<?php

class Teko
{
    private $jumlahIsiTeko = 0;     //mililiter

    public function isiTeko($jumlahAirMasuk)
    {
        $this->jumlahIsiTeko += $jumlahAirMasuk;
    }

    public function tuangAir($jumlahAirKeluar)
    {
        $this->jumlahIsiTeko -= $jumlahAirKeluar;
    }

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
