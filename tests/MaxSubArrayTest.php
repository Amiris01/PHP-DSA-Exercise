<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../ArrayManipulation/MaxSubArray.php';

class KadaneAlgoTest extends TestCase{

    public function testKadaneAlgoWithPositiveNumbers(){
        $data = [2, 3, -8, 7, -1, 2, 3];
        $expected = [7, -1, 2, 3];
        $this->assertEquals($expected, KadaneAlgo($data));
    }

    public function testKadaneAlgoWithAllNegativeNumbers(){
        $data = [-2, -3, -1, -4];
        $expected = [-1];
        $this->assertEquals($expected, KadaneAlgo($data));
    }

    public function testKadaneAlgoWithMixedNumbers(){
        $data = [1, -2, 3, 4, -5, 6];
        $expected = [3, 4, -5, 6];
        $this->assertEquals($expected, KadaneAlgo($data));
    }

    public function testKadaneAlgoWithSingleElement(){
        $data = [5];
        $expected = [5];
        $this->assertEquals($expected, KadaneAlgo($data));
    }

    public function testKadaneAlgoWithEmptyArray(){
        $data = [];
        $this->expectException(InvalidArgumentException::class);
        KadaneAlgo($data);
    }
}
