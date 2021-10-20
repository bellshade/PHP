<?php

    /**
     * Contoh Assigment Operator
     *
     * kondiak
     */

    $a = 9;     //Menetapkan Nilai Variable
    $b = 3;     //Menetapkan Nilai Variable
    echo "\n Basic Assignment Operator";
    echo "\n \$a = " . $a;
    echo "\n \$b = " . $b;

    /**
     * Contoh Aritmatika Assignmetn Operator
     */
    echo "\n Aritmatika Assignment Operator";
    echo "\n \$a += \$b => " . $a += $b;
    echo "\n \$a -= \$b => " . $a -= $b;
    echo "\n \$a *= \$b => " . $a *= $b;
    echo "\n \$a /= \$b => " . $a /= $b;
    echo "\n \$a %= \$b => " . $a %= $b;

    /**
     * Contoh Bitwise Assignment Operator
     */
    echo "\n Bitwise Assignment Operator";
    echo "\n \$a &= \$b => " . $a &= $b;
    echo "\n \$a |= \$b => " . $a |= $b;
    echo "\n \$a ^= \$b => " . $a ^= $b;
    echo "\n \$a <<= \$b => " . $a <<= $b;
    echo "\n \$a >>= \$b => " . $a >>= $b;

    /**
     * Contoh Operator Assignment Lainnya
     */
    $a = "satu";
    $b = "dua";
    $c = null;

    echo "\n String Assignment Operator";
    echo "\n" . $a .= " " . $b;

    echo "\n Null Coalesce Operator";
    $d = $c ?? $b;
    echo "\n" . $d;
