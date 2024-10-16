<?php

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

// $array = [9, 6, 5, 3, 2, 8];
// $sortedArray = bubbleSortAscnd($array);
// foreach($sortedArray as $element){
//     echo $element . ' ';
// }
// echo '<br>';
// $sortedArray = bubbleSortDscnd($array);
// foreach($sortedArray as $element){
//     echo $element . ' ';
// }

?>
