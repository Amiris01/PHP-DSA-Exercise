<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../BasicPHP/StringReverse.php';

class ReverseStringTest extends TestCase {

    public function testSimpleString(){
        $this->assertEquals("olleH", reverseString("Hello"), "Expected 'olleH' for input 'Hello'");
    }

    public function testEmptyString(){
        $this->assertEquals("", reverseString(""), "Expected '' for empty input");
    }

    public function testSingleCharacter(){
        $this->assertEquals("A", reverseString("A"), "Expected 'A' for input 'A'");
    }

    public function testPalindrome(){
        $this->assertEquals("madam", reverseString("madam"), "Expected 'madam' for input 'madam'");
    }

    public function testStringWithSpaces(){
        $this->assertEquals("!dlroW ,olleH", reverseString("Hello, World!"), "Expected '!dlroW ,olleH' for input 'Hello, World!'");
    }

    public function testStringWithSpecialCharacters(){
        $this->assertEquals("54321!#cba", reverseString("abc#!12345"), "Expected '54321!#cba' for input 'abc#!12345'");
    }    
}
