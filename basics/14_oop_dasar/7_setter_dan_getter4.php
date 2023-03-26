<?php

// Mendefinisikan kelas Pengguna
class Pengguna
{
    private $tanggalLahir;
    private $usia;

    // Setter untuk properti tanggalLahir
    // sekaligus menghitung dan mengeset properti usia
    public function setTanggalLahir($tanggalLahir)
    {
        // Validasi nilai untuk tanggalLahir
        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $tanggalLahir)) {
            echo '### Format tanggal salah ###';
            return;
        }

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

// Mengeset nilai properti tanggalLahir secara langsung
// $pengguna->tanggalLahir = '1234-1234-1234'; // Fatal error: Uncaught Error: Cannot access private property Pengguna::$tanggalLahir

// Mengeset nilai yang tidak sesuai format properti tanggalLahir melalui setter
$pengguna->setTanggalLahir('1234-1234-1234'); // Eror Tertangani: Format tanggal salah

// Menampilkan baris baru
echo PHP_EOL;

// Mengeset nilai yang sesuai format properti tanggalLahir melalui setter
$pengguna->setTanggalLahir('2000-01-01');

// Mengakses nilai properti tanggalLahir melalui getter untuk ditampilkan
echo $pengguna->getTanggalLahir(); // 1 Januari 2000
