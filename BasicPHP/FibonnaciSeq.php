<?php 
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

// echo fibSeq(9);

?>