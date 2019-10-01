 
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="train.css">
    </head>
    <body>
        <form method = "post">
            <h1>CAR LOAN</h1>
            <p>Loan Amount</p>
            <input type = "range" min = "100000" max = "5000000" value = "2550000" name = "principle"/>
            <p>Interest Rate(%)</p>
            <input type = "range" min = "9" max = "19" value = "14.5" step = "0.1" name = "rate"/>
            <p>Loan Term(Years)</p>
            <input type = "range" min = "12" max = "84" value = "48" name = "time"/>
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