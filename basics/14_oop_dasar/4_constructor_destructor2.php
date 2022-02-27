<?php

class Pengguna
{
    /**
     * Membuat attribut anggota
     */
    public $nama;
    public $jenisKelamin;
    public $alamat;
    public $email;

    /**
     * Method constructor disertai parameter untuk dapat dijadikan
     * sebagai nilai dari attribut-attribut diatas
     */
    public function __construct($nama, $jenisKelamin, $alamat, $email)
    {
        $this->nama = $nama;
        $this->jenisKelamin = $jenisKelamin;
        $this->alamat = $alamat;
        $this->email = $email;
    }

    /**
     * Method untuk menampilkan attribute yang sudah ditetapkan
     */
    public function getIdentitas()
    {
        echo 'Nama: ' . $this->nama . '<br/>';
        echo 'Jenis Kelamin: ' . $this->jenisKelamin . '<br/>';
        echo 'Alamat: ' . $this->alamat . '<br/>';
        echo 'Email: ' . $this->email . '<br/>';
    }
}

// Membuat objek pengguna
$budi = new Pengguna('Budi', 'laku-laki', 'Jl. Jakarta', 'budi@mail.com');

// Menampilkan nilai dari atribute menggunakan method `getIdentitas()`
$budi->getIdentitas();
