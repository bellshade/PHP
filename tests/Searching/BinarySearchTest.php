<?php

require_once 'algorithms/Searching/Binary/BinarySearch.php';

use PHPUnit\Framework\TestCase;
use Searching\Binary\BinarySearch;

class BinarySearchTest extends TestCase
{
    public function testBinarySearch()
    {
        $data = [1, 3, 4, 6, 7, 8, 9, 12, 15, 17, 19, 29, 31, 35, 38, 52, 58, 64, 67, 80, 99, 100];
        $key = 64;
        $expected = 17;
        $binary = new BinarySearch($data, $key);
        $output = $binary->getHasil();

        $this->assertEquals($expected, $output, 'Pengujian Algoritma Binary Search');
    }
}