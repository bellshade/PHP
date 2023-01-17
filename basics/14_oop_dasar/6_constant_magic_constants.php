<?php

// Deklarasi KONSTANTA_BIASA
define('KONSTANTA_BIASA', 'nilai konstan biasa');

/**
 * undocumented class
 */
class Kelasku
{
    // Dekalarasi KONSTANTA_KELAS
    public const KONSTANTA_KELAS = 'nilai konstan kelas';

    /**
     * Menampilkan nilai dua konstanta dari dalam kelas
     **/
    public function tampilkanKonstanta()
    {
        echo KONSTANTA_BIASA . "\n";
        echo self::KONSTANTA_KELAS . "\n";
    }
}

// Menampilkan nilai dua konstanta dari luar kelas.
echo KONSTANTA_BIASA . "\n";
echo Kelasku::KONSTANTA_KELAS . "\n";

// Menampilkan nilai KONSTANTA_KELAS dari object Kelasku.
$objectKelasku = new Kelasku();
echo $objectKelasku::KONSTANTA_KELAS . "\n";

// Menampilkan nilai dua konstanta melalui method class.
$objectKelasku->tampilkanKonstanta();
