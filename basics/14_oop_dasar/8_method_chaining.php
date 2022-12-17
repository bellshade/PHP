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

        return $this;
    }

    public function hitungLembur($total_hari)
    {
        $this->totalJamLembur = $total_hari * 1;

        return $this;
    }

    public function aturPotongan($totalPotongan)
    {
        $this->totalPotongan = $totalPotongan;

        return $this;
    }

    public function hitungTotalGaji()
    {
        return ($this->totalJamKerja + $this->totalJamLembur) * $this->upahPerJam - $this->totalPotongan;
    }
}

$karyawan = new Karyawan();

$total_gaji = $karyawan->hitungJamKerja(30)->hitungLembur(5)->aturPotongan(100000)->hitungTotalGaji();

echo "Total gaji: Rp. $total_gaji";
