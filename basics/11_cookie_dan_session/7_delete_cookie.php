<?php

/**
 * Delete Cookie
 */

echo "<pre>";

echo "<h1>Menghapus Cookie</h1>";

// Mengosongkan value
// Dan membuat cookie telah kedaluarsa 1 jam yang lalu
setcookie("buah_masam", "", time() - 3600);

echo "Cookie dengan key `buah_masam` berhasil dihapus";

echo "</pre>";
