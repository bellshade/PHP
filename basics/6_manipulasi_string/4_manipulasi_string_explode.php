<?php

    $string = "ular melingkar dipagar pak umar";

    $contoh1 = explode(" ", $string);                   //separator spasi
    $contoh2 = explode(" ", $string, 3);                //limit postitif
    $contoh3 = explode(" ", $string, -3);               //Limit Negatif
    $contoh4 = explode(" ", $string, 0);                //Limit Benilai 0

    echo '<pre>';
    echo 'Contoh 1 : ';
    print_r($contoh1);
    echo 'Contoh 2 : ';
    print_r($contoh2);
    echo 'Contoh 3 : ';
    print_r($contoh3);
    echo 'Contoh 4 : ';
    print_r($contoh4);
    echo '</pre>';
