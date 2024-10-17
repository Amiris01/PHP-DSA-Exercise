<?php

//O(n²) time
function findDuplicates(array $data){
    $n = count($data);
    $duplicateVal = [];

    for($i = 0; $i < $n; $i++){
        for($j = $i+1; $j<$n; $j++){
            if($data[$i] == $data[$j]){
                if(!in_array($data[$i], $duplicateVal)){
                    $duplicateVal[] = $data[$i];
                }
            }
        }
    }

    if($duplicateVal != []){
        return $duplicateVal;
    }else{
        return false;
    }
}

// O(n) time
function findDuplicate(array $arr) {
    $elementCount = [];
    $duplicates = [];
    foreach ($arr as $value) {
        if (isset($elementCount[$value])) {
            if ($elementCount[$value] === 1) {
                $duplicates[] = $value;
            }
            $elementCount[$value]++;
        } else {
            $elementCount[$value] = 1;
        }
    }

    return $duplicates ? : false;
}

?>