<?php

require_once 'algorithms/Searching/Jump/JumpSearch.php';

use PHPUnit\Framework\TestCase;
use Searching\Jump\JumpSearch;

class JumpSearchTest extends TestCase
{
    public function testJumpSearch()
    {
        $data = [1, 3, 4, 6, 7, 8, 9, 12, 15, 17, 19, 29, 31, 35, 38, 52, 58, 64, 67, 80, 99, 100];
        $key = 64;
        $expected = 17;
        $jumpsearch = new JumpSearch($data, $key);
        $output = $jumpsearch->getHasil();

        $this->assertEquals($expected, $output, 'Pengujian Algoritma JumpSearch');
    }
}