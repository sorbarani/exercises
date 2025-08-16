<?php
    //This programm doesn't run correctly.
    //Globla variables.
    $n = 21;

    function show_num(){
        //local variable.
        $num = 34;
        echo $num;
        echo $n; // cause an error because its scope is global.and function doesn't recognize it.
    }

    show_num();
    echo $num; // This is seconde error.because the $num is local and didn't define in global scope.
?>