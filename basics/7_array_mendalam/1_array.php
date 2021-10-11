<?php

    /** Materi Basic : Array Mendalam
     * 1. Array
     * Contoh kode dalam menginialisasikan array
     *
     * Kondiak
     */

    /** Membuat Array */
    /** Metode Pertama */
    $kota1 = array('Padang', 'Batu Sangkar', 'Paya Kumbuh', 'Pariaman', 'Solok');       //Membuat Array Linear

    /** Metode Kedua */
    $kota2 = ['Padang', 'Batu Sangkar', 'Paya Kumbuh', 'Pariaman', 'Solok'];            //Membuat Array Linear

    /** Tampilkan Hasil */
    echo '<pre>';
    echo 'membuat array dengan perintah :<br>';
    echo '<code style="color:blue;">$kota1 = array(\'Padang\', \'Batu Sangkar\', \'Paya Kumbuh\', \'Pariaman\', \'Solok\');</code><br>';
    echo '<br>Hasil dari $kota1: <br>';
    print_r($kota1);

    echo '<br>Membuat Array dengan perintah :<br>';
    echo '<code style="color:blue;">$kota2 = [\'Padang\', \'Batu Sangkar\', \'Paya Kumbuh\', \'Pariaman\', \'Solok\'];</code><br>';
    echo '<br>Hasil dari $kota2: <br>';
    print_r($kota2);

    /** Mengakses Elemen Array */
    echo '<br>Mengakses Elemen Array :<br>';
    echo 'Syntax : <code style="color:blue">$kota2[<code style="color:red">0</code>];</code><br>';
    echo 'hasil : ';

    echo $kota2[0];                     //Perintah Untuk Mengakses Elemen Pertama (Index 0)
