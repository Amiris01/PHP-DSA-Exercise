<?php 

function palindromeCheck($string){
    $string = strtolower(str_replace(' ', '', $string));
    $data = "";

    for($i = strlen($string) - 1; $i >= 0; $i--){
        $data .= $string[$i];
    }

    return $string === $data;
}

// $string = 'civic';
// if(palindromeCheck($string)){
//     echo $string.' is palindrome';
// }else{
//     echo $string.' is not palindrome';
// }

?>