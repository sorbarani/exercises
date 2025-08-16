<?php 
    function upper_first_letter($str){
        //This function change first letter of string to uppercase.
        $str[0] = strtoupper($str[0]);

        return $str;
    }

    $s = "hello I am here.";

    $s = upper_first_letter($s);

    echo $s;
?>