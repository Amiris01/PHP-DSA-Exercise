<?php

function findDuplicate(array $data){
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

// $array = [1,2,3,4,5,5,3,1,1];
// $checkDup = findDuplicate($array);

// if($checkDup){
//     foreach($checkDup as $element){
//         echo $element.' ';
//     }
// }else{
//     echo 'No duplicate for this array';
// }

?>