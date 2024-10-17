<?php

//O(n) time
function isArr2d(array $data){
    foreach ($data as $element){
        if (is_array($element)){
            return true;
        }
    }
    return false;
}

//O(n + m) time
function arrayFlat(array $data){
    $newArr = [];
    
    foreach($data as $row){
        if(is_array($row)){
            $newArr = array_merge($newArr, arrayFlat($row));
        }else{
            $newArr[] = $row;
        }
    }
    
    return $newArr;
}

?>