<?php

namespace Searching\Ternary;

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
    protected $doSort = false;

    public function __construct(int $val = null, array $array = null, int $keyAwal = 0, int $keyAkhir = null)
    {
        $this->array = $array;
        $this->value = $val;
        $this->keyAkhir = ($keyAkhir) ?? 0;
    }

    /**
     * Set Array
     *
     * Set Data dimana nilai yang akan dicari terdapat
     * @param array $array
     */
    public function setArray($array)
    {
        $this->array = $array;
    }

    /**
     * Set Key
     *
     * Set nilai yang akan di cari
     * @param mixed $key nilai yang akan dicari
     */
    public function setKey($key)
    {
        $this->value = $key;
    }

    /**
     * SetBatas
     *
     * Set Batas index pencarian
     * @param int $atas batas index tertinggi
     * @param int $bawah batas index terendah
     */
    public function setBatas($atas, $bawah = 0)
    {
        $this->keyAkhir = $atas;
        $this->keyAwal = $bawah;
    }

    /**
     * Set Do Sort
     *
     * Untuk melakukan sorting sebelum pencarian
     * @param bool $var
     * @return null
     */
    public function setDoSort(bool $var = false)
    {
        $this->doSort = $var;
    }

    /**
     * Cek Nilai Array
     *
     * Melakukan Cek Sort Array
     * @return boolean true jika sorted array
     */
    public function arrayCek()
    {
        $nilaiCek = $this->array[0];
        foreach ($this->array as $value) {
            if ($nilaiCek <= $value) {
                $nilaiCek = $value;
            } else {
                return false;
                break;
            }
        }
        return true;
    }

    /**
     * Validate
     *
     * Melakukan terhadap validasi terhadap property
     */
    protected function validated()
    {
        // Cek kumpulan data harus berupa array
        if (!is_array($this->array)) {
            return "Data Bukan Array";
        }

        // Cek apakah array sudah diurutkan
        if (!$this->arrayCek()) {
            return "Array tidak terurut, disarankan menggunakan linear search";
        }

        // Cek nilai yang di cari tidak null
        if (empty($this->value)) {
            return "Key pencarian tidak boleh null";
        }

        // Cek nilai di cari berada dalam range nilai array
        if ($this->value < min($this->array) || max($this->array) < $this->value) {
            return "Data tidak di temukan, Nilai dicari diluar range dari nilai array";
        }

        // Jika Property sesuai
        return true;
    }

    /**
     * Fungsi Cari
     *
     * Melakukan Pencarian nilai array secara Ternary
     * @return int|null mengembalikan nilai index array atau null bila tidak ditemukan
     */
    public function cari()
    {
        // Lakukan Sorting terhadap array
        if ($this->doSort) {
            sort($this->array);
        }

        // Lakukan validasi terhadap data
        $cek = $this->validated();

        // Jika validasi gagal
        if (!is_bool($cek)) {
            return $cek;
        }

        $this->keyAkhir = count($this->array) - 1;

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
        // Lakukan validasi terhadap data
        $cek = $this->validated();

        // Jika validasi gagal
        if (!is_bool($cek)) {
            return $cek;
        }

        // Lakukan Sorting terhadap array
        if ($this->doSort) {
            $this->array = sort($this->array);
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

// $data = [1, 3, 4, 6, 7, 8, 9, 12, 15, 17, 19, 29, 31, 35, 38, 52, 58, 64, 67, 80, 99, 100];
// $key = $data[15];

// $ternary = new TernarySearch($key, $data);
// $result =  $ternary->cari();
// echo $result;
