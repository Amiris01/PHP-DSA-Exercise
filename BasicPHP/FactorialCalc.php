<?php

//both func O(n) time
//O(n) space complexity
function factCalc($number){
    if($number == 0){
        return 1;
    } else {
        return $number * factCalc($number - 1);
    }
}

//O(1) space complexity 
function factCalcIterative($number) {
    if ($number < 0) {
        throw new InvalidArgumentException('Input must be a non-negative integer.');
    }
    
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    
    return $result;
}

?>