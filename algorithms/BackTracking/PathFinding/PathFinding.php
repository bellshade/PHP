<?php

/**
 * ------------------------------
 * PATHFINDING - Backtracking
 * ------------------------------
 * Pathfinding adalah salah satu implementasi algoritma backtracking
 * yang tujuannya adalah menemukan jalan dari posisi awal sampai ke tujuan.
 *
 * Implementasinya yaitu dengan menggunakan array matrix / array 2 dimensi sebagai
 * Peta yang akan dilalui oleh algoritma pathfinding. Didalam peta tersebut terdapat
 * kotak atau cell yang tidak dapat dilalui oleh pathfinding. Oleh karena itu,
 * untuk mencapai tujuan, pathfinding harus mencari jalan dengan menggunakan algoritma backtracking
 *
 * Skenario:
 * - parameter variabel x dan y digunakan untuk menentukan tempat berpijak sekarang
 * - indeks baris dan kolom terakhir ditetapkan sebagai tujuan. [n(xArray)-1, n(yArray)-1]
 *
 * Algoritma ini dalam kalimat bahasa indonesia adalah sebagai berikut:
 * a. cek posisi [x, y] sekarang apakah sudah sampai tujuan yang diinginkan?
 *    > Jika ya: Tandai posisi ini sebagai langkah yang benar. hentikan langkah selanjutnya
 *    > Jika tidak: lakukan langkah berikutnya
 * b. cek posisi [x, y] sekarang apakah boleh dipijaki atau tidak?
 *    > jika ya:
 *      - Catat posisi sekarang [x, y] sebagai langkah yang benar
 *      - Bergerak kekanan dengan cara kembali ke langkah a (Rekursif) membawa nilai y+1
 *        > Jika berhasil: Tandai kekanan adalah jalan yang tepat, kembalikan nilai 1, hentikan langkah selanjutnya
 *        > Jika tidak: lanjut ke langkah selanjutnya
 *      - Bergerak kebawah dengan cara kembali ke langkah a (Rekursif) membawa nilai x+1
 *        > Jika berhasil: Tandai kebawah adalah jalan yang tepat, kembalikan nilai 1, hentikan langkah selanjutnya
 *        > Jika tidak: lanjut ke langkah selanjutnua
 *      - Di titik ini, tidak ada gerakan yang dapat dilakukan / Jalan Buntu
 *      - catat posisi sekarang [x, y] sebagai langkah yang salah
 *      - tandai posisi ini bukan jalan yang tepat dengan mengembalikan nilai 0 / false (Backtracking)
 *
 *    > Jika tidak:
 *      - tandai posisi ini bukan jalan yang tepat dengan mengembalikan nilai 0 / false (Backtracking)
 *
 * Secara sederhana, algoritma ini menjalankan 2 action yaitu: bergerak kekanan dan kebawah secara terus menerus
 * sampai tujuannya tercapai yaitu: berada di tujuan dan berada di tempat yang boleh dipijaki / tanpa rintangan.
 * Jika tiap recursive tidak tercapai tujuannya, maka tidak akan terus mendalami
 * kemungkinan action itu dan akan berpindah ke kemungkinan action lainnya
 */

namespace BackTracking\PathFinding;

class PathFinding
{
    /**
     * Array peta path finding
     * @var array
     */
    private $map = [[]];

    /**
     * Catatan langkah-langkah yang sudah terjadi / dikunjungi
     * format value sebagai berikut:
     * 0 -> Belum dilewati
     * 1 -> Pernah dilewati
     * 2 -> Pernah dilewati tapi jalan buntu (backtracking)
     * @var array
     */
    private $mapVisited = [[]];

    /**
     * Log aktifitas yang dilakukan oleh algoritma
     * @var string
     */
    private $log;

    /**
     * Method untuk mendefinisikan peta yang akan digunakan untuk pathfinding
     * format peta dalam bentuk array 2 dimensi yang tiap value hanya ada 0 dan 1
     * 0 -> boleh dilewati
     * 1 -> tembok / rintangan / tidak boleh dilewati
     * @param array $map
     * @return PathFinding|bool
     */
    public function setMap(array $map)
    {
        // Set property map
        if (!is_array($map)) {
            echo "Format array matrix tidak valid!";
            return;
        }
        $this->map = $map;
        // Set properti map visited, yaitu sama dengan map tapi kosong
        foreach ($map as $xIndex => $xArray) {
            foreach ($xArray as $yIndex => $yValue) {
                $this->mapVisited[$xIndex][$yIndex] = 0;
            }
        }
        // Mengembalikan instance kelas yang sama untuk method chaining
        return $this;
    }

