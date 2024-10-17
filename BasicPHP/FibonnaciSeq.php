<?php 

//O(2^n) time
function fibSeq($iteration){
    if($iteration == 0){
        return 0;
    } else if($iteration == 1){
        return 1;
    }else{
        for($i = $iteration; $i>=0; $i--){
            $result = fibSeq($iteration-1) + fibSeq($iteration-2);
        }
        return $result;
    }
}

//O(n) time
function fibSeqIterative($iteration) {
    if ($iteration < 0) {
        throw new InvalidArgumentException('Input must be a non-negative integer.');
    }
    
    if ($iteration == 0) {
        return 0;
    } else if ($iteration == 1) {
        return 1;
    }

    $prev = 0;
    $curr = 1;

    for ($i = 2; $i <= $iteration; $i++) {
        $next = $prev + $curr;
        $prev = $curr;
        $curr = $next;
    }

    return $curr;
}

?>