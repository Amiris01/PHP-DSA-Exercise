<?php

//O(n^2) time
function reverseString(string $data){
    $string = "";
    for($i = strlen($data) - 1; $i >= 0; $i--){
        $string .= $data[$i];
    }
    return $string;
}

//O(n) time
function reverseStringOpt(string $data) {
    $reversedArray = [];
    
    for ($i = strlen($data) - 1; $i >= 0; $i--) {
        $reversedArray[] = $data[$i];
    }
    
    return implode('', $reversedArray);
}

?>