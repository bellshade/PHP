<?php

/**
 * Mengubah Cookie
 */

echo "<pre>";

// // Mengecek apakah user sudah memiliki cookie dengan key `tim`
if (!isset($_COOKIE['tim'])) {
    echo "Oops, harap buka file <a href='5_set_cookie.php'>5_set_cookie.php</a> terlebih dahulu untuk membuat cookie.\nSetelah itu kembali ke halaman ini dan refresh!";
} else {
    // Jika sudah ada cookie `tim`
    echo "<h1>Mengubah Cookie dengan key `tim`</h1>";
    echo "Cookie yang awalnya tim <b>PHP</b> diubah jadi tim <b>JavaScript</b>";

    // Mengubah nilai cookie `tim` = `PHP` menjadi `tim` = `JavaScript`
    // Dan mengubah waktu kedaluwarsa yang awalnya 1 jam jadi 30 menit
    setcookie('tim', 'JavaScript', time() + 1800);
}


echo "</pre>";
