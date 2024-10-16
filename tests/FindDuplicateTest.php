<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../ArrayManipulation/FindDuplicate.php';

class FindDuplicateTest extends TestCase{

    public function testFindDuplicates(){
        $data = [1, 2, 3, 4, 1, 3];
        $expected = [1, 3];
        $this->assertEquals($expected, findDuplicate($data));
    }

    public function testNoDuplicates(){
        $data = [1, 2, 3, 4];
        $this->assertFalse(findDuplicate($data));
    }

    public function testEmptyArray(){
        $data = [];
        $this->assertFalse(findDuplicate($data));
    }

    public function testAllDuplicates(){
        $data = [5, 5, 5, 5];
        $expected = [5];
        $this->assertEquals($expected, findDuplicate($data));
    }

    public function testMultipleSetsOfDuplicates(){
        $data = [1, 2, 3, 2, 3, 4, 5, 6, 5];
        $expected = [2, 3, 5];
        $this->assertEquals($expected, findDuplicate($data));
    }
}
