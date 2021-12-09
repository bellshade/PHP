<?php

echo '<pre>';

echo "<h1>Property And Method</h1>";
echo "<hr>";
// ---------------------------------
echo "<h2>Membuat property and method</h2>";

class Kelas {
    public $nama,
           $kelas;
    public function siswa (){
        return "Nama : {$this->nama} Kelas : {$this->kelas}";
    } 
}
$nama1 = new Kelas();
$nama1->nama = "Kuro";
$nama1->kelas = "1";
echo $nama1->siswa();

echo '</pre>';

