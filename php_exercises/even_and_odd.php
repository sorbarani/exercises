<?php
    // define two arrays one of them for evens number and another one for odds.
    $evens = [];
    $odds = [];

    for($i=0 ; $i <= 100 ; $i++){
        if($i % 2 == 0){
            $evens[] = $i;
        }else{
            $odds[] = $i;
        }
    }

?>