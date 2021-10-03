<?php

/**
 * ---------------------
 * BUBBLESORT - Sorting
 * ---------------------
 *
 * Bubble Sort adalah metode pengurutan algoritma dengan cara melakukan penukaran data secara
 * terus menerus sampai bisa dipastikan dalam suatu iterasi tertentu tidak ada lagi perubahan/penukaran.
 *
 * 1. Bandingkan nilai data ke-1 dan data ke-2
 * 2. Jika data ke-1 lebih besar dari data ke-2 maka tukar posisinya
 * 3. Kemudian data yg lebih besar tadi dibandingkan dengan data ke-3
 * 4. Lakukan langkah nomer 2 hingga selesai.
 */

namespace Sorting\BubbleSort;

class BubbleSort
{

    /**
     * Fungsi bubbleSort
     *
     * @param  array $array
     * @return array
     */
    public function bubbleSort(array $array): array
    {
        // $size disini berlaku sebagai penentu jumlah total data array
        $size = count($array);

        // Jika variabel $size tidak ada nilai nya atau 0 maka data array akan langsung dikembalikan
        if (!$size) {
            return $array;
        }

        // Lakukan pengulangan untuk memandingkan nilai data ke-1 dan data ke-2
        for ($index = $size - 2; $index >= 0; $index--) {
            for ($secondIndex = 0; $secondIndex <= $index; $secondIndex++) {
                // Jika data ke-1 lebih besar dari data ke-2 maka tukar posisinya
                if ($array[$secondIndex] > $array[$secondIndex + 1]) {
                    // Lakukan penukaran posisi data
                    $temp = $array[$secondIndex + 1];
                    $array[$secondIndex + 1] = $array[$secondIndex];
                    $array[$secondIndex] = $temp;
                }
            }
        }

        return $array;
    }
}


/**
 * Bubble Sort (Sorting)
 * --------------------------
 */
echo '<h1>Bubble Sort (Sorting)</h1><hr>';

$inputTest = [];

foreach (range(1, 10) as $key) {
    $inputTest[] = rand(-100, 100);
}

$bubbleSort = (new BubbleSort())->bubbleSort($inputTest);

echo '<pre>';
echo 'Input array sebelum di jalankan BubbleSort' . PHP_EOL;
print_r($inputTest);
echo '</pre>';

echo '<pre>';
echo 'Input array setelah di jalankan BubbleSort' . PHP_EOL;
print_r($bubbleSort);
echo '</pre>';
