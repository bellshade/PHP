<?php

    /**
     * Contoh AND, OR dan XOR bitwise operator
     *
     * kondiak
     */

    /**
     * Format tampilan hasil eksekusi
     *
     * tidak perlu untuk di perhatikan
     */
    $format = '(%1$2d = %1$08b) = (%2$2d = %2$08b)' . ' %3$s (%4$2d = %4$08b)' . "\n";

    echo <<<EOH
    ---------  -------   ----  ------
      hasil     nilai     op    test
    ---------  -------   ----  ------
    EOH;

    // variable
    $a = array(1, 2, 4, 8);
    $test = 1 + 2;

    /**
     * Bitwise AND
     * Contoh penggunaan operator bitwise AND
     *
     * @var $a as Array
     * @var $test as Integer
     * @return Mixed
     */
    echo "\n Bitewise AND \n";
    foreach ($a as $value) {
    $result = $value & $test;
    printf($format, $result, $value, '&', $test);
    }

    /**
     * Bitwise Or (inclusive or)
     * Contoh penggunaan operator bitwisw OR (inclusive or)
     *
     * @var $a as Array
     * @var $test as integer
     * @return Mixed
     */
    echo "\n Bitwise OR (inclusive or) \n";
    foreach ($a as $value) {
    $result = $value | $test;
    printf($format, $result, $value, '|', $test);
    }

    /**
     * Bitwise XOR (exclusive OR)
     * Contoh penggunaan bitwise exclusive OR (Xor)
     *
     * @var $a as Array
     * @var $test as Integer
     * @return Mixed
     */
    echo "\n Bitwise XOR (exclusive or) \n";
    foreach ($a as $value) {
    $result = $value ^ $test;
    printf($format, $result, $value, '^', $test);
    }

    /**
     * Bitewise Not
     * Contoh penggunaan bitwise Not
     *
     * @var $a as Array
     * @return Mixed
     */
    echo "\n Bitwise Not \n";
    foreach ($a as $value) {
    $result = (int) $value;
    printf($format, ~ $result, $value, '~', null);
    }

    /**
     * Bitewise Shift Left
     * Contoh penggunaan bitwise shift left
     *
     * @var $a as Array
     * @return Mixed
     */
    echo "\n Bitwise Shift Left \n";
    foreach ($a as $value) {
    $result = $value;
    printf($format, $result <<= 2, $value, '<<=', 2);
    }

    /**
     * Bitewise Shift Right
     * Contoh penggunaan bitwise shift left
     *
     * @var $a as Array
     * @return Mixed
     */
    echo "\n Bitwise Shift Right \n";
    foreach ($a as $value) {
    $result = $value;
    printf($format, $result >>= 1, $value, '>>=', 1);
    }
