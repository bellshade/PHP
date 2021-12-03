<?php

/**
 * Class TernarySearch
 * 
 * class berisi algoritma pencarian secara ternary
 * @package Searching\Ternary
 */
class TernarySearch
{
    protected $array;
    protected $value;
    protected $keyAwal;
    protected $keyAkhir;

    public function __construct(int $val, array $array, int $keyAwal = null, int $keyAkhir = null)
    {
        $this->array = $array;
        $this->value = $val;
        $this->keyAwal = ($keyAwal) ?? 0;
        $this->keyAkhir = ($keyAkhir) ?? count($array) - 1;
    }

    /**
     * Fungsi Cari
     * 
     * Melakukan Pencarian nilai array secara Ternary
     * @return int|null mengembalikan nilai index array atau null bila tidak ditemukan
     */
    public function cari()
    {
        if (!is_array($this->array))
            return "Data Bukan Array";
        while ($this->keyAwal <= $this->keyAkhir) {
            //Cari nilai tengah dari cursor atas dan bawah
            $curBawah = (int)($this->keyAwal + ($this->keyAkhir - $this->keyAwal) / 3);
            $curAtas = (int)($this->keyAkhir - ($this->keyAkhir - $this->keyAwal) / 3);

            //Bandingkan nilai cursor Atas dan Bawah dengan nilai dicari
            if ($this->array[$curBawah] == $this->value) {
                return $curBawah;
            }

            if ($this->array[$curAtas] == $this->value) {
                return $curAtas;
            }

            switch ($this->value) {
                    // jika nilai berada pada bagian bawah
                case $this->value < $this->array[$curBawah]:
                    $this->keyAkhir = $curBawah - 1;
                    break;

                    // jika nilai berada pada bagian atas
                case $this->value > $this->array[$curAtas]:
                    $this->keyAwal = $curAtas + 1;
                    break;

                    // jika nilai berada pada bagian tengah
                default:
                    $this->keyAwal = $curBawah + 1;
                    $this->keyAkhir = $curAtas - 1;
                    break;
            }
        }
        // jika nilai tidak ditemukan
        return null;
    }

    /**
     * Fungsi Log
     * 
     * Melakukan pencatatan log dari proses pencarian
     * @return string nilai dari log
     */
    public function log(): string
    {
        $log = "";
        if ($this->array[$this->keyAwal] > $this->value || $this->array[$this->keyAkhir] < $this->value) {
            return 'Nilai yang di cari tidak termasuk dalam jangkauan array';
        }
        while ($this->keyAwal <= $this->keyAkhir) {
            //Cari nilai tengah dari cursor atas dan bawah
            $curBawah = (int)($this->keyAwal + ($this->keyAkhir - $this->keyAwal) / 3);
            $curAtas = (int)($this->keyAkhir - ($this->keyAkhir - $this->keyAwal) / 3);

            //Bandingkan nilai cursor Atas dan Bawah dengan nilai dicari
            if ($this->array[$curBawah] == $this->value) {
                return $curBawah;
            }

            if ($this->array[$curAtas] == $this->value) {
                return $curAtas;
            }

            switch ($this->value) {
                    // jika nilai berada pada bagian bawah
                case $this->value < $this->array[$curBawah]:
                    $this->keyAkhir = $curBawah - 1;
                    break;

                    // jika nilai berada pada bagian atas
                case $this->value > $this->array[$curAtas]:
                    $this->keyAwal = $curAtas + 1;
                    break;

                    // jika nilai berada pada bagian tengah
                default:
                    $this->keyAwal = $curBawah + 1;
                    $this->keyAkhir = $curAtas - 1;
                    break;
            }
        }

        return $log;
    }
}

$data = [1, 3, 4, 6, 7, 8, 9, 12, 15, 17, 19, 29, 31, 35, 38, 52, 58, 64, 67, 80, 99, 100];
$key = $data[15];

$ternary = new TernarySearch($key, $data);
$result =  $ternary->cari();
echo $result;
