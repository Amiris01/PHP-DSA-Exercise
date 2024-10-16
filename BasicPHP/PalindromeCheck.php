<?php 

//O(n) time
function palindromeCheck($string){
    $string = strtolower(str_replace(' ', '', $string));
    $data = "";

    for($i = strlen($string) - 1; $i >= 0; $i--){
        $data .= $string[$i];
    }

    return $string === $data;
}

?>