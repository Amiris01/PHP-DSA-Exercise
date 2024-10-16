<?php 

function arrIntersect(array $data, array $data2){
    $dataLength = count($data);
    $data2Length = count($data2);
    $intersectVal = [];

    for($i = 0; $i < $dataLength; $i++){
        for($j = 0; $j < $data2Length; $j++){
            if($data[$i] == $data2[$j]){
                if (!in_array($data[$i], $intersectVal)) {
                    $intersectVal[] = $data[$i];
                }
            }
        }
    }

    if($intersectVal != []){
        return $intersectVal;
    }else{
        return false;
    }
}

// $array = [1,2,3,4,5,5,3,1,1];
// $array2 = [1,1,1,1,1,2,3];
// $checkIntersect = arrIntersect($array, $array2);

// if($checkIntersect){
//     foreach($checkIntersect as $element){
//         echo $element.' ';
//     }
// }else{
//     echo 'No intersection for this array';
// }

?>