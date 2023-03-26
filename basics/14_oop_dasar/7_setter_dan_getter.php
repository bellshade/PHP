<?php

// Mendefinisikan kelas Pengguna
class Pengguna
{
    public $tanggalLahir;
    public $usia;
}

// Instansiasi objek
$pengguna = new Pengguna();

// Mengeset properti tanggalLahir
$pengguna->tanggalLahir = '2000-01-01';

// Mengakses nilai properti tanggalLahir untuk menghitung usia
$dateTimeTanggalLahir = new DateTime($pengguna->tanggalLahir);
$dateTimeTanggalHariIni = new DateTime();
$hasilHitungUsia = $dateTimeTanggalHariIni->diff($dateTimeTanggalLahir)->y;

// Mengeset properti usia dengan nilai dari variabel $hasilHitungUsia
$pengguna->usia = $hasilHitungUsia;

// Mengakses nilai properti tanggalLahir untuk ditampilkan
// dalam format penulisan tanggal Indonesia
$dateTimeTanggalLahir = new DateTime($pengguna->tanggalLahir);
$formatterTanggal = new IntlDateFormatter('id_ID', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
echo $formatterTanggal->format($dateTimeTanggalLahir); // 1 Januari 2000

// Menampilkan baris baru
echo PHP_EOL;

// Mengakses nilai properti usia untuk ditampilkan
echo "{$pengguna->usia} tahun"; // 23 tahun (2023)
