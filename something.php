<form method = "post">
    <input type = "number" name = "n1" required/>
    <input type = "number" name = "n2" required/>
    <input type = "submit" name = "operator" value = "/"/>
    <input type = "submit" name = "operator" value = "+"/>
    <input type = "submit" name = "operator" value = "-"/>
    <input type = "submit" name = "operator" value = "*"/>
</form>

<?php
    $output = "";
    function calc($a, $b, $c){
        eval("echo $a $b $c;");
    }
    if(isset($_POST)){
        $output = calc($_POST['n1'], $_POST['operator'], $_POST['n2']);
    }
    echo $output;
?>