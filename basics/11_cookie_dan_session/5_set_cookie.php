<?php

/**
 * Cookie
 */

echo "<pre>";

// ----------------------------------------------
echo "<h1>Membuat Cookie</h1>";

if (!isset($_COOKIE['nama']) == "Feri Irawan") {
    // Jika belum ada cookie, maka buat cookie-nya

    // Membuat cookie yang bertahan 0 jam
    setcookie('nama', 'Feri Irawan');

    // Membuat cookie yang bertahan 1 jam
    setcookie('tim', 'PHP', time() + 3600);

    // Membuat cookie yang bertahan 1 jam di direktori `/basics/11_cookie_dan_session`
    setcookie('umur', '17', time() + 3600, "/basics/11_cookie_dan_session");

    // Membuat cookie yang bertahan 1 jam di direktori `/basics/11_cookie_dan_session` di domain http://localhost
    setcookie('buah_manis', 'Rambutan', time() + 3600, "/basics/11_cookie_dan_session", "localhost");

    // Membuat cookie yang bertahan 1 jam di direktori `/basics/11_cookie_dan_session` di domain https://localhost dengan koneksi yang aman (HTTPS)
    setcookie('buah_masam', 'Belimbing', time() + 3600, "/basics/11_cookie_dan_session", "localhost", true);

    // Membuat cookie yang bertahan 1 jam di direktori `/basics/11_cookie_dan_session` hanya di domain http://localhost dengan protocol HTTP
    setcookie('buah_pahit', 'Pare', time() + 3600, "/basics/11_cookie_dan_session", "localhost", true, true);

    // Setelah itu tampilkan teks
    echo "Cookie berhasil dibuat. Refresh halaman ini sekali lagi!";
} else {
    // Jika halaman telah direfresh dan cookie sudah dibuat,
    // maka tampilkan semua cookie yang ada

    // Menampilkan semua cookie
    print_r($_COOKIE);

    // Hasil:
    // Array
    // (
    //     [nama] => Feri Irawan
    //     [umur] => 17
    //     [buah_manis] => Rambutan
    //     [buah_masam] => Belimbing
    //     [buah_pahit] => Pare
    //     [tim] => PHP
    // )

    // Hasil yang tampil mungkin tidak sama (lebih banyak)
    // itu karna terdapat cookie lain yang telah disematkan sebelumnya, atau disematkan oleh server lain
}

echo "</pre>";
