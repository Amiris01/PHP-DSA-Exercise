<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../ArrayManipulation/ArrayIntersect.php';

class ArrayIntersectTest extends TestCase{

    // Test for arrIntersect function
    public function testArrIntersectWithCommonElements(){
        $data1 = [1, 2, 3, 4];
        $data2 = [3, 4, 5, 6];
        $expected = [3, 4];
        $this->assertEquals($expected, arrIntersect($data1, $data2));
    }

    public function testArrIntersectWithNoCommonElements(){
        $data1 = [1, 2, 3];
        $data2 = [4, 5, 6];
        $this->assertFalse(arrIntersect($data1, $data2));
    }

    public function testArrIntersectWithDuplicateValues(){
        $data1 = [1, 2, 2, 3, 4];
        $data2 = [2, 2, 3, 5];
        $expected = [2, 3];
        $this->assertEquals($expected, arrIntersect($data1, $data2));
    }

    public function testArrIntersectWithEmptyArrays(){
        $data1 = [];
        $data2 = [1, 2, 3];
        $this->assertFalse(arrIntersect($data1, $data2));

        $data1 = [1, 2, 3];
        $data2 = [];
        $this->assertFalse(arrIntersect($data1, $data2));

        $data1 = [];
        $data2 = [];
        $this->assertFalse(arrIntersect($data1, $data2));
    }

    public function testArrIntersectWithSameArray(){
        $data = [1, 2, 3];
        $expected = [1, 2, 3];
        $this->assertEquals($expected, arrIntersect($data, $data));
    }
}
