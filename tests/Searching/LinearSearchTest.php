<?php

require_once 'algorithms/Searching/Linear/LinearSearch.php';

use PHPUnit\Framework\TestCase;
use Searching\Linear\LinearSearch;

class LinearSearchTest extends TestCase
{
    public function testLinearSearch()
    {
        $input = [23, 25, 12, 14, 2, 10, 33, 76, 6, 18];
        $key = 10;
        $expected = true;
        $output = (new LinearSearch())->cari($input, $key);

        $this->assertEquals($expected, $output);
    }
}