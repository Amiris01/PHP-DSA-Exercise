<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../ArrayManipulation/ArrayFlat.php';

class ArrayTest extends TestCase{

    // Test for isArr2d function
    public function testIsArr2dTrue(){
        $data = [[1, 2], [3, 4]];
        $this->assertTrue(isArr2d($data));
    }

    public function testIsArr2dFalse(){
        $data = [1, 2, 3, 4];
        $this->assertFalse(isArr2d($data));
    }

    public function testIsArr2dEmpty(){
        $data = [];
        $this->assertFalse(isArr2d($data));
    }

    public function testIsArr2dNestedMixed(){
        $data = [1, [2, 3], 4];
        $this->assertTrue(isArr2d($data));
    }

    // Test for arrayFlat function
    public function testArrayFlat2D(){
        $data = [[1, 2], [3, 4]];
        $expected = [1, 2, 3, 4];
        $this->assertEquals($expected, arrayFlat($data));
    }

    public function testArrayFlat1D(){
        $data = [1, 2, 3, 4];
        $expected = [1, 2, 3, 4];
        $this->assertEquals($expected, arrayFlat($data));
    }

    public function testArrayFlatEmpty(){
        $data = [];
        $expected = [];
        $this->assertEquals($expected, arrayFlat($data));
    }

    public function testArrayFlatNestedMixed(){
        $data = [1, [2, 3], 4];
        $expected = [1, 2, 3, 4];
        $this->assertEquals($expected, arrayFlat($data));
    }
}
