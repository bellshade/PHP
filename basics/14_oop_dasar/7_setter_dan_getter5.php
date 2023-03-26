<?php

// Mendefinisikan kelas Pengguna
class Pengguna
{
    private $tanggalLahir;
    private $usia;

    // Setter untuk properti tanggalLahir
    // sekaligus menghitung dan mengeset properti usia
    private function setTanggalLahir($tanggalLahir)
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
    private function getTanggalLahir()
    {
        // Mengakses nilai properti tanggalLahir untuk DIKEMBALIKAN
        // dalam format penulisan tanggal Indonesia
        $dateTimeTanggalLahir = new DateTime($this->tanggalLahir);
        $formatterTanggal = new IntlDateFormatter('id_ID', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
        return $formatterTanggal->format($dateTimeTanggalLahir);
    }

    // Getter untuk properti usia
    private function getUsia()
    {
        // Mengakses nilai properti usia untuk diformat dan DIKEMBALIKAN
        return "{$this->usia} tahun";
    }

    // Setter ajaib
    public function __set($name, $value)
    {
        if ($name == 'tanggalLahir') {
            // Mengeset nilai properti tanggalLahir melalui setter private
            $this->setTanggalLahir($value);

            return;
        }

        echo '### Properti tidak ditemukan ###';
    }

    // Getter ajaib
    public function __get($name)
    {
        if ($name == 'tanggalLahir') {
            // Mengakses nilai properti tanggalLahir yang telah diformat
            // melalui getter yang private untuk DIKEMBALIKAN
            return $this->getTanggalLahir();
        }

        if ($name == 'usia') {
            // Mengakses nilai properti usia yang telah diformat
            // melalui getter yang private untuk DIKEMBALIKAN
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
