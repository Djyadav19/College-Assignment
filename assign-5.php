<!DOCTYPE html>
<html>    <body>
        <form method = "post">
            <h1>Number System Convertor</h1>
            <input type = "text" name = "number" placeholder = "NUMBER" required/>
            <input type = "number" name = "base" placeholder = "BASE" required/>
            <input type = "submit" name = "submit" value = "To Decimal"/>
            <input type = "submit" name = "submit" value = "To Binary"/>
            <input type = "submit" name = "submit" value = "To Hexadecimal"/>
            <input type = "submit" name = "submit" value = "To Octal"/>
        </form>

        <?php
            function convertor(&$var){
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
            }
            function base_to_decimal($a, $base){
                $converted_system = 0;
                for($i = strlen($a)-1; $i>=0; $i--){
                    $var = substr($a, $i, 1);
                    convertor($var);
                    $converted_system += (int)(($var))*($base**(strlen($a)-$i - 1));
                }
                return $converted_system;
            }

            function decimal_to_binary($n){
                $converted_system = 0;
                $i = 0;
                while($n > 0){
                    $converted_system += (($n%2) * (10**$i));
                    $n = (int)($n/2);
                    $i++;        
                }
                return $converted_system;
            }
            
            function base_to_binary($n, $base){
                return decimal_to_binary(base_to_decimal($n, $base));
            }
            if(isset($_POST['submit'])){
                echo "<span>" . $_POST['number'] . "<sub>" . $_POST['base'] . "</sub> " . $_POST['submit'] . "</span> : ";
                if($_POST['submit'] == "To Decimal")
                    echo base_to_decimal($_POST['number'], $_POST['base']) . "<br>";
                if($_POST['submit'] == "To Binary")
                    echo base_to_binary($_POST['number'], $_POST['base']) . "<br>";
            }
        ?>
    </body>
</html>