<?php
    function finde_max($x, $y, $z){
        //Finde the max number between three numbers.
        if($x > $y && $x > $z){
            return $x;
        }
        elseif($y > $z){
            return $y;
        }
        else{
            return $z;
        }
    }

    $a = 100;
    $b = 190;
    $c = 45;

    
    echo "The max number is ".finde_max($a, $b, $c);

?>