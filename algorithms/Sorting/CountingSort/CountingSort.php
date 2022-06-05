<?php

/**
 * ------------------------
 * Counting Sort
 * ------------------------
 * Counting sort adalah salah satu metode algoritma pengurutan data
 * yang harapannya mempunyai kompleksitas lebih rendah dari O(n) = n ^ 2
 * Counting sort membutuhkan asumsi nilai maksimum yang sudah di ketahui
 * untuk dapat dilakukan pengurutan data secara efisien.
 *
 * Counting sort sederhananya melakukan iterasi tiap elemen pada suatu deretan array
 * dan melakukan akumulasi berapa kali nilai keluar yang hasilnya di letakkan pada array baru
 * key dari array adalah bilangannya sementara valuenya berisi berapa kali nilai ditemukan
 * contoh: [2, 5, 3, 2]
 * akumulasi counting array: [0, 0, 2, 1, 0, 1]
 * dari hasil akumulasi dapat dibuat array baru dengan nilai berurutan.
 */

namespace Sorting\CountingSort;

use SplFixedArray;

class CountingSort
{
    private array $array = [];
    private array $countArray;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function setMaxValue(int $maxValue)
    {
        $this->countArray = array_fill(0, $maxValue + 1, 0);
        return $this;
    }

    public function sort(): array
    {
        // Proses penghitungan angka
        foreach ($this->array as $num) {
            $this->countArray[$num]++;
        }
        echo "\nArray : ";
        print_r($this->array);

        echo "CountArray : ";
        print_r($this->countArray);

        // Proses modifikasi array akumulasi untuk pengurutan
        $previousCount = 0;
        foreach ($this->countArray as $index => $count) {
            $this->countArray[$index] = $count + $previousCount;
            $previousCount = $this->countArray[$index];
        }
        echo "CountArray Modified (Acuan penempatan) : ";
        print_r($this->countArray);

        $sortedArray = array_fill(0, count($this->array), 0);
        foreach ($this->array as $num) {
            $indexPlacement = $this->countArray[$num] - 1;
            $sortedArray[$indexPlacement] = $num;
            $this->countArray[$num]--;
        }

        echo "Hasil pengurutan : ";
        print_r($sortedArray);

        return $sortedArray;
    }
}

echo '<pre>';
$input = [2, 5, 1, 2, 9, 6, 4, 7];
$expected = [1, 2, 2, 4, 5, 6, 7, 9];
$actual = (new CountingSort($input))->setMaxValue(9)->sort();
echo '</pre>';
