<?php

/**
 * Format Rupiah
 *
 * Fungsi ini digunakan untuk mengubah format angka menjadi format mata uang Rupiah.
 *
 * @category Utilities
 * @package  Bellshade/PHP
 * @author   WPU Community <community@wpu.id>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/bellshade/PHP
 */

function format_rupiah(int $angka): string
{
    return "Rp " . number_format($angka, 0, ',', '.');
}
