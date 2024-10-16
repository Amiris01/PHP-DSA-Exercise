<?php
function reverseString(string $data){
    $string = "";
    for($i = strlen($data) - 1; $i >= 0; $i--){
        $string .= $data[$i];
    }
    return $string;
}


// $string = reverseString('Hello world');
// echo $string;
?>