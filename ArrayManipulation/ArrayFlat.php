<?php

function isArr2d(array $data){
    foreach ($data as $element){
        if (is_array($element)){
            return true;
        }
    }
    return false;
}

function arrayFlat(array $data){
    $newArr = [];
    
    foreach($data as $row){
        if(is_array($row)){
            foreach ($row as $element){
                $newArr[] = $element;
            }
        }else{
            $newArr[] = $row;
        }
    }
    
    return $newArr;
}


// $array2d = [
//     [1, 2, 3],
//     [4, 5, 6],
//     [7, 8, 9]
// ];

// $array = arrayFlat($array2d);
// if(isArr2d($array)){
//     echo 'This array is 2D array';
// }else{
//     echo 'This array is 1D array';
// }

?>