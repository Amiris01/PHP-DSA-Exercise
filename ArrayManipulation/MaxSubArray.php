<?php

//O(n + k) time
function KadaneAlgo(array $data){
    if(empty($data)){
        throw new InvalidArgumentException('Input array cannot be empty.');
    }

    $n = count($data);
    $maxEnding = $data[0];
    $res = $data[0];
    $start = 0;
    $end = 0;
    $tempStart = 0;

    for($i = 1; $i < $n; $i++){
        if ($data[$i] > $maxEnding + $data[$i]){
            $maxEnding = $data[$i];
            $tempStart = $i;
        }else{
            $maxEnding += $data[$i];
        }
        
        if($maxEnding > $res){
            $res = $maxEnding;
            $start = $tempStart;
            $end = $i;
        }
    }
    
    //res is the max sub array sum
    return array_slice($data, $start, $end - $start + 1);
}

?>
