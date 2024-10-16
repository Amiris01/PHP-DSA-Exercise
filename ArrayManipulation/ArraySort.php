<?php

//O(n²) time
function bubbleSortAscnd(array $data){
    $n = count($data);

    for($i = 0; $i < $n; $i++){
        $swapped = false;

        for($j = 0; $j < $n - $i - 1; $j++){
            if($data[$j] > $data[$j+1]){
                $t = $data[$j];
                $data[$j] = $data[$j+1];
                $data[$j+1] = $t;
                $swapped = true;
            }
        }

        if(!$swapped){
            break;
        }
    }

    return $data;
}

//O(n²) time
function bubbleSortDscnd(array $data){
    $n = count($data);

    for($i = 0; $i < $n; $i++){
        $swapped = false;

        for($j = 0; $j < $n - $i - 1; $j++){
            if($data[$j] < $data[$j+1]){
                $t = $data[$j];
                $data[$j] = $data[$j+1];
                $data[$j+1] = $t;
                $swapped = true;
            }
        }

        if(!$swapped){
            break;
        }
    }

    return $data;
}

?>
