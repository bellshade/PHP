<?php

use PHPUnit\Framework\TestCase;
use Sorting\CountingSort\CountingSort;

require_once 'algorithms/Sorting/CountingSort/CountingSort.php';

class CountingSortTest extends TestCase 
{
    public function testCountingSort()
    {
        $input = [2, 5, 1, 2, 9, 6, 4, 7];
        $expected = [1, 2, 2, 4, 5, 6, 7, 9];
        $actual = (new CountingSort($input))->setMaxValue(9)->sort();
        $this->assertEquals($expected, $actual);
    }
}