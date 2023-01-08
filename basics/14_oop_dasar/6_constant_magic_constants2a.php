<?php

namespace Konstanta;

/**
 * Class Pengguna
 */
class Pengguna
{
    // Deklarasi konstanta
    public const PESAN_LOGIN = "Selamat datang‼️";
    public const PESAN_LOGOUT = "Sampai jumpa lagi 👋🏻";

    // Method login dan logout
    public function login()
    {
        echo self::PESAN_LOGIN . "\n";
    }

    public function logout()
    {
        echo self::PESAN_LOGOUT . "\n";
    }
}
