<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href = "style.css"/>
    </head>
    <body>
        <form method = "post">
            <h1>POWER CALCULATOR</h1>
            <input type = "number" name = "x" placeholder = "BASE" required/>
            <input type = "number" name = "n" placeholder = "POWER" required/>
            <input type = "submit" name = "submit" value = "Find Value"/>
        </form>
        <?php
            function power($x, $n){
                return ($n>1) ? $x * power($x, $n-1) : $x;
            }
            if(isset($_POST['submit']))
                echo power($_POST['x'],  $_POST['n']);
        ?>
    </body>
</html>