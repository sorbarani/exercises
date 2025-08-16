<?php
    function sum($n){
        //Calculate the sum of numbers from 1 to 50;
        $sum = 0;

        for($i = 1; $i <= $n; $i++){
            $sum += $i;
        }

        return $sum;
    }

    echo "The sum of numbers between 1 to 50 is ".sum(50);
?>