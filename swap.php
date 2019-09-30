<?php
    function swap_val($a, $b){
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
    function swap_ref(&$a, &$b){
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
    $a = "Aman";
    $b = "Gill";

    swap_val($a, $b);
    echo $a . " " . $b . "<br>";

    swap_ref($a, $b);
    echo $a . " " . $b;
?>