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
     **/
    public function hitungJamKerja($total_hari)
    {
        $this->totalJamKerja = $total_hari * 8;
    }

    /**
     * Menghitung total jam lembur dan menyimpan hasilnya pada properti $totalJamLembur
     *
     * @param int $totalHari
     **/
    public function hitungLembur($total_hari)
    {
        $this->totalJamLembur = $total_hari * 1;
    }

    /**
     * Method untuk meng-assign potongan pada karyawan
     *
     * @param int $totalPotongan
     **/
    public function aturPotongan($totalPotongan)
    {
        $this->totalPotongan = $totalPotongan;
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

$karyawan->hitungJamKerja(30);
$karyawan->hitungLembur(5);
$karyawan->aturPotongan(100000);

$total_gaji = $karyawan->hitungTotalGaji();

echo "Total gaji: Rp. $total_gaji";
