<?php

class Karyawan
{
    private $totalJamKerja = 0;
    private $totalJamLembur = 0;
    private $totalPotongan = 0;
    private $upahPerJam = 15000;

    public function hitungJamKerja($total_hari)
    {
        $this->totalJamKerja = $total_hari * 8;
    }

    public function hitungLembur($total_hari)
    {
        $this->totalJamLembur = $total_hari * 1;
    }

    public function aturPotongan($totalPotongan)
    {
        $this->totalPotongan = $totalPotongan;
    }

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
