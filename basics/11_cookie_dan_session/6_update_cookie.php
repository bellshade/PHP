<?php

/**
 * Mengubah Cookie
 */

echo "<pre>";

// Mengecek apakah user sudah memiliki cookie dengan key `buah_manis`
if (!isset($_COOKIE['buah_manis'])) {
    // Jika tidak, maka tampilkan teks berikut
    echo "Silahkan buka file <a href='5_set_cookie.php'>5_set_cookie.php</a> terlebih dahulu untuk membuat cookie. Setelah itu kembali ke demo ini lagi.";
} else {
    // Jika cookie sudah ada
    echo "\n\n<h1>Mengubah Cookie dengan key `buah_manis`</h1>";
    echo "Cookie dengan key `buah_manis` saat ini memiliki nilai <b>{$_COOKIE['buah_manis']}</b>\n\n";

    // Cek apakah cookie masih memiliki nilai Rambutan (nilai sebelumnnya)
    if ($_COOKIE["buah_manis"] !== "Semangka") {
        // Jika tidak, maka ubah dulu

        // Mengubah cookie jadi semangka, bertahan selama 30 menit, pada direktori "/", di domain localhost
        setcookie("buah_manis", "Semangka", time() + 1800);

        // Lalu tampilkan teks
        echo "Cookie `buah_manis` dengan nilai <b>{$_COOKIE["buah_manis"]}</b> berhasil diubah jadi <b>Semangka</b>, silakan refresh halaman ini";
    }
}

echo "</pre>";
