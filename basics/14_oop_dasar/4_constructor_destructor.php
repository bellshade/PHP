<?php

class SebuahKelas
{
    /**
     * constructor diawali dengan method yang dinamai dengan `__construct`
     * method ini akan dijalankan pertamakali tiap awal instantiasi/pembuatan objek dari kelas ini
     */
    public function __construct()
    {
        // Ini dijalankan pertama kali saat instantiasi objek kelas ini.
        echo "<span style='color: #ddd'>Objek dari kelas `SebuahKelas` dibuat </span> __construct() dipanggil<br/>";
    }

    /**
     * ini adalah method yang menyimulasikan penggunaan kelas biasa (method biasa)
     * jika dipanggil, akan menampilkan pesan halo
     */
    public function sapaHalo()
    {
        echo "Halo, ini adalah keluaran dari method `sapaHalo()` di kelas ini <br/>";
    }

    /**
     * Sama dengan method `sapaHalo` diatas, ini juga untuk
     * menyimulasikan penggunaan kelas seperti biasanya.
     * method seperti ini akan dijalankan sebelum __destruct()
     */
    public function kasihHukuman($kalimat, $jumlahLoop)
    {
        echo "---- ini hukuman ---------<br/>";
        for ($i = 0; $i < $jumlahLoop; $i++) {
            echo $kalimat . '<br/>';
        }
        echo "--------<br/>";
    }

    /**
     * Destructor dibuat dengan method yang dinamai dengan `__destruct()`
     * method destruct ini akan dijalankan saat objek sudah selesai dipakai.
     */
    public function __destruct()
    {
        echo "<span style='color: #ddd'>Penggunaan dari objek ini sudah selesai</span> __destruct() dipanggil <br/>";
    }
}

// Instantiasi objek dari kelas `SebuahKelas` dan menggunakan beberapa methodnya
// __construct() akan dijalankan
$sebuahKelas = new SebuahKelas();
$sebuahKelas->sapaHalo();
$sebuahKelas->kasihHukuman("Saya berjanji tidak akan mengulangi lagi", 20);
// dan dititik ini `__destruct()` akan dijalankan karena penggunakaan objek kelas sudah selesai
