<?php

    $number = array(353,546,232,123,54656);
    foreach($number as $x ){
        echo $x." ";
    }
    echo "<br><br>";
    $y = 0;
    $z = $number[0];
    foreach($number as $x ){
        if($x > $y){
            $y = $x;
        } 
        
    }
    foreach($number as $x ){
        if($x < $z){
            $z = $x;
        }
    }

    echo "maximum of the number : ";
    echo $y;
    echo "<br><br>Minimum of the number is : ".$z;


?>