<?php
    $num = 23;

    function show_num(){
        global $num;

        $num = 31;

        echo $num."\n";
    }

    echo $num."\n";
    show_num();
    echo $num;
    
?>