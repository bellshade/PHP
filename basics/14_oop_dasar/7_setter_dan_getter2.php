<?php

// Mendefinisikan kelas Pengguna
class Pengguna
{
    public $tanggalLahir;
    public $usia;

    // Setter untuk properti tanggalLahir
    // sekaligus menghitung dan mengeset properti usia
    public function setTanggalLahir($tanggalLahir)
    {
        // Mengeset properti tanggalLahir
        $this->tanggalLahir = $tanggalLahir;

        // Mengakses nilai properti tanggalLahir untuk menghitung usia
        $dateTimeTanggalLahir = new DateTime($this->tanggalLahir);
        $dateTimeHariIni = new DateTime();
        $hasilHitungUsia = $dateTimeTanggalHariIni->diff($dateTimeTanggalLahir)->y;

        // Mengeset properti usia dengan nilai dari variabel $hasilHitungUsia
        $this->usia = $hasilHitungUsia;
    }

    // Getter untuk properti tanggalLahir
    public function getTanggalLahir()
    {
        // Mengakses nilai properti tanggalLahir untuk DIKEMBALIKAN
        // dalam format penulisan tanggal Indonesia
        $dateTimeTanggalLahir = new DateTime($this->tanggalLahir);
        $formatterTanggal = new IntlDateFormatter('id_ID', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
        return $formatterTanggal->format($dateTimeTanggalLahir);
    }

    // Getter untuk properti usia
    public function getUsia()
    {
        // Mengakses nilai properti usia untuk diformat dan DIKEMBALIKAN
        return "{$this->usia} tahun";
    }
}

// Instansiasi objek
$pengguna = new Pengguna();

// Mengeset nilai properti tanggalLahir melalui setter
$pengguna->setTanggalLahir('2000-01-01');

// Mengakses nilai properti tanggalLahir
// yang telah diformat melalui getter-nya untuk ditampilkan
echo $pengguna->getTanggalLahir(); // 1 Januari 2000

// Menampilkan baris baru
echo PHP_EOL;

// Mengakses nilai properti usia
// yang telah diformat melalui getter-nya untuk ditampilkan
echo $pengguna->getUsia(); // 23 tahun (2023)
