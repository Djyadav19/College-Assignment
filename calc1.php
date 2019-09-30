<head>
    
</head>
<form method = "post">
    <table>
        <input type = "text" name = "n1" required/>
        <input type = "text" name = "n2"/>
            <td><input type = "submit" name = "operator" value = "+"/></td>
            <td><input type = "submit" name = "operator" value = "-"/></td>
            <td><input type = "submit" name = "operator" value = "*"/></td>
        </tr>
        <tr>
            <td><input type = "submit" name = "operator" value = "%"/></td>
            <td><input type = "submit" name = "operator" value = "log"/></td>
            <td><input type = "submit" name = "operator" value = "cos"/></td>
        </tr>
        <tr>
            <td><input type = "submit" name = "operator" value = "sin"/></td>
            <td><input type = "submit" name = "operator" value = "tan"/></td>
            <td><input type = "submit" name = "operator" value = "acos"/></td>
        </tr>
        <tr>
            <td><input type = "submit" name = "operator" value = "asin"/></td>
            <td><input type = "submit" name = "operator" value = "atan"/></td>
            <td><input type = "submit" name = "operator" value = "sqrt"/></td>
        </tr>
    </table>
</form>

<?php
    $output = "";
    function calc($a, $b , $c = 0){
        if($b != 'log' && $b != 'sin' && $b != 'cos' && $b != 'tan'
        && $b != 'acos' && $b != 'asin' && $b != 'atan' && $b != 'sqrt')
            eval("echo $a $b $c;");

        else if($b == 'log')
            eval("echo $b ($a , $c);");

        else
            eval("echo $b($a);");
    }

    if(isset($_POST)){
        $output = calc($_POST['n1'], $_POST['operator'], $_POST['n2']);
    }
    echo $output;
?>