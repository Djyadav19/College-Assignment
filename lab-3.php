<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method = "post">
            <input type = "textbox" name = "num" placeholder = "Enter numbers" required/>
            <input type = "submit"/>
        </form>
        <?php
            if(isset($_POST)){
                function evencheck($a){
                    echo $a . " : " ;
                    echo ($a%2 == 0)?'even<br>' : 'odd<br>';
                }

                $arr = explode(" ", $_POST['num']);

                foreach($arr as $i){
                    evencheck($i);
                }
                $sum = 0;
                foreach($arr as $i){
                    $sum += $i*$i;
                }
                echo "Sum of squares : " . $sum;
            }
        ?>
    </body>
</html>