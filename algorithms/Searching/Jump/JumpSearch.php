<?php

namespace Searching\Jump;

/**
 * Class JumpSearch
 * class berisi algoritma pencarian dengan lompatan index elemen
 *
 * @package Searching\Jump
 */
class JumpSearch
{
    /**
     * Objek
     * @var array
     */
    private $array;
    private $key;
    public $ProgressLog;
    public function __construct(array $array, int $key)
    {
        $this->array = $array;
        $this->key = $key;
    }

    /**
     * Method Get Hasil
     * Algoritma Pencarian secara lompatan index
     * @return float|int|null|void
     */
    public function getHasil()
    {
        // menentukan nilai awal dari variable/object
        $panjang = count($this->array);
        $lompatan = floor(sqrt($panjang));
        $index = 0;

        // Abaikan : Log
        $log = 'index : ' . $index . ', Banyak Elemen : ' . $panjang . ', Buffer antar elemen : ' . $lompatan . PHP_EOL;

        //Bila nilai terbesar dari elemen lebih kecil dari nilai dicari hentikan pencarian, karena hanya membebani memori
        if ($this->array[$panjang - 1] < $this->key) {
            return null;
        }

        //Bila nilai elemen terkecil lebih besar dari nilai yang dicari hentikan pencarian, hanya membenani memory
        if ($this->array[$index] > $this->key) {
            return null;
        }

        //Perulangan untuk menukan nilai, dengan melakukan lompatan index data, selama nilai elemen lebih kecil dari nilai yang dicari
        while ($this->array[$index] < $this->key) {
            $index += $lompatan;

            //Abaikan : Log
            $log .= 'index : ' . $index . ', nilai : ' . $this->array[$index] . ', Hasil : ' . PHP_EOL;
            $log .= ($this->array[$index] < $this->key) ? 'Terlalu Kecil' . PHP_EOL : 'Teralu Besar' . PHP_EOL;

            //Saat lompatan mencapai akhir dari index gunakan index terakhir untuk melakukan linear search secara mundur
            if ($index >= $panjang - 1) {
                $index = $panjang - 1;
            }
        }

        //Abaikan : log
        if ($this->array[$index] > $this->key) {
            $log .= 'Menjalankan Linear Search' . PHP_EOL;
        }

        //Pencarian Secara Linear, Karena nilai dari lompatan sudah lebih besar dari nilai dicari
        while ($this->array[$index] >= $this->key) {
            //Abaikan : Log
            $log .= 'index : ' . $index . ', nilai : ' . $this->array[$index] . ', Hasil : ' . PHP_EOL;

            //Jika data ditemukan
            if ($this->array[$index] == $this->key) {
                //Abaikan : Log
                $log .= 'Data ditemukan' . PHP_EOL;
                $this->ProgressLog = $log;
                //Kembalikan key yang cocok dengan pencarian
                return $index;
                //hentikan pencarian
                break;
            }

            //Abaikan : Log
            $log .= 'Data tidak Cocok' . PHP_EOL;

            //Index selnjutnya, berhubung pencarian linear dilakukan secara mundur, kita gunakan decrement
            $index--;
        }
    }

    /**
     * Method Untuk Set Data
     * @param array $array
     * @return void
     */
    public function setData(array $array)
    {
        $this->array = $array;
    }

    /**
     * Method untuk menetapkan nilai yang dicari
     * @param int $key
     * @return void
     */
    public function setKey(int $key)
    {
        $this->key = $key;
    }
}
