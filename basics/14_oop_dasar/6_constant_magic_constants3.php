<?php

namespace App\Basics\OOP;

class DemoKonstantaAjaib
{
    public function lihatBaris()
    {
        echo "Baris saat ini: " . __LINE__ . "\n";
    }

    public function lihatFile()
    {
        echo "File saat ini: " . __FILE__ . "\n";
    }

    public function lihatDirektori()
    {
        echo "Direktori saat ini: " . __DIR__ . "\n";
    }

    public function lihatNamespace()
    {
        echo "Namespace saat ini: " . __NAMESPACE__ . "\n";
    }

    public function lihatFungsi()
    {
        echo "Fungsi saat ini: " . __FUNCTION__ . "\n";
    }

    public function lihatKelas()
    {
        echo "Kelas saat ini: " . __CLASS__ . "\n";
    }

    public function lihatMetode()
    {
        echo "Metode saat ini: " . __METHOD__ . "\n";
    }

    public function lihatTrait()
    {
        echo "Trait saat ini: " . __TRAIT__ . "\n";
    }

    public function lihatClass2()
    {
        echo "Metode saat ini: " . self::class . "\n";
    }
}


// Instansiasi DemoKonstantaAjaib
$demo = new DemoKonstantaAjaib();

// Menampilkan nilai konstanta ajaib
$demo->lihatBaris();
$demo->lihatFile();
$demo->lihatDirektori();
$demo->lihatNamespace();
$demo->lihatFungsi();
$demo->lihatKelas();
$demo->lihatMetode();
$demo->lihatTrait();
$demo->lihatClass2();
