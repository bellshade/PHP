<?php
require_once 'algorithms/Sorting/PopSort/PopSort.php';

use PHPUnit\Framework\TestCase;
use Sorting\PopSort\PopSort;

class PopSortTest extends TestCase
{
    public function testBubbleSort()
    {
        $input = [83,10,54,92,62,47,15,72];
        $expected = [92,83,72,62,54,47,15,10];
        $output = (new PopSort($input))->start();

        $this->assertEquals($expected, $output);
    }
}
