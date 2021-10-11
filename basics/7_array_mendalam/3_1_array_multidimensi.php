<?php

    /** Materi Basic : 3. Array Multi Dimensi
     * Contoh array multidimensi
     *
     * kondiak
     */

    /** Linear Array atau Array Satu Dimensi */
    $satu_dimensi = ['satu', 'dua', 'tiga', 'empat', 'lima'];

    /** Matrix Array atau Array Dua Dimensi */
    $dua_dimensi1 = [0 => 'satu', 1 => 'dua', 2 => ['tiga', 'three'], 3 => ['empat', 'four']];
    $dua_dimensi2 = [
        'sayur' => ['bayam', 'kangkung', 'sawi'],
        'buah' => ['mangga', 'pepaya', 'semangka']
    ];

    /** Array Tiga Dimensi dan seterusnya */
    $hewan = [
        'darat' => [
            'peliharaan' => ['kucing', 'anjing'],
            'ternak'     => [
                'berkaki dua'   => ['ayam', 'itik', 'angsa'],
                'berkaki empat' => ['sapi', 'kambing', 'kerbau']
            ],
        ],
        'air' => [
            'air asin' => ['ikan', 'penyu', 'gurita'],
            'air tawar' => ['ikan air tawar', 'belut']
        ],
        'udara' => 'burung'
    ];

    /** Tampilkan Hasil */
    echo '<pre>';
    echo '<h2>Array Multi Dimensi</h2>';
    echo '<br><h3>Linear atau Satu Dimensi</h3><br>';
    print_r($satu_dimensi);

    echo '<br><h3>Array Dua Dimensi</h3><br>';
    print_r($dua_dimensi1);
    print_r($dua_dimensi2);

    echo '<br><h3>Array Tiga Dimensi dan Lebih</h3><br>';
    print_r($hewan);
    print_r([$satu_dimensi, $dua_dimensi2, $hewan]);
