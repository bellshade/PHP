<?php

/**
 * -----------------
 * POPSORT - Sorting
 * -----------------
 *
 * Pop Sort merupakan metode pengurutan dengan menggunakan pendekatan Tower of Homa
 * yaitu mengambil nilai dari paling luar sebuah array kemudian disusun kembali
 * dalam array baru.
 */

namespace Sorting\PopSort;

class PopSort
{
    private array $array = [];

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    /**
     * Eksekusi PopSort
     * @param bool $verbose Berikan true apabila ingin dicetak
     */
    public function start(bool $verbose = false): array
    {
        $log = '<h1>Pop Sort (Sorting)</h1><hr>';

        // Registrasi semua arraynya
        $arrA = $this->array;
        $arrB = [];
        $arrC = [];

        $log .= '<pre>Data sebelum disort: ' . json_encode($arrA) . '</pre>';
        $log .= '<pre> </pre>';

        // Kita loop hingga data di $a kosong
        while (count($arrA) != 0) {
            // Keluarkan nilai paling atas dari array $a
            $atasA = array_pop($arrA);

            $log .= '<pre>Data yang diambil: ' . $atasA . '</pre>';
            $log .= '<pre>Array A: ' . json_encode($arrA) . '</pre>';

            // Apabila array arrB ada isinya dan isi paling atas dari array arrB
            // lebih kecil dari array arrA, kita pindahkan semua nilai-nilai yang
            // cocok dengan kondisi tersebut ke array arrC
            //
            // Pada bagian statement kedua, anda dapat mengganti "<" menjadi ">"
            // sesuai keinginan anda.
            //
            // Catatan:
            // Kita harus menghitung isi array terlebih dahulu sebelum mengambil
            // data array lebih utama agar menghindari error "Undefined index"
            while (count($arrB) > 0 && $atasA > $arrB[count($arrB) - 1]) {
                // Pindahkan data dari $arrB ke $arrC
                array_push($arrC, array_pop($arrB));
            }

            // Setelah aman, kita masukkan data dari $arrA ke $arrB
            array_push($arrB, $atasA);

            $log .= '<pre>Array B: ' . json_encode($arrB) . '</pre>';
            $log .= '<pre>Array C: ' . json_encode($arrC) . '</pre>';

            // Apabila isi $arrC ada, kita balikkan lagi ke $b secara berurutan.
            while (count($arrC) > 0) {
                array_push($arrB, array_pop($arrC));
            }

            $log .= '<pre>Hasil sementara: ' . json_encode($arrB) . '</pre>';
            $log .= '<pre> </pre>';
        }

        $log .= '<pre>Hasil setelah disort: ' . json_encode($arrB) . '</pre>';

        if ($verbose)
            echo $log;

        return $arrB;
    }
}

$popSort = new PopSort([83, 10, 54, 92, 62, 47, 15, 72]);
$popSort->start(true);
