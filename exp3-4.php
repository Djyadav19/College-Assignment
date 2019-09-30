<form method = "post">
    <input type = "number" name = "n"/>
    <input type = "submit" name = "submit"/>
</form>
<?php
    if(isset($_POST['submit'])){
        echo "Multiples of 5 below " . $_POST['n'] . " : ";
        for($i = 1; $i*5 < $_POST['n']; $i++)
            echo $i * 5 . " ";
    }
?>