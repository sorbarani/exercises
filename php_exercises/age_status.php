<?php
    function age_status($age){
        if($age >= 0  && $age < 12 ){
            echo "You are baby.";
        }
        elseif($age >= 12 && $age < 18){
            echo "You are teenager";
        }
        elseif($age >= 18 && $age <= 100){
            echo "You are adult.";
        }
        else{
            echo "This is an unusual age!!";
        }
    }

    $age = readline("Please Type your age:");

    echo age_status($age);
?>