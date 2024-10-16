<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../BasicPHP/FactorialCalc.php';

class FactCalcTest extends TestCase {

    public function testFactorialOfZero(){
        $this->assertEquals(1, factCalc(0));
    }

    public function testFactorialOfOne(){
        $this->assertEquals(1, factCalc(1));
    }

    public function testFactorialOfTwo(){
        $this->assertEquals(2, factCalc(2));
    }

    public function testFactorialOfThree(){
        $this->assertEquals(6, factCalc(3));
    }

    public function testFactorialOfFour(){
        $this->assertEquals(24, factCalc(4));
    }

    public function testFactorialOfFive(){
        $this->assertEquals(120, factCalc(5));
    }
}
