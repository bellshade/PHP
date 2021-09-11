<?php

/**
 * ------------------------------
 * PATHFINDING - Backtracking
 * ------------------------------
 * Pathfinding adalah salah satu implementasi algoritma backtracking
 * yang dapat menemukan jalan dari posisi awal sampai ke tujuan.
 *
 * Implementasinya yaitu dengan menggunakan array matrix / array 2 dimensi sebagai
 * Peta yang akan dilalui oleh algoritma pathfinding. Didalam peta tersebut terdapat
 * kotak atau cell yang tidak dapat dilalui oleh pathfinding. Oleh karena itu,
 * untuk mencapai tujuan, pathfinding harus mencari jalan dengan menggunakan algoritma backtracking
 */

namespace BackTracking;

class PathFinding
{
    /**
     * Variabel untuk menyimpan array matrix sudoku
     * @var array
     */
    public $matrix;

    public function setMap(array $matrix)
    {
        if (!is_array($matrix)) {
            echo "Format array matrix tidak valid!";
            return;
        }
        $this->matrix = $matrix;
    }

    public function pathFind()
    {
        echo 'Finding path...';
    }
}
