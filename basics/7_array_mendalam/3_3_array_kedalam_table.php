<?php

    /** Implementasi tabel pada Array */

    $tabelcontoh = [
        1 => ['username' => 'wildanie12', 'nama' => 'Badar Wildani', 'status' => ['Member', 'Owner']],          //Baris pertama dari tabel
        2 => ['username' => 'mhaikalla', 'nama' => 'M Haikal Anatam', 'status' => ['Member', 'Contributor']],   //Baris kedua dari tabel
        3 => ['username' => 'adhywiranto44', 'nama' => 'Adhy Wiranto', 'status' => ['Member', 'Admin']],        //Baris ketiga dari tabel
        4 => ['username' => 'nomadkode', 'nama' => 'Ramset', 'status' => ['Member', 'Admin']],                  //Baris keempat dari tabel
        5 => ['username' => 'kondiak', 'nama' => 'Ricky Hadinata', 'status' => 'contributor']                   //Baris kelima dari tabel
    ];
    $tabelheader = ['No', 'User Name', 'Nama', 'Status'];

    /**
     * Menampilkan Array kedalam tabel
     * Data Array Akan kita tuangkan kedalam tabel html dengan metode nested foreach()
     */

    echo '<pre>';
    // Membuat Header Table
    echo '<br>Tabel Contoh<br>';
    echo '<table style="border: 1px solid black;">';
    $header = '<thead><tr>';
    foreach ($tabelheader as $value) {
        $header .= '<td style="border: 1px solid black;">' . $value . '</td>';
    }
    $header .= '</tr></thead>';
    echo $header;

    echo '<tbody>';
    //Memisahkan key dan value sebuah array jika ingin menggunakan key
    foreach ($tabelcontoh as $key => $value) {
        echo '<tr>';
        // Menggunakan Key dari Array sebagai Nomor (Key Berupa Integer)
        echo '<td style="border: 1px solid black;">' . $key . '</td>';
        // Value dari tabelcontoh berupa Array, Kita extrak terlebuh dulu
        foreach ($value as $data) {
            $kolum = '<td style="border: 1px solid black;">';

            // Beberapa nilai status memiliki nilai berupa data Array
            // Cek apakah value dari data berupa array
            if (is_array($data)) {
                //jika benar array
                foreach ($data as $key => $val) {
                    if ($key === 0) {
                        $kolum .= $val;
                    } else {
                        $kolum .= ', ' . $val;
                    }
                }
                echo $kolum . '</td>';
            } else {
                //Jika data bukan bertipe array
                $kolum .= $data;
                echo $kolum . '</td>';
            }
        }
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';

    echo '</pre>';
