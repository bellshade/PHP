<?php
require_once 'algorithms/Sorting/BubbleSort/BubbleSort.php';

use PHPUnit\Framework\TestCase;
use Sorting\BubbleSort\BubbleSort;

class BubbleSortTest extends TestCase
{
    public function testBubbleSort()
    {
        $input = [-40, -9, -3, -11, 52, -80, 67, 81, -97, 99];
        $expected = [-97, -80, -40, -11, -9, -3, 52, 67, 81, 99];
        $output = (new BubbleSort)->bubbleSort($input);

        $this->assertEquals($expected, $output);
    }
}
