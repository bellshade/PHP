<?php

/**
 * Fungsi untuk membuat password acak.
 * Fungsi ini menerima parameter berupa panjang password yang diinginkan (default: 8).
 * @param int $length
 * @return string $password
 */

function generate_password(int $length = 8)
{
    // Karakter untuk dibuat acak/random
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789 !@#$%^&*()_-=+;:,.?{}[]/|\\-";

    /*
    1. Acak karakter menggunakan fungsi str_shuffle()
    2. Kemudian ambil dari karakter yang sudah diacak sebanyak jumlah yang dimasukkan di parameternya, menggunakan fungsi substr()
    */
    $password = substr(str_shuffle($chars), 0, $length);
    return $password;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Password Random</title>
</head>

<body>
    <h1>Password Random:</h1>
    <p><?= generate_password(10) ?></p>
    <a href="">Refresh halaman ini untuk membuat password acak lain</a>
</body>

</html>