<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="train.css">
    </head>
    <body>
        <form method = "post">
            <h1> PERSONAL LOAN</h1>
            <p>Loan Amount</p>
            <input type = "range" min = "50000" max = "2000000" value = "1025000" name = "principle"/>
            <p>Interest Rate(%)</p>
            <input type = "range" min = "10.99" max = "18" value = "14.5" step = "0.1" name = "rate"/>
            <p>Loan Term(Years)</p>
            <input type = "range" min = "12" max = "60" value = "36" name = "time"/>
            <input type = "submit" name = "submit" value="calculate"/>
            <a href = "loancalculator.php">Main Menu</a>
        </form>
        <?php
            if(isset($_POST["principle"])){
                echo "<br>Loan Amount : ".$_POST["principle"];
                echo "<br>Interest Rate : ".$_POST['rate'];
                echo "<br>Loan year : ".$_POST['time'];
                echo "<br>EMI/month : " . ($_POST["principle"]*$_POST["rate"]*$_POST["time"])/($_POST['time']*12*100*12);
        } 
        else{
            echo "Please slide the Slider Bar and Press Submit.";
        }
        ?>
    </body>
</html>