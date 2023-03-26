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
        $hasilHitungUsia = $dateTimeHariIni->diff($dateTimeTanggalLahir)->y;

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

// Mengeset nilai properti tanggalLahir secara langsung
// dengan format yang salah
$pengguna->tanggalLahir = '1234-1234-1234'; // Fatal error: Uncaught Exception: Failed to parse time string (1234-1234-1234)
