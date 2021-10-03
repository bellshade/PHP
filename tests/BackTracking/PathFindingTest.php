<?php

use BackTracking\PathFinding\PathFinding;
use PHPUnit\Framework\TestCase;

require_once 'algorithms/autoload.php';

class PathFindingTest extends TestCase {

    public function testPathFind()
    {
        $pathFinding = new PathFinding();
        $pathFinding->setMap([
            [0, 0, 1, 0],
            [0, 1, 0, 1],
            [0, 0, 0, 1],
            [1, 1, 0, 0],
        ])->pathFind(0, 0);
        $expectedPath = [
            [1, 2, 0, 0],
            [1, 0, 0, 0],
            [1, 1, 1, 0],
            [0, 0, 1, 1],
        ];
        $this->assertEquals($expectedPath, $pathFinding->getMapVisited());
    }
}