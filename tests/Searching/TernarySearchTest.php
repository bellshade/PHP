<?php

require_once 'algorithms/Searching/Ternary/TernarySearch.php';

use PHPUnit\Framework\TestCase;
use Searching\Ternary\TernarySearch;


class TernarySearchTest extends TestCase
{
    protected $array = array();
    protected $key;
    protected $ternary;

    /**
     * Membuat data Array
     * 
     * Membuat random linear array sebanyak 20 elemen
     * yang akan digunakan untuk melakukan test
     */
    public function generateArray(int $int = 20)
    {
        $array = [];

        foreach (range(1, $int) as $key) {
            $array[$key - 1] = rand(1, 100);
        }

        shuffle($array);
        $this->array = $array;
    }

    /**
     * Test Array Not Sorted
     * 
     * Melakukan test saat array tidak berurut
     * Harapan algoritma mengembalikan pesan error yang sesuai
     */
    public function testNotSorted()
    {
        $this->generateArray();
        $this->ternary = new TernarySearch($this->array[13], $this->array);
        $result = $this->ternary->cari();
        $expected = "Array tidak terurut, disarankan menggunakan linear search";

        $msg = 'Ternary Search : Test pengecekan urutan array gagal, ';
        $msg .= 'hasil diharapkan "' . $expected . '" tidak sama dengan nilai "' . $result . '"';
        // $msg .= 'hasil diharapkan "' . $expected . '" tidak sama dengan nilai hasil';
        $this->assertEquals($expected, $result, $msg);
    }

    /**
     * Test Searching Key Null
     * 
     * Melakukan Test dengan Nilai Pencarian Tidak Ada
     * Harapan algoritma mengembalikan pesan error yang sesuai
     */
    public function testKeySearchNull()
    {
        $this->generateArray(10);
        sort($this->array);
        $this->ternary = new TernarySearch(null, $this->array);
        $result = $this->ternary->cari();
        $expected = 'Key pencarian tidak boleh null';
        $msg = 'Ternary Search : Test key pencarian gagal, hasil yang diharapkan "';
        $msg .= $expected . '" tidak sama dengan nilai hasil';

        $this->assertEquals($expected, $result, $msg);
    }

    /**
     * Test Searching Dengan Data Bukan Array
     * 
     * Melakukan Test dengan Data yang dicari bukan sebuah array
     */
    public function testNotArray()
    {
        $this->ternary = new TernarySearch();
        $this->ternary->setKey(79);
        $this->ternary->setArray = 'Test';

        $result = $this->ternary->cari();

        $expected = "Data Bukan Array";
        $msg = 'Ternary Search : Test type data gagal, hasil yang diharapkan "';
        $msg .= $expected . '" tidak sama dengan nilai hasil';

        $this->assertEquals($expected, $result, $msg);
    }

    /**
     * Test Searching Dengan Data Bukan Array
     * 
     * Melakukan Test dengan Data yang dicari bukan sebuah array
     */
    public function testNumericArray()
    {
        $this->ternary = new TernarySearch();
        $this->ternary->setKey(79);
        $this->ternary->setArray(['jambu', 'mangga', 'pepaya', 'bengkuang']);

        $result = $this->ternary->cari();

        $expected = "Data Bukan Array Numeric";
        $msg = 'Ternary Search : Test numeric array gagal, hasil yang diharapkan "';
        $msg .= $expected . '" tidak sama dengan nilai hasil';

        $this->assertEquals($expected, $result, $msg);
    }

    /**
     * Test Out of Range
     * 
     * Melakukan Test dengan nilai Pencarian
     * lebih besar dari array max atau
     * lebih kecil dari dari array min
     */
    public function testOutOfRange()
    {
        $this->ternary = new TernarySearch();
        $this->generateArray(10);
        sort($this->array);
        $this->ternary->setArray($this->array);
        $this->ternary->setKey(102);

        $result = $this->ternary->cari();
        $expected = "Data tidak ditemukan, Nilai dicari di luar range dari nilai array";
        $msg = 'Ternary Search : Test OutOfRange gagal, hasil yang diharapkan "';
        $msg .= $expected . '" tidak sama dengan nilai hasil';

        $this->assertEquals($expected, $result, $msg);
    }

    /**
     * Final Test, Get Result
     * 
     * Melakukan Test Pencarian
     * Harapan Algoritma Mengembalikan nilai yang sesuai
     */
    public function testCari()
    {
        $this->ternary = new TernarySearch();
        $this->generateArray(20);
        sort($this->array);
        $this->ternary->setArray($this->array);
        $this->ternary->setKey($this->array[15]);
        $result = $this->ternary->cari();

        $this->assertIsNumeric($result, "Test Pencarian Ternary Gagal");
    }

    /**
     * Test With Range
     * 
     * Melakukan test terhadap class TernarySearch, dengan menggunakan range index
     */
    public function testWithRange()
    {
        $this->generateArray();
        $array = $this->array;
        sort($array);
        $key = $array[17];

        $this->ternary = new TernarySearch($key, $array);
        $this->ternary->setBatas(19, 15);
        $result = $this->ternary->cari();

        $this->assertIsNumeric($result, 'Ternary Search: Test WithRange 1 Gagal!');
    }
}
