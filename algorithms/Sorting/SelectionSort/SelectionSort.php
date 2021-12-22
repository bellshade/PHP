<?php

/**
 * --------------
 * Selection Sort
 * --------------
 *
 * Selection Sort adalah salah satu algoritma untuk melakukan penyortiran nilai
 * di dalam array yang acak dengan cara mencari nilai terkecil di dalam array
 * dan menukarnya ke index awal dari array tersebut.
 */

namespace Sorting\SelectionSort;

class SelectionSort
{
    // Buat fungsi selection sort yang menerima input berupa array dan panjang array
    public function selectionSort($arr, $len)
    {
        // Mulai loop dari index ke 0 sampai index ke n-1
        for ($i = 0; $i < $len - 1; $i++) {
            // Set nilai minimum dengan nilai dari index ke i
            $min = $i;
            // Mulai loop dari index ke i+1 sampai index ke n-1
            for ($j = $i + 1; $j < $len; $j++) {
                // Jika nilai index ke j lebih kecil dari nilai minimum,
                if ($arr[$j] < $arr[$min]) {
                    // Set nilai minimum dengan nilai index ke j
                    $min = $j;
                }
            }
            // Simpan nilai index ke i ke variabel temp
            $temp = $arr[$i];
            // Set nilai index ke i dengan nilai minimum
            $arr[$i] = $arr[$min];
            // Set nilai minimum dengan variabel temp
            $arr[$min] = $temp;
        }
        // Kembalikan nilai array
        return $arr;
    }
}

// Buat array yang akan diurutkan
$items = [72, 14, 20, 11, 57, 63];
// Hitung panjang array
$length = count($items);
echo PHP_EOL;
echo "<h1>Selection Sort Algorithm</h1>" . PHP_EOL;
// Cetak array sebelum diurutkan
echo "Data sebelum disort: " . json_encode($items) . "\n";
// Buat objek dari class SelectionSort
$selectionSort = (new SelectionSort())->selectionSort($items, $length);
// Cetak hasil
echo "Data setelah disort: " . json_encode($selectionSort) . "\n";
