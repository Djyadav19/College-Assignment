<!DOCTYPE html>
<html>
    <body>

        <?php
            $arr = array(2, 5, 1, 5, 6, 3, 5, 6, 8, 10);
            $min_elem = $arr[0];
            $max_elem = $arr[0];
            foreach($arr as $x){
                echo $x . " ";
                if($x < $min_elem)
                    $min_elem = $x;
                if($x > $max_elem)
                    $max_elem = $x;
            }
            echo "<br>Mininum : " . $min_elem . "<br>Maximum : " . $max_elem;
        ?>
    </body>
</html>