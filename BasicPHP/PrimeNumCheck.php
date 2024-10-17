<?php

//O(√n) time
function PrimeNumCheck($number){
    //1 and negative number not prime
    if ($number <= 1) {
        return false;
    }
    
    //2 and 3 are prime number
    if ($number <= 3) {
        return true;
    }

    //number that divisible by 2 and 3 are not prime number
    if ($number % 2 == 0 || $number % 3 == 0) {
        return false;
    }

    //check divisibility from 5, then increment by 6 (5,11,17,...)
    for ($i = 5; $i * $i <= $number; $i += 6) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            return false;
        }
    }

    return true;
}

?>