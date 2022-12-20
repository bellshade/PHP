<?php

class Karyawan
{
    /**
     * Menyimpan total jam kerja karyawan
     *
     * @var int
     */
    private $totalJamKerja = 0;

    /**
     * Menyimpan total jam lembur karyawan
     *
     * @var int
     */
    private $totalJamLembur = 0;

    /**
     * Menyimpan total potongan gaji karyawan
     *
     * @var int
     */
    private $totalPotongan = 0;

    /**
     * Menyimpan nilai upah per jam karyawan
     *
     * @var int
     */
    private $upahPerJam = 15000;

    /**
     * Menghitung total jam kerja dan menyimpan hasilnya pada properti $totalJamKerja
     *
     * @param int $totalHari
     * @return Karyawan
     **/
    public function hitungJamKerja($totalHari)
    {
        $this->totalJamKerja = $totalHari * 8;

        return $this;
    }

    /**
     * Menghitung total jam lembur dan menyimpan hasilnya pada properti $totalJamLembur
     *
     * @param int $totalHari
     * @return Karyawan
     **/
    public function hitungLembur($totalHari)
    {
        $this->totalJamLembur = $totalHari * 1.5; // lembur diasumsikan 1.5 jam/hari

        return $this;
    }

    /**
     * Method untuk meng-assign potongan pada karyawan
     *
     * @param int $totalPotongan
     * @return Karyawan
     **/
    public function aturPotongan($totalPotongan)
    {
        $this->totalPotongan = $totalPotongan;

        return $this;
    }

    /**
     * Menghitung total gaji
     *
     * @return int
     **/
    public function hitungTotalGaji()
    {
        return ($this->totalJamKerja + $this->totalJamLembur) * $this->upahPerJam - $this->totalPotongan;
    }
}

$karyawan = new Karyawan();

$total_gaji = $karyawan->hitungJamKerja(30)->hitungLembur(5)->aturPotongan(100000)->hitungTotalGaji();

echo "Total gaji: Rp. $total_gaji";
