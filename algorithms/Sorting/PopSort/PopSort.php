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
        // Registrasi semua arraynya
        $a = $this->array;
        $b = [];
        $c = [];

        return $b;
    }
}

echo '<h1>Pop Sort (Sorting)</h1>';
$data = [83, 10, 54, 92, 62, 47, 15, 72];
$popsort = new PopSort($data);
echo '<pre>Data sebelum disort: ' . json_encode($data) . '</pre>';

echo '<pre>Hasil setelah disort: ' . json_encode($popsort->start()) . '</pre>';
