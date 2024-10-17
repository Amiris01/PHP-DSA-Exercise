<?php 

//O(n * m * k) time
function arrIntersects(array $data, array $data2){
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

//O(n + m) time
function arrIntersect(array $arr1, array $arr2) {
    $set = [];
    foreach ($arr1 as $value) {
        $set[$value] = true;
    }

    $intersection = [];
    foreach ($arr2 as $value) {
        if (isset($set[$value])) {
            $intersection[] = $value;
            unset($set[$value]);
        }
    }

    return $intersection ? :false;
}

?>