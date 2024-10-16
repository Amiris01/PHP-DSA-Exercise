<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../BasicPHP/PrimeNumCheck.php';

class PrimeNumCheckTest extends TestCase {

    public function testNegativeNumber(){
        $this->assertFalse(PrimeNumCheck(-5), "Expected false for negative numbers");
    }

    public function testZero(){
        $this->assertFalse(PrimeNumCheck(0), "Expected false for zero");
    }

    public function testOne(){
        $this->assertFalse(PrimeNumCheck(1), "Expected false for one");
    }

    public function testTwo(){
        $this->assertTrue(PrimeNumCheck(2), "Expected true for two");
    }

    public function testThree(){
        $this->assertTrue(PrimeNumCheck(3), "Expected true for three");
    }

    public function testFour(){
        $this->assertFalse(PrimeNumCheck(4), "Expected false for four");
    }

    public function testFive(){
        $this->assertTrue(PrimeNumCheck(5), "Expected true for five");
    }

    public function testSix(){
        $this->assertFalse(PrimeNumCheck(6), "Expected false for six");
    }

    public function testSeventeen(){
        $this->assertTrue(PrimeNumCheck(17), "Expected true for seventeen");
    }

    public function testNineteen(){
        $this->assertTrue(PrimeNumCheck(19), "Expected true for nineteen");
    }

    public function testTwenty(){
        $this->assertFalse(PrimeNumCheck(20), "Expected false for twenty");
    }
}
