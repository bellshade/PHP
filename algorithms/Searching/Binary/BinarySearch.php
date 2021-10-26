<?php

namespace Searching\Binary;

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
    public $history;

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
     * Method getHasil
     * Algoritma Pencarian
     *
     * @return null|float
     */
    public function getHasil()
    {
        $catatan = '';  //Abaikan : Log

        //Persiapan Variable
        $size = count($this->array);
        //Tetapkan indek terendah dan tertinggi
        $atas =  $this->atas ?? (int) $size - 1;
        $bawah = $this->bawah ?? (int) 0;

        //Cek apakah nilai yang dicari termasuk dalam range data pencarian, jika tidak hentikan pencarian
        //hal ini bertujuan untuk menghemat memory dari pencarian yang sia-sia
        if ($this->key > $this->array[$atas]) {
            return null;
        }

        if ($this->key < $this->array[$bawah]) {
            return null;
        }

        //Algoritma
        while ($atas >= $bawah) {
            //cari index tengah, antara index terendah dan tertinggi
            $tengah = floor(($atas + $bawah) / 2);

            //Abaikan : Log
            $catatan .= 'Index Atas : ' . $atas . ', Index Bawah : ' . $bawah . PHP_EOL;
            $catatan .= 'Index Tengah : ' . $tengah . ', Nilai : ' . $this->array[$tengah] . PHP_EOL;
            $catatan .= 'Hasil : ';

            //Jika data ditemukan
            if ($this->array[$tengah] == $this->key) {
                //Abaikan : Log
                $catatan .= 'Benar' . PHP_EOL;
                $this->history = $catatan;

                //Kembalikan key elemen yang memiliki nilai yang sesuai
                return $tengah;
                break;
            }

            //Jika Tidak cocok, bandikan nilai
            //jika nilai lebih besar, cari ke elemen bagian kiri nilai, abaikan elemen bagian kanan nilai
            //Lakukan sebaliknya bila lebih kecil
            if ($this->array[$tengah] > $this->key) {
                //Abaikan : Log
                $catatan .= 'Salah, Terlalu Besar.' . PHP_EOL;
                $catatan .= 'Hapus Kanan, cari kebagian kiri' . PHP_EOL;
                //index tertinggi baru
                $atas = $tengah - 1;
            } else {
                //Abaikan : Log
                $catatan .= 'Salah, Terlalu Kecil' . PHP_EOL;
                $catatan .= 'Hapus Kiri, cari kebagian Kanan' . PHP_EOL;
                //index terendah baru
                $bawah = $tengah + 1;
            }
        }

        //Abaikan : Log
        $this->history = $catatan;
        //Kembalikan nilai null karena data tidak ditemukan
        return null;
    }
}
