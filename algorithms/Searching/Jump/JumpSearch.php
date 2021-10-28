<?php

/**
 * Algoritma Pencarian JUMPSEARCH
 */

namespace Searching\Jump;

/**
 * Class JumpSearch
 * class berisi algoritma pencarian dengan lompatan index elemen
 *
 * @package Searching\Jump
 * kondiak
 */
class JumpSearch
{
    /**
     * Objek
     * @var array
     */
    private $array;
    private $key;

    /** Metode */

    /**
     * Konstruksi
     * Class Jump Search
     *
     * @param array $array Data yang akan diperiksa
     * @param int $key Data yang akan dicari
     * @return void class build
     */
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

        //Bila nilai terbesar dari elemen lebih kecil dari nilai dicari hentikan pencarian, karena hanya membebani memori
        if (($this->array[$panjang - 1] < $this->key) || ($this->array[$index] > $this->key)) {
            return null;
        }

        //Perulangan untuk menukan nilai, dengan melakukan lompatan index data, selama nilai elemen lebih kecil dari nilai yang dicari
        while ($this->array[$index] < $this->key) {
            $index += $lompatan;

            //Saat lompatan mencapai akhir dari index gunakan index terakhir untuk melakukan linear search secara mundur
            if ($index >= $panjang - 1) {
                $index = $panjang - 1;
            }
        }

        //Pencarian Secara Linear, Karena nilai dari lompatan sudah lebih besar dari nilai dicari
        while ($this->array[$index] >= $this->key) {
            //Jika data ditemukan kembalikan index key dari elemen
            if ($this->array[$index] == $this->key) {
                return $index;
            }
            $index--;
        }

        return null;
    }

    /**
     * Method getLog
     * Abaikan Metode dibawah ini,
     * Metode ini bertujuan untuk mencatat log hasil pencarian
     * yang nantinya di tampilakan pada demo hasil pencarian
     * @return string Log history proses pencarian
     */
    public function getLog()
    {
        $p = count($this->array);
        $l = floor(sqrt($p));
        $i = 0;

        $log = 'Tentukan parameter awal ' . PHP_EOL;
        $log .= 'index : ' . $i . ', Banyak Elemen : ' . $p . ', Buffer antar elemen : ' . $l . PHP_EOL;
        $log .= '----------------------------------' . PHP_EOL;
        if (($this->array[$p - 1] < $this->key) || ($this->array[$i] > $this->key)) {
            return 'Nilai yang dicari tidak berada dalam jangkauan barisan data';
        }

        while ($this->array[$i] < $this->key) {
            $i += $l;
            $log .= 'index : ' . $i . ', nilai : ' . $this->array[$i] . ', Hasil : ';
            $log .= ($this->array[$i] < $this->key) ? 'Terlalu Kecil' . PHP_EOL : 'Terlalu Besar' . PHP_EOL;
            if ($i >= $p - 1) {
                $i = $p - 1;
            }
        }
        if ($this->array[$i] > $this->key) {
            $log .= '----------------------------------' . PHP_EOL;
            $log .= 'Menjalankan Linear Search' . PHP_EOL;
            $log .= '----------------------------------' . PHP_EOL;
        }
        while ($this->array[$i] >= $this->key) {
            $log .= 'index : ' . $i . ', nilai : ' . $this->array[$i] . ', Hasil : ';
            if ($this->array[$i] == $this->key) {
                $log .= '<b>Data Ditemukan</b>' . PHP_EOL;
                return $log;
            }
            $log .= 'Data tidak Cocok' . PHP_EOL;
            $i--;
        }
        $log .= 'Data Tidak Ditemukan';
        return $log;
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

$data = [1, 3, 4, 6, 7, 8, 9, 12, 15, 17, 19, 29, 31, 35, 38, 52, 58, 64, 67, 80, 99, 100];
$key = 64;

$jump = new JumpSearch($data, $key);
$output = $jump->getHasil();

echo "<pre>";
echo "<h1>Jump Search Search</h1>";
echo "Deretan data: " . implode(', ', $data), PHP_EOL;
echo "Yang di cari: " . $key, PHP_EOL;
echo "-------------------------------------------------", PHP_EOL;
print_r($jump->getLog());
echo PHP_EOL;
echo "Apakah ditemukan?: " . ($output === null ? 'Tidak' : 'Ya'), PHP_EOL;
echo "Posisi ditemukan: " . ($output ?? 'Tidak ditemukan'), PHP_EOL;
echo "</pre>", PHP_EOL;
