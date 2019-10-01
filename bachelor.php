<!DOCTYPE html>
<html>
    <head>
        <title>Party menu</title>
        <link rel="stylesheet" type="text/css" href="party.css">
    </head>
    <link rel="stylesheet" type="text/css" href="party.css">
    <body>
        <header>
            <a href = "party.php"><h1><span class ="white">party</span><span class = "black">maker</span></h1></a>
            <div class = "about">we organise parties that you will remember!!!</div>
        </header>
        <h1 class = "sub-heading">Bachelor's Party</h1>
        <form method = "post">
            <table>
                <tr>
                    <th>S.NO.</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
                <tr>
                    <th>1.</th>
                    <td>Party head</td>
                    <td>90Rs</td>
                    <td><input type = "number" name = "P1"/></td>
                </tr>
                <tr>
                    <th>2.</th>
                    <td>Funny Ballons</td>
                    <td>50Rs</td>
                    <td><input type = "number" name = "P2"/></td>
                </tr>
                <tr>
                    <th>3.</th>
                    <td>Bachelor Cap</td>
                    <td>570Rs</td>
                    <td><input type = "number" name = "P3"/></td>
                </tr>
                <tr>
                    <th>4.</th>
                    <td>Party T-shirt</td>
                    <td>490Rs</td>
                    <td><input type = "number" name = "P4"/></td>
                </tr>
                <tr>
                    <th>5.</th>
                    <td>Bachelor Glasses</td>
                    <td>90Rs</td>
                    <td><input type = "number" name = "P5"/></td>
                </tr>
                <tr>
                    <th>6.</th>
                    <td>Bachelor band</td>
                    <td>70Rs</td>
                    <td><input type = "number" name = "P6"/></td>
                </tr>
                <tr>
                    <th>7.</th>
                    <td>Balloons</td>
                    <td>40Rs-20pcs</td>
                    <td><input type = "number" name = "P7"/></td>
                </tr>
                <tr>
                    <th>8.</th>
                    <td>Balloons</td>
                    <td>80Rs-70pcs</td>
                    <td><input type = "number" name = "P8"/></td>
                </tr>
                <tr>
                    <th>9.</th>
                    <td>Ballons</td>
                    <td>180-200pcs</td>
                    <td><input type = "number" name = "P9"/></td>
                </tr>
                <tr>
                    <th>10.</th>
                    <td>Balloons</td>
                    <td>500Rs-590pcs</td>
                    <td><input type = "number" name = "P10"/></td>
                </tr>
                <tr>
                    <th></th>
                    <th>
                        <?php
                            if(isset($_POST['submit'])){
                                $rate = array(90, 50, 570, 490, 90, 70, 40, 80, 180, 500);
                                $sum = 0;
                                $i = 1;
                                foreach($rate as $x){
                                    $str = "P" . $i;
                                    $sum += $x * $_POST[$str];
                                    $i++;
                                }
                                echo "Total : ";
                            echo"
                    </th>
                    <th></th>
                    <th>".$sum."<th>";
                            }
                    ?>
                </tr>
            </table>
            <input type = "submit" name = "submit" value = "Calculate"/>
        </form>
        
    </body>
<html>