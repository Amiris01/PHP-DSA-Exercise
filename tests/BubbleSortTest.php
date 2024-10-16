<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../ArrayManipulation/ArraySort.php';

class BubbleSortTest extends TestCase{

    public function testBubbleSortAscnd(){
        $data = [9, 6, 5, 3, 2, 8];
        $expected = [2, 3, 5, 6, 8, 9];
        $this->assertEquals($expected, bubbleSortAscnd($data));
    }

    public function testBubbleSortDscnd(){
        $data = [9, 6, 5, 3, 2, 8];
        $expected = [9, 8, 6, 5, 3, 2];
        $this->assertEquals($expected, bubbleSortDscnd($data));
    }

    public function testBubbleSortAscndWithDuplicates(){
        $data = [5, 3, 3, 2, 9, 6];
        $expected = [2, 3, 3, 5, 6, 9];
        $this->assertEquals($expected, bubbleSortAscnd($data));
    }

    public function testBubbleSortDscndWithDuplicates(){
        $data = [5, 3, 3, 2, 9, 6];
        $expected = [9, 6, 5, 3, 3, 2];
        $this->assertEquals($expected, bubbleSortDscnd($data));
    }

    public function testBubbleSortAscndEmptyArray(){
        $data = [];
        $expected = [];
        $this->assertEquals($expected, bubbleSortAscnd($data));
    }

    public function testBubbleSortDscndEmptyArray(){
        $data = [];
        $expected = [];
        $this->assertEquals($expected, bubbleSortDscnd($data));
    }
}
