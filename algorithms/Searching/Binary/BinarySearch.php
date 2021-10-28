<?php

namespace Searching\Binary;

use function PHPUnit\Framework\isNull;

/**
 * Class BinarySearch
 * class berisi algoritma pencarian secara binary
 *
 * @package Searching\Binary
 */
class BinarySearch
{
    /** Objek dari class */
    protected $array;
    protected $key;
    protected $atas;
    protected $bawah;

    /** Method dari Class */

    /**
     * Konstruksi Class
     * @param array $array
     * @param int $key
     * @param int|null $atas
     * @param int|null $bawah
     * @return void
     */
    public function __construct(array $array, int $key, int $atas = null, int $bawah = null)
    {
        $this->array = $array;
        $this->key = $key;
        $this->atas = $atas;
        $this->bawah = $bawah;
    }

    /**
     * METODE getHasil
     * Algoritma Pencarian
     *
     * @return float
     */
    public function getHasil()
    {
        //Persiapan Variable
        ///Tetapkan indek terendah dan tertinggi
        $atas =  $this->atas ?? (int) count($this->array) - 1;
        $bawah = $this->bawah ?? (int) 0;

        //Cek apakah nilai yang dicari termasuk dalam range data pencarian, jika tidak hentikan pencarian
        //hal ini bertujuan untuk menghemat memory dari pencarian yang sia-sia, early return
        if ($this->key > $this->array[$atas] || $this->key < $this->array[$bawah]) {
            return null;
        }

        //Algoritma
        while ($atas >= $bawah) {
            //cari index tengah, antara index terendah dan tertinggi
            $tengah = floor(($atas + $bawah) / 2);

            //Jika data ditemukan
            if ($this->array[$tengah] == $this->key) {
                //Kembalikan key elemen yang memiliki nilai yang sesuai
                return $tengah;
                // break;
            }

            //Jika Tidak cocok, bandikan nilai
            //jika nilai lebih besar, cari ke elemen bagian kiri nilai, abaikan elemen bagian kanan nilai
            //Lakukan sebaliknya bila lebih kecil
            //dengan cara menaikan index bawah atau mengurangi index atas
            ($this->array[$tengah] > $this->key)
                ? $atas = $tengah - 1
                : $bawah = $tengah + 1;
        }

        //Kembalikan nilai null karena data tidak ditemukan
        return null;
    }

    /**
     * TRACKING LOG
     * Metode ini hanya untuk demonstrasi
     * berfungsi untuk mencatat proses pencarian yang nantinya akan di tampilkan pada halam demo kode
     *
     * @return string History dari pencarian
     */
    public function getLog(): string
    {

        $log = '';
        $atas =  $this->atas ?? (int) count($this->array) - 1;
        $bawah = $this->bawah ?? (int) 0;
        if ($this->key > $this->array[$atas] || $this->key < $this->array[$bawah]) {
            return 'Nilai yang dicari tidak termasuk dalam jangkauan data array';
        }
        while ($atas >= $bawah) {
            $tengah = floor(($atas + $bawah) / 2);
            $log .= 'Index Atas : ' . $atas . ', Index Bawah : ' . $bawah;
            $log .= ', Index Tengah : ' . $tengah . ', Nilai : ' . $this->array[$tengah];
            $log .= ', Hasil : ';

            //Jika data ditemukan
            if ($this->array[$tengah] == $this->key) {
                $log .= '<b>Benar</b>' . PHP_EOL . 'DATA DITEMUKAN' . PHP_EOL;
                return $log;
            }
            if ($this->array[$tengah] > $this->key) {
                $log .= 'Salah, Terlalu Besar.' . PHP_EOL;
                $log .= 'Hapus Kanan, cari kebagian kiri' . PHP_EOL;
                $atas = $tengah - 1;
            } else {
                $log .= 'Salah, Terlalu Kecil' . PHP_EOL;
                $log .= 'Hapus Kiri, cari kebagian Kanan' . PHP_EOL;
                $bawah = $tengah + 1;
            }
        }
        $log .= 'Pencarian Selesai.' . PHP_EOL . 'DATA TIDAK DITEMUKAN' . PHP_EOL;
        return $log;
    }
}

$data = [1, 3, 4, 6, 7, 8, 9, 12, 15, 17, 19, 29, 31, 35, 38, 52, 58, 64, 67, 80, 99, 100];
$key = 64;

$binary = new BinarySearch($data, $key);
$output = $binary->getHasil();

echo "<pre>";
echo "<h1>Binary Search</h1>";
echo "Deretan data: " . implode(', ', $data), PHP_EOL;
echo "Yang di cari: " . $key, PHP_EOL;
echo "-------------------------------------------------", PHP_EOL;
print_r($binary->getLog());
echo PHP_EOL;
echo "Apakah ditemukan?: " . ($output === null ? 'Tidak' : 'Ya'), PHP_EOL;
echo "Posisi ditemukan: " . ($output ?? 'Tidak ditemukan'), PHP_EOL;
echo "</pre>", PHP_EOL;
