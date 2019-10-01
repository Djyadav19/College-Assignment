<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="train.css">
    </head>
    <body>
        <form method = "post">
            <h1>HOME LOAN</h1>
            <p>Loan Amount</p>
            <input type = "range" min = "0" max = "500000000" value = "250000000" name = "principle"/>
            <p>Interest Rate(%)</p>
            <input type = "range" min = "8" max = "15" value = "11.5" step = "1" name = "rate"/>
            <p>Loan Term(Years)</p>
            <input type = "range" min = "1" max = "30" value = "16" name = "time"/>
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