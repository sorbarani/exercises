<?php
    $sum = 0;
    $i = 1;

    while($i <= 100){
        if($i % 2 == 0){
            $sum += $i;
        }

        $i++;
    }

    echo "The sum of even numbers between 1 to 100 is $sum."
?>