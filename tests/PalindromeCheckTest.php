<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../BasicPHP/PalindromeCheck.php';

class PalindromeCheckTest extends TestCase {

    public function testPalindromeWithEvenLength(){
        $this->assertTrue(palindromeCheck("abba"));
    }

    public function testPalindromeWithOddLength(){
        $this->assertTrue(palindromeCheck("racecar"));
    }

    public function testNonPalindrome(){
        $this->assertFalse(palindromeCheck("hello"));
    }

    public function testSingleCharacter(){
        $this->assertTrue(palindromeCheck("a"));
    }

    public function testEmptyString(){
        $this->assertTrue(palindromeCheck(""));
    }

    public function testPalindromeWithSpaces(){
        $this->assertTrue(palindromeCheck("A man a plan a canal Panama"));
    }

    public function testMixedCasePalindrome(){
        $this->assertTrue(palindromeCheck("Racecar"));
    }
}
