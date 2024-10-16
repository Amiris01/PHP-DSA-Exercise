<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../BasicPHP/FibonnaciSeq.php';

class FibSeqTest extends TestCase {

    public function testFibonacciOfZero(){
        $this->assertEquals(0, fibSeq(0));
    }

    public function testFibonacciOfOne(){
        $this->assertEquals(1, fibSeq(1));
    }

    public function testFibonacciOfTwo(){
        $this->assertEquals(1, fibSeq(2));
    }

    public function testFibonacciOfThree(){
        $this->assertEquals(2, fibSeq(3));
    }

    public function testFibonacciOfFour(){
        $this->assertEquals(3, fibSeq(4));
    }

    public function testFibonacciOfFive(){
        $this->assertEquals(5, fibSeq(5));
    }

    public function testFibonacciOfSix(){
        $this->assertEquals(8, fibSeq(6));
    }

    public function testFibonacciOfSeven(){
        $this->assertEquals(13, fibSeq(7));
    }
}
