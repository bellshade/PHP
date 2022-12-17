<?php

class Teko
{
    private $jumlahIsiTeko = 0; //Mililiter

    public function isiTeko($jumlahAirMasuk)
    {
        $this->jumlahIsiTeko += $jumlahAirMasuk;

        return $this; // Untuk Method Chaining
    }

    public function tuangAir($jumlahAirKeluar)
    {
        $this->jumlahIsiTeko -= $jumlahAirKeluar;

        return $this; // Untuk Method Chaining
    }

    public function periksaIsi()
    {
        echo "Jumlah air saat ini: {$this->jumlahIsiTeko} ml\n";
    }
}

$teko = new Teko();

// Mengisi teko kosong dan memeriksa isi teko
$teko->isiTeko(1000)->periksaIsi();
// Output:
// Jumlah air saat ini: 1000 ml

// Menuang air untuk seluruh anggota keluarga dan memeriksa isi teko
$teko->tuangAir(250)
    ->tuangAir(150)
    ->tuangAir(100)
    ->tuangAir(200)
    ->tuangAir(200)
    ->periksaIsi();
// Output:
// Jumlah air saat ini: 100 ml

// Menuang lagi untuk ayah dan memeriksa kembali isi teko
$teko->tuangAir(100)->periksaIsi();
// Output:
// Jumlah air saat ini: 0 ml

// Mengisi ulang teko yang kosong dan memeriksa isi teko
$teko->isiTeko(1000)->periksaIsi();
// Output:
// Jumlah air saat ini: 1000 ml
