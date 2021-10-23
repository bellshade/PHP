<?php

namespace Searching\Linear;

/**
 * Algoritma Pencarian secara Linear
 * Mencari nilai pada array secara linear
 * @package Searching\Linear
 *
 * kondiak
 */
class LinearSearch
{
    protected $hasil = false;

    /**
     * Fungsi Pencarian
     * @param array $array
     * @param mixed $key
     * @return mixed
     */
    public function cari(array $array, $key)
    {
        //cek panjang elemen array
        $length = count($array);
        //jika array memiliki 0 elemen
        if ($length < 1) {
            return $this->hasil;
        }

        $i = 0;
        //perulangan untuk setiap array
        do {
            if ($array[$i] == $key) {
                //jika data ditemukan
                $this->hasil = true;
                //hentikan perulangan
                break;
            }
            //pencarian secara recursive
            if (is_array($array[$i])) {
                $this->cari($array[$i], $key);
            }
            $i++;
        } while ($i < $length);

        //kembalikan hasil keluaran
        return $this->hasil;
    }
}

//testing
$array = [1, 2, 3, 4, 5, [6, 7, 12, 18], 8, 9, 10];
$nilai1 = 37;
$nilai2 = 12;
$linear = new LinearSearch();

$hasil1 = $linear->cari($array, $nilai1);
$hasil2 = $linear->cari($array, $nilai2);

//Tampilkan Hasil Pencarian
echo '<pre>';
echo 'Data Array :' . PHP_EOL;
print_r($array);

echo PHP_EOL . 'Pencarian Nilai ' . $nilai1 . ', Hasil : ' . PHP_EOL;
echo (!$hasil1) ? '<b>Tidak Ada</b>' : '<b>Ada</b>';

echo PHP_EOL . 'Pencarian Nilai ' . $nilai2 . ', Hasil : ' . PHP_EOL;
echo (!$hasil2) ? '<b>Tidak Ada</b>' : '<b>Ada</b>';
