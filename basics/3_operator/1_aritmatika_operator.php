<?php

    /**
     * Contoh Operator Aritmatika
     *
     * kondiak
     */

    $a = (int) 4;
    $b = (int) 2;
    // Bilangan indetitas
    echo (+$a) . "\n";        //hasil 4

    // Bilangan negatif
    echo var_dump(-$a) . "\n";        //hasil -4

    // Penambahan
    echo var_dump($a + $b) . "\n";    //hasil 6

    // Pengurangan
    echo var_dump($a - $b) . "\n";    //hasil 2

    // Perkalian
    echo var_dump($a * $b) . "\n";    //hasil 8

    // Pembagian
    echo var_dump($a / $b) . "\n";    //hasil 2

    // Exponensial atau pangkat
    echo var_dump($a ** $b) . "\n";   //hasil 16

    // Modulo
    echo var_dump($a % $b) . "\n";    //hasil 0
    echo var_dump(5 % 2) . "\n";      //hasil 1
    echo var_dump(5 % -2) . "\n";     //hasil 1
    echo var_dump(-5 % 2) . "\n";     //hasil -1
    echo var_dump(-5 % -2) . "\n";    //hasil -1
