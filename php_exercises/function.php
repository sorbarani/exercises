<?php
    function even_or_odd($num){
        if($num %2 == 0){
            return "even.";
        }else{
            return "odd.";
        }
    }

    $num = readline("Enter a number:");

    echo "The number is ".even_or_odd($num);
?>