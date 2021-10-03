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
        echo !$verbose ? '' : '<h1>Pop Sort (Sorting)</h1><hr>';

        // Registrasi semua arraynya
        $a = $this->array;
        $b = [];
        $c = [];
        echo !$verbose ? '' : '<pre>Data sebelum disort: ' . json_encode($a) . '</pre>';

        // Kita loop hingga data di $a kosong
        while (count($a) != 0) {
            // Keluarkan nilai paling atas dari array $a
            $atasA = array_pop($a);

            if ($verbose) {
                echo '<pre>Data yang diambil: ' . $atasA . '</pre>';
                echo '<pre>Array A: ' . json_encode($a) . '</pre>';
            }

            // Apabila array B ada isinya dan isi paling atas dari array B
            // lebih kecil dari array A, kita pindahkan semua nilai-nilai yang
            // cocok dengan kondisi tersebut ke array C
            //
            // Pada bagian statement kedua, anda dapat mengganti "<" menjadi ">"
            // sesuai keinginan anda.
            //
            // Catatan:
            // Kita harus menghitung isi array terlebih dahulu sebelum mengambil
            // data array lebih utama agar menghindari error "Undefined index"
            while (count($b) > 0 && $atasA > $b[count($b) - 1]) {
                // Pindahkan data dari $b ke $c
                array_push($c, array_pop($b));
            }

            // Setelah aman, kita masukkan data dari $a ke $b
            array_push($b, $atasA);

            if ($verbose) {
                echo '<pre>Array B: ' . json_encode($b) . '</pre>';
                echo '<pre>Array C: ' . json_encode($c) . '</pre>';
            }

            // Apabila isi $c ada, kita balikkan lagi ke $b secara berurutan.
            while (count($c) > 0) {
                array_push($b, array_pop($c));
            }

            echo !$verbose ? '' : '<pre>Hasil sementara: ' . json_encode($b) . '</pre>';
        }

        echo !$verbose ? '' : '<pre>Hasil setelah disort: ' . json_encode($b) . '</pre>';
        return $b;
    }
}

$popSort = new PopSort([83, 10, 54, 92, 62, 47, 15, 72]);
$popSort->start(true);
