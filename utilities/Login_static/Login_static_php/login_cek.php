<?php

error_reporting(0);
session_start();
//username adalah name yang digunakan untuk penamaan pada text field Username
$username = $_POST["username"];
//password adalah name yang digunakan untuk penamaan pada text field Password
$password = $_POST["password"];

//jika username yang dimasukkan adalah "aku" dan password "uka". Maka berhasil mendapat hak akses
if ($username == "aku" && $password == "uka") {
    $_SESSION["hak_akses"] = "admin";
    //Jika Username & Password yang dimasukkan benar, maka akan menuju view_index.php
    // CONTOHNYA :
    header("location: view_index.php");
} else {
    //jika Username & Password yang dimasukkan salah, maka akan kembali ke login_form_index.php sampai Username & Password yang dimasukkan benar
    header("location: login_form_index.php?pesan=Gagal! DATA TIDAK DITEMUKAN.");
}
