<?php

function factCalc($number){
    if($number == 0){
        return 1;
    } else {
        return $number * factCalc($number - 1);
    }
}

// echo FactCalc(8);

?>