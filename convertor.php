<?php
    function base_to_decimal($base, $a){
        $converted_system = 0;
        for($i = strlen($a)-1; $i>=0; $i--){
            $var = substr($a, $i, 1);
            switch($var){
                case 'a' | 'A':
                    $var = 10;
                    break;
                case 'b' | 'B':
                    $var = 11;
                    break;
                case 'c' | 'C':
                    $var = 12;
                    break;
                case 'd' | 'D':
                    $var = 13;
                    break;
                case 'e' | 'E':
                    $var = 14;
                    break;
                case 'f' | 'F':
                    $var = 15;
                    break;
            }
            $converted_system += (int)(($var))*($base**(strlen($a)-$i - 1));
        }
        echo $converted_system;
    }
    base_to_decimal(9, '70');
?>