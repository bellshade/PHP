<?php

/**
 * ----------------------------------------------------------------------
 * * BASIC DATETIME
 * ----------------------------------------------------------------------
 * PHP menyediakan DateTime berupa kelas yang memungkinkan kita
 * bekerja dengan tanggal dan waktu secara mudah.
 */

/**
 * 1. Instantiasi Object DateTime
 * -----------------------------------
 * Karena DateTime termasuk salah satu kelas bawaan PHP,
 * Untuk bisa digunakan, perlu di buat instance dari kelas DateTime
 *
 * keterangan: DateTime tanpa parameter akan mengembalikan objek waktu sekarang
 */

$date = new DateTime();

/**
 * 2. Menampilkan DateTime dalam bentuk string / tulisan (Output)
 * -----------------------------------
 * Untuk menampilkan tanggal dan waktu, DateTime menyediakan
 * beberapa method yang bisa digunakan sesuai kebutuhan:
 */
echo '<hr/><h2>Menampilkan Tanggal</h2>';

# ** getTimeStamp()
# Menampilkan UNIX Timestamp dari instance DateTime
echo 'Unix Timestamp: ' . $date->getTimestamp() . '<br/>';

# ** format(formatnya)
# Menampilkan DateTime dalam format tertentu
# Format yang tersedia dapat dilihat di dokumentasi resminya:
# https://www.php.net/manual/en/datetime.createfromformat.php
echo 'Formatted Date: ' . $date->format('d F Y, H:i:s') . '<br/>';


/**
 * 3. Mengatur Tanggal & Waktu (Input)
 * -----------------------------------
 * Ada banyak cara untuk mengatur tanggal dan waktu yang bisa
 * digunakan sesuai dengan berbagai macam kebutuhan dan kondisi
 * Berikut contoh penggunaanya:
 */
echo '<hr/><h2>Mengatur Tanggal</h2>';


# ** Set DateTime untuk waktu sekarang / aktual,
# . Secara default, constructor DateTime sudah mengembalikan waktu aktual
$date = new DateTime();
echo 'DateTime Sekarang: ' . $date->format('d-m-Y, H:i:s') . '<br/>';


# ** setTime(jam, menit, detik)
# Set DateTime menggunakan tanggal dan waktu spesifik
$date = new DateTime();
$date->setTime(20, 31, 57);
$date->setDate(2002, 7, 28);
echo 'setTime & setDate menjadi [28/07/2002, 20:31:57] : ' . $date->format('d-m-Y, H:i:s') . '<br/>';

# ** setISODate(tahun, mingguKeX, hariKeX)
# Set DateTime menggunakan ISO Standard 8601  (Menggunakan Minggu ke-x dan hari ke-x)
$date = new DateTime();
$date->setISODate(2021, 17, 1);
echo 'setISODate menjadi [minggu ke-17 hari ke-1]: ' . $date->format('l, d-m-Y, H:i:s') . '<br/>';

# ** Set DateTime menggunakan format tertentu
# . createFromFormat adalah method static, jadi tidak perlu dilakukan instantiasi
# Penggunaan: createFromFormat(format, tanggalWaktu)
$date = DateTime::createFromFormat('Y-m-d', '2012-12-24');
echo 'createFromFormat: ' . $date->format('d-m-Y, H:i:s') . '<br/>';
