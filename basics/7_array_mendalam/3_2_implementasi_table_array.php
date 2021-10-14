<?php

    /**
     * Materi Basic : 7. Array Mendalam
     * 3. Multi Dimensi Array
     * Contoh Implentasi tabel kedalam array dan Menampilkan kembali kedalam tabel html
     *
     */

    /** Membuat array */
    $tabelcontoh = [
        1 => ['username' => 'wildanie12', 'nama' => 'Badar Wildani', 'status' => ['Member', 'Owner']],          //Baris pertama dari tabel
        2 => ['username' => 'mhaikalla', 'nama' => 'M Haikal Anatam', 'status' => ['Member', 'Contributor']],   //Baris kedua dari tabel
        3 => ['username' => 'adhywiranto44', 'nama' => 'Adhy Wiranto', 'status' => ['Member', 'Admin']],        //Baris ketiga dari tabel
        4 => ['username' => 'nomadkode', 'nama' => 'Ramset', 'status' => ['Member', 'Admin']],                  //Baris keempat dari tabel
        5 => ['username' => 'kondiak', 'nama' => 'Ricky Hadinata', 'status' => 'contributor']                   //Baris kelima dari tabel
    ];

    /** Tampilkan Array */
    echo '<pre>';
    print_r($tabelcontoh);
    echo '</pre>';
