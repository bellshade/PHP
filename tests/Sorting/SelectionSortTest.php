<?php
require_once 'algorithms/Sorting/SelectionSort/SelectionSort.php';

use PHPUnit\Framework\TestCase;
use Sorting\SelectionSort\SelectionSort;

class SelectionSortTest extends TestCase
{
    public function testSelectionSort()
    {
        $input = [72,14,20,11,57,63];
        $len = count($input);
        $expected = [11,14,20,57,63,72];
        $output = (new SelectionSort())->selectionSort($input, $len);

        $this->assertEquals($expected, $output);
    }
}