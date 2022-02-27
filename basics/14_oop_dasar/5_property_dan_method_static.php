<?php

class Kasir
{
    public $nama;
    public $alamat;

    /**
     * Variabel properti static untuk menyimpan waktu shift semua kasir
     */
    public static $waktuShift;

    public function __construct($nama, $alamat)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    /**
     * Method static untuk melakukan operasi pada properti static
     */
    public static function setWaktuShift($shift)
    {
        self::$waktuShift = $shift;
    }
}

// Set waktu shift menggunakan method static
// Karena method static, jadi tidak perlu ada instantiasi objek
Kasir::setWaktuShift(2);
echo 'Waktu Shift: ' . Kasir::$waktuShift;
