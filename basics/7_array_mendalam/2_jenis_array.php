<?php

    /** Materi Basic : Array Mendalam
     * 2. Jenis Array
     * Mengenal jenis array berdasarkan key
     *
     * Kondiak
     */

    /** Index Array */
    /** Tanpa Key awal ditentukan */
    $index1 = ['satu','dua','tiga', 'empat', 'lima'];                                   //Membuat Array Linear(Index)

    /** Dengan Key awal ditentukan */
    $index2 = [11 => 'satu', 'dua', 'tiga', 'empat', 'lima'];                           //Membuat Array Manual(Index)

    /** Tampilkan Hasil */
    echo '<pre>';
    echo 'Array Index :<br>';
    print_r($index1);
    echo '<br>';
    print_r($index2);

    /** Asosiatif Array */
    $asos = ['origin' => 'bellshade', 'repo' => 'php', 'branch' => 'main'];                                 //Membuat Array Key String (Asosiatif Array)

    /** Tampilkan hasil */
    echo '<br><br>Array Asosiatif :<br>';
    print_r($asos);

    /** Gabungan Index dan Asosiatif Array */
    $gab = [
        1,
        2,
        3,
        'origin' => 'bellshade',
        8 => 4,
        0 => 5,
        6,
        'repo' => 'php',
        'branch' => 'main'
    ];

    echo '<br><br>Gabungan Index dan Asositif Array :<br>';
    print_r($gab);