    /**
     * Mencari jalan ke tujuan cell, dengan cara rekursif dan backtracking
     *
     * @param int $x posisi X / baris sekarang
     * @param int $y posisi Y / kolom sekarang
     * @param int $n jumlah index maksimum pada array untuk mendapatkan cell pojok (indeks terakhir) sebagai tujuan
     * @return bool
     */
    public function pathFind($x, $y)
    {
        // Mengambil total panjang dari sebuah array dan dikurangi 1 untuk acuan indeks terakhir
        $indexTerakhir = count($this->map) - 1;
        // Mengecek apakah sudah sampai di tujuan
        if ($x == $indexTerakhir && $y == $indexTerakhir) {
            // Mengecek apakah tempat tujuan bisa dipijaki
            if ($this->map[$indexTerakhir][$indexTerakhir] == 0) {
                $this->setLog("Sudah sampai tujuan");
                $this->mapVisited[$x][$y] = 1;
                return 1;
            }
            return 0;
        }
        // Mengecek apakah posisi sekarang masih didalam map
        if (isset($this->map[$x][$y])) {
            // Mengecek apakah posisi sekarang boleh dipijaki (tidak ada rintangan)
            if ($this->map[$x][$y] == 0) {
                $this->setLog("Berpijak di [$x, $y] boleh");
                $this->mapVisited[$x][$y] = 1;
                // Mencoba bergerak kekanan
                $this->setLog("Mencoba kekanan...   ", false);
                if ($this->pathFind($x, $y + 1)) {
                    // Jika kekanan berhasil dan sudah sampai ditujuan, tandai sebagai jalan yang tepat
                    return 1;
                }
                // Mencoba Kebawah
                $this->setLog("Mencoba kebawah...   ", false);
                if ($this->pathFind($x + 1, $y)) {
                    // Jika kebawah berhasil dan sudah sampai ditujuan, tandai sebagai jalan yang tepat
                    return 1;
                }
                $this->setLog("Jalan buntu, <strong>Pendalaman rekursi berhenti, backtracking... </strong><br/>");
                $this->mapVisited[$x][$y] = 2;
            }
            return 0;
        }
        return 0;
    }

    /**
     * Menambahkan log aktifitas algoritma pada property log
     * @param string $message
     * @param bool $lineEnding Set false untuk tidak menambahkan `<br/>`, default: true
     * @return string
     */
    private function setLog($message, $lineEnding = true)
    {
        $this->log .= $message . ($lineEnding ? "<br/>" : "");
        return $this->log;
    }

    /**
     * Menampilkan log aktifitas yang tertulis
     * @return string
     */
    public function getLog()
    {
        echo $this->log . "<br/>";
    }

    /**
     * Mengambil map dalam bentuk mentahnya (array)
     * @return array
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Mengambil map yang dikunjungi dalam bentuk mentahnya (array)
     * @return array
     */
    public function getMapVisited()
    {
        return $this->mapVisited;
    }

    /**
     * Menampilkan map yang sudah di set dengan
     * tampilan yang informatif dan mudah di mengerti
     * @return void
     */
    public function getMapVisual()
    {
        echo "<table border=1 style='border-collapse: collapse; float: left; margin-right: 16px'>";
        echo "<tr>";
        echo "<td></td>";
        foreach ($this->map[0] as $y => $value) {
            echo "<td style='padding: 8px'>${y}</td>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach ($this->map as $x => $xArray) {
            echo "<td style='padding: 8px'>${x}</td>";
            foreach ($xArray as $y => $value) {
                echo "<td style='padding: 16px; background-color: " . ($value ? 'black' : 'white') . "'></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    /**
     * Menampilkan mapVisited dengan
     * tampilan yang informatif dan mudah di mengerti
     * @return void
     */
    public function getMapVisitedVisual()
    {
        echo "<table border=1 style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<td></td>";
        foreach ($this->mapVisited[0] as $y => $value) {
            echo "<td style='padding: 8px'>${y}</td>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach ($this->mapVisited as $x => $xArray) {
            echo "<tr>";
            echo "<td style='padding:8px'>$x</td>";
            foreach ($xArray as $y => $value) {
                if ($this->map[$x][$y] == 1) {
                    $color = "black";
                } else {
                    if ($value == 0) {
                        $color = "white";
                    } elseif ($value == 1) {
                        $color = "yellow";
                    } elseif ($value == 2) {
                        $color = "red";
                    }
                }
                echo "<td style='padding: 16px; background-color: $color'></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

/**
 * Pathfinding (Backtracking)
 * --------------------------
 */
echo '<h1>PathFinding (Backtracking)</h1><hr>';
$pathFinding = new PathFinding();
$pathFinding->setMap([
    [0, 0, 1, 0, 1],
    [0, 1, 0, 0, 1],
    [0, 0, 0, 1, 0],
    [0, 0, 1, 0, 0],
    [1, 0, 0, 0, 0],
]);
$pathFinding->getMapVisual();
$pathFinding->pathFind(0, 0);
$pathFinding->getMapVisitedVisual();
$pathFinding->getLog();
